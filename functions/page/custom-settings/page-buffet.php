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
    'section_buffetpage_cover',                               // ID
    __('Section 1 - Cover', 'section_buffetpage_cover'),      // TITLE
    'display_section_buffetpage_cover',                       // CALLBACK
    'page-buffet'                                          // PAGE
); // end --> section : section_buffetpage_cover

// FIELDS : buffetpage_cover_hidden ----------------------------------------------
add_settings_field(
    'buffetpage_cover_hidden',                                // ID
    __('Cacher la section', 'section_buffetpage_cover'),      // LABEL
    'field_buffetpage_cover_hidden',                          // CALLBACK FUNCTION
    'page-buffet',                                         // MENU PAGE SLUG
    'section_buffetpage_cover'                                // SECTION ID
); // end --> field : buffetpage_cover_hidden

// FIELDS : buffetpage_cover_bg_img ----------------------------------------------
add_settings_field(
    'buffetpage_cover_bg_img', // ID
    __('Image d\'arrière plan', 'section_buffetpage_cover'), // LABEL
    'field_buffetpage_cover_bg_img', // CALLBACK FUNCTION
    'page-buffet', // MENU PAGE SLUG
    'section_buffetpage_cover' // SECTION ID
); // end -> field : buffetpage_cover_bg_img



// FIELDS : buffetpage_cover_titre -----------------------------------------------
add_settings_field(
    'buffetpage_cover_titre',                                 // ID
    __('Titre de la section', 'section_buffetpage_cover'),    // LABEL
    'field_buffetpage_cover_titre',                           // CALLBACK FUNCTION
    'page-buffet',                                         // MENU PAGE SLUG
    'section_buffetpage_cover'                                // SECTION ID
); // end --> field : buffetpage_cover_titre

// FIELDS : buffetpage_cover_texte -----------------------------------------------
add_settings_field(
    'buffetpage_cover_texte',                                 // ID
    __('Texte', 'section_buffetpage_cover'),                  // LABEL
    'field_buffetpage_cover_texte',                           // CALLBACK FUNCTION
    'page-buffet',                                         // MENU PAGE SLUG
    'section_buffetpage_cover'                                // SECTION ID
); // end --> field : buffetpage_cover_texte


// REGISTER : section_buffetpage_cover -------------------------------------------
register_setting('group-page-buffet', 'buffetpage_cover_hidden');
register_setting('group-page-buffet', 'buffetpage_cover_affiche_img');
register_setting('group-page-buffet', 'buffetpage_cover_titre');
register_setting('group-page-buffet', 'buffetpage_cover_texte');

// REGISTER : buffetpage_cover_bg_img
register_setting(
    'group-page-buffet',    // group (element display in the form)
    'buffetpage_cover_bg_img', // field ID
    'handle_file_bg_buffet_buffetpage' // Callback function
); // end -> register : handle_file_bg_buffet_buffetpage


/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 1 -- page-buffet
/* ----------------------------------------------------------------------------- */
// SETTINGS
add_settings_section(
    'section_buffetpage_message',                               // ID
    __('Section 2 -  Message', 'section_buffetpage_message'),      // TITLE
    'display_section_buffetpage_message',                       // CALLBACK
    'page-buffet'                                          // PAGE
); // end --> section : section_buffetpage_message

// FIELDS : buffetpage_message_hidden ----------------------------------------------
add_settings_field(
    'buffetpage_message_hidden',                                // ID
    __('Cacher la section', 'section_buffetpage_message'),      // LABEL
    'field_buffetpage_message_hidden',                          // CALLBACK FUNCTION
    'page-buffet',                                         // MENU PAGE SLUG
    'section_buffetpage_message'                                // SECTION ID
); // end --> field : buffetpage_message_hidden

// FIELDS : buffetpage_message_avatar ----------------------------------------------
add_settings_field(
    'buffetpage_message_avatar', // ID
    __('Avatar', 'section_buffetpage_message'), // LABEL
    'field_buffetpage_message_avatar', // CALLBACK FUNCTION
    'page-buffet', // MENU PAGE SLUG
    'section_buffetpage_message' // SECTION ID
); // end -> field : buffetpage_message_avatar



// FIELDS : buffetpage_message_texte -----------------------------------------------
add_settings_field(
    'buffetpage_message_texte',                                 // ID
    __('Texte', 'section_buffetpage_message'),                  // LABEL
    'field_buffetpage_message_texte',                           // CALLBACK FUNCTION
    'page-buffet',                                              // MENU PAGE SLUG
    'section_buffetpage_message'                                // SECTION ID
); // end --> field : buffetpage_message_texte


// REGISTER : section_buffetpage_message -------------------------------------------
register_setting('group-page-buffet', 'buffetpage_message_hidden');
register_setting('group-page-buffet', 'buffetpage_message_affiche_avatar');
register_setting('group-page-buffet', 'buffetpage_message_texte');

// REGISTER : buffetpage_message_avatar
register_setting(
    'group-page-buffet',                    // group (element display in the form)
    'buffetpage_message_avatar',            // field ID
    'handle_file_msg_avatar_buffetpage'      // Callback function
); // end -> register : handle_file_msg_avatar_buffetpage
