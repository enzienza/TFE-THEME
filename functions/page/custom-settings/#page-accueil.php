<?php

/*
Name:   custom-settings - Page accueil
Description: Fonction pour controllé les sections de la page d'accueil
             [custom_settings_option_theme]
             => 1er onglet 'page-accueil' de la page API option-theme
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
    __('Image d\'arrière plan', 'section_homepage_cover'), // LABEL
    'field_homepage_cover_bg_img', // CALLBACK FUNCTION
    'page-accueil', // MENU PAGE SLUG
    'section_homepage_cover' // SECTION ID
); // end -> field : homepage_cover_bg_img


// // FIELDS : homepage_cover_bg_video -----------------------------------------
add_settings_field(
    'homepage_cover_bg_video',                                // ID
    __('Video d\'arrière plan', 'section_homepage_cover'),    // LABEL
    'field_homepage_cover_bg_video',                          // CALLBACK FUNCTION
    'page-accueil',                                           // MENU PAGE SLUG
    'section_homepage_cover'                                  // SECTION ID
); // end --> field : homepage_cover_bg_video

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


/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_buffet --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_homepage_buffet',                               // ID
    __('Section 2 - buffet', 'section_homepage_buffet'),      // TITLE
    'display_section_homepage_buffet',                       // CALLBACK
    'page-accueil'                                          // PAGE
); // end --> section : section_homepage_buffet

// FIELDS : homepage_buffet_hidden ----------------------------------------------
add_settings_field(
    'homepage_buffet_hidden',                                // ID
    __('Cacher la section', 'section_homepage_buffet'),      // LABEL
    'field_homepage_buffet_hidden',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_buffet'                                // SECTION ID
); // end --> field : homepage_buffet_hidden


// FIELDS : homepage_buffet_bg_img ----------------------------------------------
add_settings_field(
    'homepage_buffet_bg_img', // ID
    __('Image d\'arrière plan', 'section_homepage_buffet'), // LABEL
    'field_homepage_buffet_bg_img', // CALLBACK FUNCTION
    'page-accueil', // MENU PAGE SLUG
    'section_homepage_buffet' // SECTION ID
); // end -> field : homepage_buffet_bg_img


// FIELDS : homepage_buffet_titre -----------------------------------------------
add_settings_field(
    'homepage_buffet_titre',                                 // ID
    __('Titre de la section', 'section_homepage_buffet'),    // LABEL
    'field_homepage_buffet_titre',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_buffet'                                // SECTION ID
); // end --> field : homepage_buffet_titre

// FIELDS : homepage_buffet_texte -----------------------------------------------
add_settings_field(
    'homepage_buffet_texte',                                 // ID
    __('Texte', 'section_homepage_buffet'),                  // LABEL
    'field_homepage_buffet_texte',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_buffet'                                // SECTION ID
); // end --> field : homepage_buffet_texte

// FIELDS : homepage_buffet_button ----------------------------------------------
add_settings_field(
    'homepage_buffet_button',                                // ID
    __('Ajouter bouton', 'section_homepage_buffet'),         // LABEL
    'field_homepage_buffet_button',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_buffet'                                 // SECTION ID
); // end --> field : homepage_buffet_button


// REGISTER : section_homepage_buffet -------------------------------------------
register_setting('group-page-accueil', 'homepage_buffet_hidden');
register_setting('group-page-accueil', 'homepage_buffet_affiche_img');
register_setting('group-page-accueil', 'homepage_buffet_titre');
register_setting('group-page-accueil', 'homepage_buffet_texte');
register_setting('group-page-accueil', 'homepage_buffet_btn_actif');
register_setting('group-page-accueil', 'homepage_buffet_btn_txt');
register_setting('group-page-accueil', 'homepage_buffet_btn_url');

// REGISTER : homepage_buffet_bg_img
register_setting(
    'group-page-accueil',    // group (element display in the form)
    'homepage_buffet_bg_img', // field ID
    'handle_file_bg_buffet_homepage' // Callback function
); // end -> register : handle_file_bg_buffet_homepage


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_carte --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_homepage_carte',                               // ID
    __('Section 3 - carte', 'section_homepage_carte'),      // TITLE
    'display_section_homepage_carte',                       // CALLBACK
    'page-accueil'                                          // PAGE
); // end --> section : section_homepage_carte

// FIELDS : homepage_carte_hidden ----------------------------------------------
add_settings_field(
    'homepage_carte_hidden',                                // ID
    __('Cacher la section', 'section_homepage_carte'),      // LABEL
    'field_homepage_carte_hidden',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_carte'                                // SECTION ID
); // end --> field : homepage_carte_hidden


// FIELDS : homepage_carte_bg_img ----------------------------------------------
add_settings_field(
    'homepage_carte_bg_img', // ID
    __('Image d\'arrière plan', 'section_homepage_carte'), // LABEL
    'field_homepage_carte_bg_img', // CALLBACK FUNCTION
    'page-accueil', // MENU PAGE SLUG
    'section_homepage_carte' // SECTION ID
); // end -> field : homepage_carte_bg_img


// FIELDS : homepage_carte_titre -----------------------------------------------
add_settings_field(
    'homepage_carte_titre',                                 // ID
    __('Titre de la section', 'section_homepage_carte'),    // LABEL
    'field_homepage_carte_titre',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_carte'                                // SECTION ID
); // end --> field : homepage_carte_titre

// FIELDS : homepage_carte_texte -----------------------------------------------
add_settings_field(
    'homepage_carte_texte',                                 // ID
    __('Texte', 'section_homepage_carte'),                  // LABEL
    'field_homepage_carte_texte',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_carte'                                // SECTION ID
); // end --> field : homepage_carte_texte

// FIELDS : homepage_carte_button ----------------------------------------------
add_settings_field(
    'homepage_carte_button',                                // ID
    __('Ajouter bouton', 'section_homepage_carte'),         // LABEL
    'field_homepage_carte_button',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_carte'                                 // SECTION ID
); // end --> field : homepage_carte_button


// REGISTER : section_homepage_carte -------------------------------------------
register_setting('group-page-accueil', 'homepage_carte_hidden');
register_setting('group-page-accueil', 'homepage_carte_affiche_img');
register_setting('group-page-accueil', 'homepage_carte_titre');
register_setting('group-page-accueil', 'homepage_carte_texte');
register_setting('group-page-accueil', 'homepage_carte_btn_actif');
register_setting('group-page-accueil', 'homepage_carte_btn_txt');
register_setting('group-page-accueil', 'homepage_carte_btn_url');

// REGISTER : homepage_carte_bg_img
register_setting(
    'group-page-accueil',    // group (element display in the form)
    'homepage_carte_bg_img', // field ID
    'handle_file_bg_carte_homepage' // Callback function
); // end -> register : handle_file_bg_carte_homepage


/* ----------------------------------------------------------------------------- */
// SECTION 4 : section_emporter --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_homepage_emporter',                               // ID
    __('Section 4 - emporter', 'section_homepage_emporter'),      // TITLE
    'display_section_homepage_emporter',                       // CALLBACK
    'page-accueil'                                          // PAGE
); // end --> section : section_homepage_emporter

// FIELDS : homepage_emporter_hidden ----------------------------------------------
add_settings_field(
    'homepage_emporter_hidden',                                // ID
    __('Cacher la section', 'section_homepage_emporter'),      // LABEL
    'field_homepage_emporter_hidden',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_emporter'                                // SECTION ID
); // end --> field : homepage_emporter_hidden


// FIELDS : homepage_emporter_bg_img ----------------------------------------------
add_settings_field(
    'homepage_emporter_bg_img', // ID
    __('Image d\'arrière plan', 'section_homepage_emporter'), // LABEL
    'field_homepage_emporter_bg_img', // CALLBACK FUNCTION
    'page-accueil', // MENU PAGE SLUG
    'section_homepage_emporter' // SECTION ID
); // end -> field : homepage_emporter_bg_img


// FIELDS : homepage_emporter_titre -----------------------------------------------
add_settings_field(
    'homepage_emporter_titre',                                 // ID
    __('Titre de la section', 'section_homepage_emporter'),    // LABEL
    'field_homepage_emporter_titre',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_emporter'                                // SECTION ID
); // end --> field : homepage_emporter_titre

// FIELDS : homepage_emporter_texte -----------------------------------------------
add_settings_field(
    'homepage_emporter_texte',                                 // ID
    __('Texte', 'section_homepage_emporter'),                  // LABEL
    'field_homepage_emporter_texte',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_emporter'                                // SECTION ID
); // end --> field : homepage_emporter_texte

// FIELDS : homepage_emporter_button ----------------------------------------------
add_settings_field(
    'homepage_emporter_button',                                // ID
    __('Ajouter bouton', 'section_homepage_emporter'),         // LABEL
    'field_homepage_emporter_button',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_emporter'                                 // SECTION ID
); // end --> field : homepage_emporter_button


// REGISTER : section_homepage_emporter -------------------------------------------
register_setting('group-page-accueil', 'homepage_emporter_hidden');
register_setting('group-page-accueil', 'homepage_emporter_affiche_img');
register_setting('group-page-accueil', 'homepage_emporter_titre');
register_setting('group-page-accueil', 'homepage_emporter_texte');
register_setting('group-page-accueil', 'homepage_emporter_btn_actif');
register_setting('group-page-accueil', 'homepage_emporter_btn_txt');
register_setting('group-page-accueil', 'homepage_emporter_btn_url');

// REGISTER : homepage_emporter_bg_img
register_setting(
    'group-page-accueil',    // group (element display in the form)
    'homepage_emporter_bg_img', // field ID
    'handle_file_bg_emporter_homepage' // Callback function
); // end -> register : handle_file_bg_emporter_homepage


/* ----------------------------------------------------------------------------- */
// SECTION 5 : section_event --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_homepage_event',                               // ID
    __('Section 5 - évenement', 'section_homepage_event'),  // TITLE
    'display_section_homepage_event',                       // CALLBACK
    'page-accueil'                                          // PAGE
); // end --> section : section_homepage_event

// FIELDS : homepage_event_hidden ----------------------------------------------
add_settings_field(
    'homepage_event_hidden',                                // ID
    __('Cacher la section', 'section_homepage_event'),      // LABEL
    'field_homepage_event_hidden',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_event'                                // SECTION ID
); // end --> field : homepage_event_hidden


// FIELDS : homepage_event_bg_img ----------------------------------------------
add_settings_field(
    'homepage_event_bg_img', // ID
    __('Image d\'arrière plan', 'section_homepage_event'), // LABEL
    'field_homepage_event_bg_img', // CALLBACK FUNCTION
    'page-accueil', // MENU PAGE SLUG
    'section_homepage_event' // SECTION ID
); // end -> field : homepage_event_bg_img


// FIELDS : homepage_event_titre -----------------------------------------------
add_settings_field(
    'homepage_event_titre',                                 // ID
    __('Titre de la section', 'section_homepage_event'),    // LABEL
    'field_homepage_event_titre',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_event'                                // SECTION ID
); // end --> field : homepage_event_titre

// FIELDS : homepage_event_texte -----------------------------------------------
add_settings_field(
    'homepage_event_texte',                                 // ID
    __('Texte', 'section_homepage_event'),                  // LABEL
    'field_homepage_event_texte',                           // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_event'                                // SECTION ID
); // end --> field : homepage_event_texte

// FIELDS : homepage_event_button ----------------------------------------------
add_settings_field(
    'homepage_event_button',                                // ID
    __('Ajouter bouton', 'section_homepage_event'),         // LABEL
    'field_homepage_event_button',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_event'                                // SECTION ID
); // end --> field : homepage_event_button


// REGISTER : section_homepage_event -------------------------------------------
register_setting('group-page-accueil', 'homepage_event_hidden');
register_setting('group-page-accueil', 'homepage_event_affiche_img');
register_setting('group-page-accueil', 'homepage_event_titre');
register_setting('group-page-accueil', 'homepage_event_texte');
register_setting('group-page-accueil', 'homepage_event_btn_actif');
register_setting('group-page-accueil', 'homepage_event_btn_txt');
register_setting('group-page-accueil', 'homepage_event_btn_url');

// REGISTER : homepage_event_bg_img
register_setting(
    'group-page-accueil',               // group (element display in the form)
    'homepage_event_bg_img',            // field ID
    'handle_file_bg_event_homepage'     // Callback function
); // end -> register : handle_file_bg_event_homepage
