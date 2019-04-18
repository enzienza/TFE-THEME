<?php

/*
Name:   custom-settings - Page accueil
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 1er onglet de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : section_cover
    section 2 : section_buffet
    section 3 : section_carte
    section 4 : section_emporter
    section 5 : section_event
    section 6 : section_contact

*/


/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_homepage_cover',                               // ID
    __('Section 1 - Cover', 'section_homepage_cover'),      // TITLE
    'display_section_homepage_cover',                       // CALLBACK
    'page-accueil'                                          // PAGE
); // end --> section : section_homepage_cover

// FIELDS : homepage_cover_hidden ----------------------------------------------
add_settings_field(
    'homepage_cover_hidden',                                // ID
    __('Cacher la section', 'section_homepage_cover'),      // LABEL
    'field_homepage_cover_hidden',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_cover'                                // SECTION ID
); // end --> field : homepage_cover_hidden


// FIELDS : homepage_cover_bg_img ----------------------------------------------
add_settings_field(
    'homepage_cover_bg_img', // ID
    __('Ajouter le logo', 'section_homepage_cover'), // LABEL
    'field_homepage_cover_bg_img', // CALLBACK FUNCTION
    'page-accueil', // MENU PAGE SLUG
    'section_homepage_cover' // SECTION ID
); // end -> field : homepage_cover_bg_img


// // FIELDS : homepage_cover_bg_video -----------------------------------------
// add_settings_field(
//     'homepage_cover_bg_video',                                // ID
//     __('Video d\'arrière plan', 'section_homepage_cover'),    // LABEL
//     'field_homepage_cover_bg_video',                          // CALLBACK FUNCTION
//     'page-accueil',                                           // MENU PAGE SLUG
//     'section_homepage_cover'                                  // SECTION ID
// ); // end --> field : homepage_cover_bg_video

// FIELDS : homepage_cover_titre -----------------------------------------------
add_settings_field(
    'homepage_cover_titre',                                 // ID
    __('Titre de la section', 'section_homepage_cover'),    // LABEL
    'field_homepage_cover_titre',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_cover'                                // SECTION ID
); // end --> field : homepage_cover_titre

// FIELDS : homepage_cover_texte -----------------------------------------------
add_settings_field(
    'homepage_cover_texte',                                 // ID
    __('Texte', 'section_homepage_cover'),                  // LABEL
    'field_homepage_cover_texte',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_cover'                                // SECTION ID
); // end --> field : homepage_cover_texte

// FIELDS : homepage_cover_button ----------------------------------------------
add_settings_field(
    'homepage_cover_button',                                // ID
    __('Ajouter bouton', 'section_homepage_cover'),         // LABEL
    'field_homepage_cover_button',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_cover'                                // SECTION ID
); // end --> field : homepage_cover_button


// REGISTER : section_homepage_cover -------------------------------------------
register_setting('group-page-accueil', 'homepage_cover_hidden');
register_setting('group-page-accueil', 'homepage_cover_affiche_img');
// register_setting('group-page-accueil', 'homepage_cover_affice_video');
// register_setting('group-page-accueil', 'homepage_cover_bg_video');
register_setting('group-page-accueil', 'homepage_cover_titre');
register_setting('group-page-accueil', 'homepage_cover_texte');
register_setting('group-page-accueil', 'homepage_cover_btn_actif');
register_setting('group-page-accueil', 'homepage_cover_btn_txt');
register_setting('group-page-accueil', 'homepage_cover_btn_url');


// REGISTER : homepage_cover_bg_img
register_setting(
    'group-page-accueil',    // group (element display in the form)
    'homepage_cover_bg_img', // field ID
    'handle_file_bg_cover_homepage' // Callback function
); // end -> register : handle_file_bg_cover_homepage
