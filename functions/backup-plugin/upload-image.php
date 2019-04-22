<?php
/*
Plugin Name: Upload Image - emporters & cartes
Description: Metabox ajouter l'image du filtre et l'image de backgroud
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.3
*/

/* -------------------------------------------------------------- */
/* Metabox - upload image */
/* -------------------------------------------------------------- */

class metabox_upload_image {
	// Definire WP_SCREEN -------------------------------------------------------
	private $screens = array(
		'cartes',
		'emporters',
		'post'
	); // end -> $screens

	// Définir les champs (élément formulaire) ---------------------------------
	private $fieldimages = array(
		array(
			'id' => 'icon-filter',
			'label' => 'Icon pour la navigation par Filtre',
			'type' => 'media',
		),

		array(
			'id' => 'img-background',
			'label' => 'image d\'arrière plan',
			'type' => 'media',
		),
	); // end -> $fieldimages

	// Initialisation de la Metabox (TOUS) -------------------------------------
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_metabox_upload_image' ) );
		add_action( 'admin_footer', array( $this, 'footer_upload_image' ) );
		add_action( 'save_metabox_upload_image', array( $this, 'save_metabox_upload_image' ) );
	} // end -> unction __construct

	// Création de la Metabox --------------------------------------------------
	public function add_metabox_upload_image() {
		foreach ( $this->screens as $screen ) {
			add_meta_box(
				'img-cartes', 											// ID_META_BOX
				__( 'Image', 'image' ), 								// TITLE_META_BOX
				array( $this, 'metabox_callback_upload_image' ), 		// CALLBACK
				$screen, 												// WP_SCREEN
				'normal',                               				// CONTEXT [ normal | advanced | side ]
                'high'                                  				// PRIORITY [ high | core | default | low ]
			);
		}
	} // end -> add_metabox_upload_image

	// Génère le code HTML pour la meta-box ------------------------------------
	public function metabox_callback_upload_image( $post ) {
		wp_nonce_field( 'MB_upload_images_data', 'MB_upload_images_nonce' );
		$this->generare_fieldimages( $post );
	} // end -> metabox_callback_upload_image

	// S'accroche à la fonction admin_footer de WordPress.----------------------
	// Ajoute des scripts pour l'utilitaire de téléchargement multimédia.
	public function footer_upload_image() {
		?>
			<script>
				// https://codestag.com/how-to-use-wordpress-3-5-media-uploader-in-theme-options/
				jQuery(document).ready(function($){
					if ( typeof wp.media !== 'undefined' ) {
						var _custom_media = true,
						_orig_send_attachment = wp.media.editor.send.attachment;
						$('.rational-metabox-media').click(function(e) {
							var send_attachment_bkp = wp.media.editor.send.attachment;
							var button = $(this);
							var id = button.attr('id').replace('_button', '');
							_custom_media = true;
								wp.media.editor.send.attachment = function(props, attachment){
								if ( _custom_media ) {
									$("#"+id).val(attachment.url);
								} else {
									return _orig_send_attachment.apply( this, [props, attachment] );
								};
							}
							wp.media.editor.open(button);
							return false;
						});
						$('.add_media').on('click', function(){
							_custom_media = false;
						});
					}
				});
			</script>
		<?php
	}

	// Génère le code HTML du champ pour la meta-box ---------------------------
	public function generare_fieldimages( $post ) {
		$output = '';
		foreach ( $this->fieldimages as $fieldimage ) {
			$label = '<label for="' . $fieldimage['id'] . '">' . $fieldimage['label'] . '</label>';
			$db_value = get_post_meta( $post->ID, 'MB_upload_images_' . $fieldimage['id'], true );
			switch ( $fieldimage['type'] ) {
				case 'media':
					$input = sprintf(
						'<input class="regular-text" id="%s" name="%s" type="text" value="%s"> <input class="button rational-metabox-media" id="%s_button" name="%s_button" type="button" value="Upload" />',
						$fieldimage['id'],
						$fieldimage['id'],
						$db_value,
						$fieldimage['id'],
						$fieldimage['id']
					);
					break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$fieldimage['type'] !== 'color' ? 'class="regular-text"' : '',
						$fieldimage['id'],
						$fieldimage['id'],
						$fieldimage['type'],
						$db_value
					);
			}
			$output .= $this->row_format( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	} // end -> generare_fieldimages

	// Génère le code HTML pour les lignes de la table -------------------------
	public function row_format( $label, $input ) {
		return sprintf(
			'<tr><th scope="row">%s</th><td>%s</td></tr>',
			$label,
			$input
		);
	} // end -> row_format


	// Sauvegarde des données de la Metabox ------------------------------------
	public function save_metabox_upload_image( $post_id ) {
		if ( ! isset( $_POST['MB_upload_images_nonce'] ) )
			return $post_id;

		$nonce = $_POST['MB_upload_images_nonce'];
		if ( !wp_verify_nonce( $nonce, 'MB_upload_images_data' ) )
			return $post_id;

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		foreach ( $this->fieldimages as $fieldimage ) {
			if ( isset( $_POST[ $fieldimage['id'] ] ) ) {
				switch ( $fieldimage['type'] ) {
					case 'email':
						$_POST[ $fieldimage['id'] ] = sanitize_email( $_POST[ $fieldimage['id'] ] );
						break;
					case 'text':
						$_POST[ $fieldimage['id'] ] = sanitize_text_field( $_POST[ $fieldimage['id'] ] );
						break;
				}
				update_post_meta( $post_id, 'MB_upload_images_' . $fieldimage['id'], $_POST[ $fieldimage['id'] ] );
			} else if ( $fieldimage['type'] === 'checkbox' ) {
				update_post_meta( $post_id, 'MB_upload_images_' . $fieldimage['id'], '0' );
			}
		} // end > foreach fieldimages
	} // end ->save_metabox_upload_image
}
new metabox_upload_image;
