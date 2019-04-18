<?php

/*
Name:   cpt-event
Description: Custom Post Type pour gérer les événement
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/


/* ------------------------------------------------------------------------------ */
/* cpt_events Post Type */
/* ------------------------------------------------------------------------------ */

function CPT_events() {

    $labels = array(
        'name'                  => __('Événements', 'events'),
        'singuar_name'          => __('Événement', 'events'),
        'menu_name'             => __('Événement', 'events'),
        'name_admin_bar'        => __('Événement', 'events'),
        'add_new'               => __('Ajouter', 'events'),
        'add_new_item'          => __('Ajouter un événement', 'events'),
        'new_item'              => __('Nouveau événement', 'events'),
        'edit_item'             => __('Editer un événement', 'events'),
        'view_item'             => __('Voir l\' événement', 'events'),
        'all_items'             => __('Toutes les events', 'events'),
        'search_items'          => __('Rechercher parmi les events', 'events'),
        'not_found'             => __('Pas d\' événement trouvées', 'events'),
        'not_fount_in_trash'    => __('Pas d\' événement dans la corbeille', 'events')
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'events'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 113,
        'menu_icon'             => 'dashicons-awards',
        'supports' => array(
            'title'
        )
    );


    register_post_type('events', $args);
}

add_action('init',  'CPT_events');


/* ----------------------------------------------------------------------------- */
//  METABOX  Pour sticky events (mise en avant)
/* ----------------------------------------------------------------------------- */


// 1 - initialisation de la metabox

add_action('add_meta_boxes', 'add_metabox_sticky_events');

function add_metabox_sticky_events(){
    add_meta_box('id_metabox_sticky_events', 'Mise en avant' , 'MB_sticky_events', 'events', 'side', 'high');
}

// 2 -  construction de la metabox

function MB_sticky_events($POST){
    wp_nonce_field(basename(__FILE__), 'metabox_sticky_events_nonce');
    $sticky = get_post_meta($POST->ID, 'sticky', true);
    ?>
        <p>
            <label for="sticky">Mettre en avant </label><br />
            <input type="radio" <?php checked($sticky, 'oui'); ?> name="sticky" value="oui"/>Oui<br />
            <input type="radio" <?php checked($sticky, 'non'); ?> name="sticky" value=""/>Non<br />
        </p>
    <?php

}

// 3 - Sauvegarde des données de la métabox

add_action('save_post', 'save_metabox_sticky_events');

function save_metabox_sticky_events($POST_ID){
    if(isset($_POST['sticky'])){
        update_post_meta($POST_ID, 'sticky', $_POST['sticky']);
    }
}
