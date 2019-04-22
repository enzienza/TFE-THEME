<?php

/*
Name:   custom-settings - Page carte
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 2e onglet 'page-emporter' de la page API option-theme
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : cover
    section 2 : message
    section 3 : carte-emporter
    section 4 : info commande
    section 5 : buffet-emporter

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_cover --> Option 3 -- page-emporter
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_emporterpage_cover',                               // ID
    __('Section 1 - Cover', 'section_emporterpage_cover'),      // TITLE
    'display_section_emporterpage_cover',                       // CALLBACK
    'page-emporter'                                             // PAGE
); // end --> section : section_emporterpage_cover

// FIELDS : emporterpage_cover_hidden ----------------------------------------------
add_settings_field(
    'emporterpage_cover_hidden',                                // ID
    __('Cacher la section', 'section_emporterpage_cover'),      // LABEL
    'field_emporterpage_cover_hidden',                          // CALLBACK FUNCTION
    'page-emporter',                                            // MENU PAGE SLUG
    'section_emporterpage_cover'                                // SECTION ID
); // end --> field : emporterpage_cover_hidden

// FIELDS : emporterpage_cover_bg_img ----------------------------------------------
add_settings_field(
    'emporterpage_cover_bg_img',                                  // ID
    __('Image d\'arrière plan', 'section_emporterpage_cover'),    // LABEL
    'field_emporterpage_cover_bg_img',                            // CALLBACK FUNCTION
    'page-emporter',                                              // MENU PAGE SLUG
    'section_emporterpage_cover'                                  // SECTION ID
); // end -> field : emporterpage_cover_bg_img



// FIELDS : emporterpage_cover_titre -----------------------------------------------
add_settings_field(
    'emporterpage_cover_titre',                                 // ID
    __('Titre de la section', 'section_emporterpage_cover'),    // LABEL
    'field_emporterpage_cover_titre',                           // CALLBACK FUNCTION
    'page-emporter',                                            // MENU PAGE SLUG
    'section_emporterpage_cover'                                // SECTION ID
); // end --> field : emporterpage_cover_titre

// FIELDS : emporterpage_cover_texte -----------------------------------------------
add_settings_field(
    'emporterpage_cover_texte',                                 // ID
    __('Texte', 'section_emporterpage_cover'),                  // LABEL
    'field_emporterpage_cover_texte',                           // CALLBACK FUNCTION
    'page-emporter',                                            // MENU PAGE SLUG
    'section_emporterpage_cover'                                // SECTION ID
); // end --> field : emporterpage_cover_texte


// REGISTER : section_emporterpage_cover -------------------------------------------
register_setting('group-page-emporter', 'emporterpage_cover_hidden');
register_setting('group-page-emporter', 'emporterpage_cover_affiche_img');
register_setting('group-page-emporter', 'emporterpage_cover_titre');
register_setting('group-page-emporter', 'emporterpage_cover_texte');

// REGISTER : emporterpage_cover_bg_img
register_setting(
    'group-page-emporter',                    // group (element display in the form)
    'emporterpage_cover_bg_img',              // field ID
    'handle_file_bg_emporterpage'      // Callback function
); // end -> register : handle_file_bg_emporterpage
