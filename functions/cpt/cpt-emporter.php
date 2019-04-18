<?php

/*
Name:   cpt-emporter
Description: Custom Post Type pour gérer les emporter
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/


/*-------------------------------------------------------------------------------------------*/
/* cpt_emporters Post Type */
/*-------------------------------------------------------------------------------------------*/

function CPT_emporters() {

    $labels = array(
        'name'                  => __('Emporters', 'emporters'),
        'singuar_name'          => __('Emporter', 'emporters'),
        'menu_name'             => __('Emporter', 'emporters'),
        'name_admin_bar'        => __('Emporter', 'emporters'),
        'add_new'               => __('Ajouter', 'emporters'),
        'add_new_item'          => __('Ajouter un emporter', 'emporters'),
        'new_item'              => __('Nouveau emporter', 'emporters'),
        'edit_item'             => __('Editer un emporter', 'emporters'),
        'view_item'             => __('Voir l\' emporter', 'emporters'),
        'all_items'             => __('Toutes les emporters', 'emporters'),
        'search_items'          => __('Rechercher parmi les emporters', 'emporters'),
        'not_found'             => __('Pas d\' emporter trouvées', 'emporters'),
        'not_fount_in_trash'    => __('Pas d\' emporter dans la corbeille', 'emporters')
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'emporters'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 112,
        'menu_icon'             => 'dashicons-list-view',
        'supports' => array(
            'title',           // titre
            // 'editor',       // editeur
            // 'author',       // auteur du post
            // 'thumbnail',    // image à la une
            // 'excerpt',      // extrait
            // 'comments'      // commentaires autorisé
        )
    );


    register_post_type('emporters', $args);
}

add_action('init',  'CPT_emporters');
