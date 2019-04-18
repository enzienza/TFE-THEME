<?php

/*
Name:   cpt-album
Description: Custom Post Type pour gérer les album
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/


/*-------------------------------------------------------------------------------------------*/
/* cpt_albums Post Type */
/*-------------------------------------------------------------------------------------------*/

function CPT_albums() {

    $labels = array(
        'name'                  => __('Albums', 'albums'),
        'singuar_name'          => __('Album', 'albums'),
        'menu_name'             => __('Album', 'albums'),
        'name_admin_bar'        => __('Album', 'albums'),
        'add_new'               => __('Ajouter', 'albums'),
        'add_new_item'          => __('Ajouter un album', 'albums'),
        'new_item'              => __('Nouveau album', 'albums'),
        'edit_item'             => __('Editer un album', 'albums'),
        'view_item'             => __('Voir l\' album', 'albums'),
        'all_items'             => __('Toutes les albums', 'albums'),
        'search_items'          => __('Rechercher parmi les albums', 'albums'),
        'not_found'             => __('Pas d\' album trouvées', 'albums'),
        'not_fount_in_trash'    => __('Pas d\' album dans la corbeille', 'albums')
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'albums'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 111,
        'menu_icon'             => 'dashicons-format-audio',
        'supports' => array(
            'title',           // titre
            // 'editor',       // editeur
            // 'author',       // auteur du post
            // 'thumbnail',    // image à la une
            // 'excerpt',      // extrait
            // 'comments'      // commentaires autorisé
        )
    );


    register_post_type('albums', $args);
}

add_action('init',  'CPT_albums');


/* ----------------------------------------------------------------------------- */
/* Metabox - slug */
/* ----------------------------------------------------------------------------- */

// 1 - Création la Metabox -----------------------------------------------------

add_action('add_meta_boxes', 'add_metabox_slug_albums');

function add_metabox_slug_albums(){
    add_meta_box(
        'id_metabox_slug_albums',                         // ID_META_BOX
        'Slug',                                           // TITLE_META_BOX
        'MB_slug_albums',                                 // CALLBACK
        'albums',                                         // WP_SCREEN
        'side',                                         // CONTEXT [ normal | advanced | side ]
        'high'                                            // PRIORITY [ high | core | default | low ]
    );
} // END => add_metabox_sticky_albums


// 2 - Construction de la Metabox ----------------------------------------------

function MB_slug_albums($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_slug_albums_nonce');
    $slug_album = get_post_meta($POST->ID, 'slug_album', true);

    ?>
    <p>
        <label for="slug_album">Slug</label>
        <input type="text" id="slug_album" name="slug_album" value="<?php echo $slug_album; ?>">
        <p class="info">
            Attention pas de majuscule, ni accent, ni d'espace, etc.Tout doit être en un mot
        </p>
    </p>

    <?php

} // END => MB_sticky_albums


// 3 - Sauvegarde des données de la métabox ------------------------------------

add_action('save_post', 'save_metabox_slug_albums');

function save_metabox_slug_albums($POST_ID){
    if(isset($_POST['slug_album'])){
        update_post_meta($POST_ID, 'slug_album', $_POST['slug_album']);
    }
} // END => save_metabox_sticky_albums


/* ----------------------------------------------------------------------------- */
/* Metabox - upload image */
/* ----------------------------------------------------------------------------- */


class metabox_img_album {
    // Definire WP_SCREEN -------------------------------------------------------
    private $screen = array(
        'albums',
    ); // end ->  $screen

    // Définir les champs (élément formulaire) ---------------------------------
    private $meta_fields = array(
        array(
            'label' => 'Icon pour la navigation par Filtre',
            'id'    => 'icon-album',
            'type'  => 'media',
        ),

        array(
            'label' => 'image d\'arrière plan',
            'id'    => 'bg-album',
            'type'  => 'media',
        ),

    ); // end -> $meta_fields

    // Initialisation de la Metabox (TOUS) -------------------------------------
    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_metaboxe_image_album' ) );
        add_action( 'admin_footer', array( $this, 'media_field_image_album' ) );
        add_action( 'save_post', array( $this, 'save_metabox_image_album' ) );
    } // end -> __construct

    // Création de la Metabox --------------------------------------------------
    public function add_metaboxe_image_album() {
        foreach ( $this->screen as $single_screen ) {
            add_meta_box(
                'metabox_img_album',                    // ID_META_BOX
                __( 'Images'),                          // TITLE_META_BOX
                array( $this, 'meta_box_callback' ),    // CALLBACK
                $single_screen,                         // WP_SCREEN
                'normal',                               // CONTEXT [ normal | advanced | side ]
                'core'                                  // PRIORITY [ high | core | default | low ]
            );
        }
    } // end -> add_meta_boxes


    public function meta_box_callback( $POST ) {
        wp_nonce_field( 'img_album_data', 'img_album_nonce' );
        $this->champ_genere( $POST );
    } // end -> meta_box_callback

    // Construction Srcipt -----------------------------------------------------
    public function media_field_image_album() {
        ?>
        <!-- START -> script -->
        <script>
            jQuery(document).ready(function($){

                // condition
                if ( typeof wp.media !== 'undefined' ) {

                    var _custom_media = true,
                    _orig_send_attachment = wp.media.editor.send.attachment;

                    $('.img_album-media').click(function(e) {
                        var send_attachment_bkp = wp.media.editor.send.attachment;
                        var button = $(this);
                        var id = button.attr('id').replace('_button', '');
                        _custom_media = true;
                        wp.media.editor.send.attachment = function(props, attachment){
                            // condition
                            if ( _custom_media ) {
                                $('input#'+id).val(attachment.url);
                            } else {
                                return _orig_send_attachment.apply( this, [props, attachment] );
                            };
                        } // end -> wp.media.editor.send.attachment

                        wp.media.editor.open(button);
                        return false;
                    }); // end -> click .img_album-media

                    $('.add_media').on('click', function(){
                        _custom_media = false;
                    }); // end -> on click .add_media

                } // end -> if ( typeof wp.media !== 'undefined' )

            }); // end -> ready document
        </script>
        <?php
    } // end -> media_field_image_album

    // Construction de la Metabox ----------------------------------------------
    public function champ_genere( $POST ) {

        $output = '';
        foreach ( $this->meta_fields as $meta_field ) {
            $label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
            $meta_value = get_post_meta( $POST->ID, $meta_field['id'], true );
            if ( empty( $meta_value ) ) {
                $meta_value = $meta_field['default'];
            } // end -> if ( empty( $meta_value )
            switch ( $meta_field['type'] ) {
                case 'media':
                $input = sprintf(
                    '<input style="width: 80%%" id="%s" name="%s" type="text" value="%s"> <input style="width: 19%%" class="button img_album-media" id="%s_button" name="%s_button" type="button" value="Upload" />',
                    $meta_field['id'],
                    $meta_field['id'],
                    $meta_value,
                    $meta_field['id'],
                    $meta_field['id']
                );
                break;
                default:
                $input = sprintf(
                    '<input %s id="%s" name="%s" type="%s" value="%s">',
                    $meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
                    $meta_field['id'],
                    $meta_field['id'],
                    $meta_field['type'],
                    $meta_value
                );
            } // end -> switch ( $meta_field['type'] )
            $output .= $this->format_rows( $label, $input );
        } // end -> foreach ( $this->meta_fields as $meta_field )

        echo '<div>' . $output . '</div>';
    } // end -> champ_genere


    public function format_rows( $label, $input ) {
        return '<p>'.$label.'</p><p>'.$input.'</p>';
    } // end -> format_rows

    // Sauvegarde des données de la Metabox ------------------------------------
    public function save_metabox_image_album( $POST_ID ) {

        if ( ! isset( $_POST['img_album_nonce'] ) )
        return $POST_ID;

        $nonce = $_POST['img_album_nonce'];
        if ( !wp_verify_nonce( $nonce, 'img_album_data' ) )
        return $POST_ID;

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
        return $POST_ID;

        foreach ( $this->meta_fields as $meta_field ) {
            if ( isset( $_POST[ $meta_field['id'] ] ) ) {
                switch ( $meta_field['type'] ) {
                    case 'email':
                    $_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
                    break;
                    case 'text':
                    $_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
                    break;
                } // end -> switch ( $meta_field['type'] )

                update_post_meta( $POST_ID, $meta_field['id'], $_POST[ $meta_field['id'] ] );

            } else if ( $meta_field['type'] === 'checkbox' ) {
                update_post_meta( $POST_ID, $meta_field['id'], '0' );
            } // end ->  else if ( $meta_field['type'] === 'checkbox' )

        } // end -> foreach ( $this->meta_fields as $meta_field )

    } // end -> save_metabox_image_album

} // END => class metabox_img_album

// verification de ma metabox --------------------------------------------------
if (class_exists('metabox_img_album')) {
    new metabox_img_album;
}; // END => if (class_exists('metabox_img_album')
