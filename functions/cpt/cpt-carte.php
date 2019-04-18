<?php

/*
Name:   cpt-carte
Description: Custom Post Type pour gérer le service à la carte
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.2
*/


/*-------------------------------------------------------------------------------------------*/
/* cpt_cartes Post Type */
/*-------------------------------------------------------------------------------------------*/

function CPT_cartes() {

    $labels = array(
        'name'                  => __('Services à la carte', 'cartes'),
        'singuar_name'          => __('Service à la carte', 'cartes'),
        'menu_name'             => __('Service à la carte', 'cartes'),
        'name_admin_bar'        => __('Service à la carte', 'cartes'),
        'add_new'               => __('Ajouter', 'service à cartes'),
        'add_new_item'          => __('Ajouter un service à carte', 'cartes'),
        'new_item'              => __('Nouveau service carte', 'cartes'),
        'edit_item'             => __('Editer un service carte', 'cartes'),
        'view_item'             => __('Voir les services à carte', 'cartes'),
        'all_items'             => __('Toutes les service à cartes', 'cartes'),
        'search_items'          => __('Rechercher parmi les services à carte', 'cartes'),
        'not_found'             => __('Pas de service à carte trouvées', 'cartes'),
        'not_fount_in_trash'    => __('Pas de service à carte dans la corbeille', 'cartes')
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite' => array(
            'slug' => 'cartes'
        ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 111,
        'menu_icon'             => 'dashicons-excerpt-view',
        'supports' => array(
            'title',           // titre
            // 'editor',       // editeur
            // 'author',       // auteur du post
            // 'thumbnail',    // image à la une
            // 'excerpt',      // extrait
            // 'comments'      // commentaires autorisé
        )
    );
    
    register_post_type('cartes', $args);
}

add_action('init',  'CPT_cartes');
