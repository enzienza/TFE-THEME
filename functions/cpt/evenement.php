<?php

/*
Name:   cpt-evenement
Description: Custom Post Type pour gérer le service à la evenement
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/

/*
    ----- SOMMAIR -----

    1. cpt-evenements
    2. metabox : info-event


*/


/* ----------------------------------------------------------------------------- */
/* cpt_evenements Post Type */
/* ----------------------------------------------------------------------------- */
// construire le Custom Post Type ----------------------------------------------
function CPT_evenements() {
    $labels = array(
        'name'                  => __('Evenements', 'evenements'),
        'singuar_name'          => __('Evenement', 'evenements'),
        'menu_name'             => __('Evenement', 'evenements'),
        'name_admin_bar'        => __('Evenement', 'evenements'),
        'add_new'               => __('Ajouter', 'evenements'),
        'add_new_item'          => __('Ajouter un evenement', 'evenements'),
        'new_item'              => __('Nouveau evenement', 'evenements'),
        'edit_item'             => __('Editer un evenement', 'evenements'),
        'view_item'             => __('Voir les evenements', 'evenements'),
        'all_items'             => __('Toutes les evenements', 'evenements'),
        'search_items'          => __('Rechercher parmi les evenements', 'evenements'),
        'not_found'             => __('Pas d\'evenement trouvées', 'evenements'),
        'not_fount_in_trash'    => __('Pas d\'evenement dans la corbeille', 'evenements')
    );
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'evenements'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 105,
        'menu_icon'             => 'dashicons-awards',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('evenements', $args);
}
// initialisation le Custom Post Type ------------------------------------------
add_action('init',  'CPT_evenements');
