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


add_settings_field(
    'homepage_btn',                                // ID
    __('Afficher le(s) bouton(s)', 'section_homepage_cover'),         // LABEL
    'field_homepage_btn',                          // CALLBACK FUNCTION
    'page-accueil',                                         // MENU PAGE SLUG
    'section_homepage_cover'                                // SECTION ID
); // end --> field : homepage_cover_button

// REGISTER : section_homepage_cover -------------------------------------------
register_setting('group-page-accueil', 'homepage_cover_hidden');
register_setting('group-page-accueil', 'homepage_cover_affiche_img');
register_setting('group-page-accueil', 'homepage_cover_btn_actif');
register_setting('group-page-accueil', 'homepage_cover_btn_txt');
register_setting('group-page-accueil', 'homepage_cover_btn_url');

register_setting('group-page-accueil', 'btn_buffet_hidden');
register_setting('group-page-accueil', 'btn_buffet_txt');
register_setting('group-page-accueil', 'btn_buffet_url');

register_setting('group-page-accueil', 'btn_carte_hidden');
register_setting('group-page-accueil', 'btn_carte_txt');
register_setting('group-page-accueil', 'bnt_carte_url');


// REGISTER : homepage_cover_bg_img
register_setting(
    'group-page-accueil',    // group (element display in the form)
    'homepage_cover_bg_img', // field ID
    'handle_file_bg_cover_homepage' // Callback function
); // end -> register : handle_file_bg_cover_homepage
