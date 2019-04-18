<?php

/*
Name:   custom-settings - Page Buffet
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 2e onglet 'page-buffet' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 1 -- page-buffet
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_buffetpage_buffet',                               // ID
    __('Section 2 - buffet', 'section_buffetpage_buffet'),      // TITLE
    'display_section_buffetpage_buffet',                       // CALLBACK
    'page-buffet'                                          // PAGE
); // end --> section : section_buffetpage_buffet

// FIELDS : buffetpage_buffet_hidden ----------------------------------------------
add_settings_field(
    'buffetpage_buffet_hidden',                                // ID
    __('Cacher la section', 'section_buffetpage_buffet'),      // LABEL
    'field_buffetpage_buffet_hidden',                          // CALLBACK FUNCTION
    'page-buffet',                                         // MENU PAGE SLUG
    'section_buffetpage_buffet'                                // SECTION ID
); // end --> field : buffetpage_buffet_hidden

// FIELDS : buffetpage_buffet_bg_img ----------------------------------------------
add_settings_field(
    'buffetpage_buffet_bg_img', // ID
    __('Image d\'arrière plan', 'section_buffetpage_buffet'), // LABEL
    'field_buffetpage_buffet_bg_img', // CALLBACK FUNCTION
    'page-buffet', // MENU PAGE SLUG
    'section_buffetpage_buffet' // SECTION ID
); // end -> field : buffetpage_buffet_bg_img



// FIELDS : buffetpage_buffet_titre -----------------------------------------------
add_settings_field(
    'buffetpage_buffet_titre',                                 // ID
    __('Titre de la section', 'section_buffetpage_buffet'),    // LABEL
    'field_buffetpage_buffet_titre',                           // CALLBACK FUNCTION
    'page-buffet',                                         // MENU PAGE SLUG
    'section_buffetpage_buffet'                                // SECTION ID
); // end --> field : buffetpage_buffet_titre

// FIELDS : buffetpage_buffet_texte -----------------------------------------------
add_settings_field(
    'buffetpage_buffet_texte',                                 // ID
    __('Texte', 'section_buffetpage_buffet'),                  // LABEL
    'field_buffetpage_buffet_texte',                           // CALLBACK FUNCTION
    'page-buffet',                                         // MENU PAGE SLUG
    'section_buffetpage_buffet'                                // SECTION ID
); // end --> field : buffetpage_buffet_texte


// REGISTER : section_buffetpage_buffet -------------------------------------------
register_setting('group-page-buffet', 'buffetpage_buffet_hidden');
register_setting('group-page-buffet', 'buffetpage_buffet_affiche_img');
register_setting('group-page-buffet', 'buffetpage_buffet_titre');
register_setting('group-page-buffet', 'buffetpage_buffet_texte');

// REGISTER : buffetpage_buffet_bg_img
register_setting(
    'group-page-buffet',    // group (element display in the form)
    'buffetpage_buffet_bg_img', // field ID
    'handle_file_bg_buffet_buffetpage' // Callback function
); // end -> register : handle_file_bg_buffet_buffetpage
