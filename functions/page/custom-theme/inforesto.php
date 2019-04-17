<?php

/*
Name:   custom-theme - info-resto
Description: custom_settings_pekinparis pour les info-resto du 1er onglet de la page API Pékin-paris
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/



/* ----------------------------------------------------------------------------- */
// SECTION 1 : section_location --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */
// SETTING
add_settings_section(
    'section_location',                                // ID
    __('Coordonnée', 'section_location'),              // TITLE
    'display_section_location',                        // CALLBACK
    'info-resto'                                       // PAGE
); // end --> section_location

// FIELDS : inforesto_adresse
add_settings_field(
    'inforesto_adresse',                               // ID
    __('Adresse', 'section_location'),                 // LABEL
    'field_inforesto_adresse',                         // CALLBACK FUNCTION
    'info-resto',                                      // MENU PAGE SLUG
    'section_location'                                 // SECTION ID
); // end --> field_inforesto_adresse

// FIELDS : inforesto_map
add_settings_field(
    'inforesto_map',                                    // ID
    __('URL Google Map', 'section_location'),           // LABEL
    'field_inforesto_map',                              // CALLBACK FUNCTION
    'info-resto',                                       // MENU PAGE SLUG
    'section_location'                                  // SECTION ID
); // end --> field_inforesto_map

// FIELDS : inforesto_phone
add_settings_field(
    'inforesto_phone',                                  // ID
    __('Téléphone', 'section_location'),                // LABEL
    'field_inforesto_phone',                            // CALLBACK FUNCTION
    'info-resto',                                       // MENU PAGE SLUG
    'section_location'                                  // SECTION ID
); // end --> field_inforesto_phone

// REGISTER : section_location
register_setting('group-info-resto', 'inforesto_adresse');
register_setting('group-info-resto', 'inforesto_map');
register_setting('group-info-resto', 'inforesto_phone');

/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_social --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */
// SETTING
add_settings_section(
    'section_social',                                   // ID
    __('Réseau Sociaux', 'section_social'),                 // TITLE
    'display_section_social',                           // CALLBACK
    'info-resto'                                        // PAGE
); // end --> section_social

// FIELDS : inforesto_facebook
add_settings_field(
    'inforesto_facebook',                               // ID
    __('URL compte Facebbok', 'section_social'),        // LABEL
    'field_inforesto_facebook',                         // CALLBACK FUNCTION
    'info-resto',                                       // MENU PAGE SLUG
    'section_social'                                    // SECTION ID
); // end --> field_inforesto_facebook

// FIELDS : inforesto_twitter
add_settings_field(
    'inforesto_twitter',                                // ID
    __('URL compte Twitter', 'section_social'),         // LABEL
    'field_inforesto_twitter',                          // CALLBACK FUNCTION
    'info-resto',                                       // MENU PAGE SLUG
    'section_social'                                    // SECTION ID
); // end --> field_inforesto_twitter

// FIELDS : inforesto_instagram
add_settings_field(
    'inforesto_instagram',                              // ID
    __('URL compte Instagram', 'section_social'),       // LABEL
    'field_inforesto_instagram',                        // CALLBACK FUNCTION
    'info-resto',                                       // MENU PAGE SLUG
    'section_social'                                    // SECTION ID
); // end --> field_inforesto_instagram

// REGISTER : section_social
register_setting('group-info-resto', 'inforesto_facebook');
register_setting('group-info-resto', 'inforesto_twitter');
register_setting('group-info-resto', 'inforesto_instagram');


/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_creditcard --> Option 1 -- info-resto
/* ----------------------------------------------------------------------------- */
// SETTING
add_settings_section(
    'section_creditcard',                                   // ID
    __('Mode de paiements', 'section_creditcard'),                 // TITLE
    'display_section_creditcard',                           // CALLBACK
    'info-resto'                                        // PAGE
); // end --> section_social

// FIELDS : inforesto_facebook
add_settings_field(
    'inforesto_carte',                               // ID
    __('Cartes', 'section_creditcard'),        // LABEL
    'field_inforesto_carte',                         // CALLBACK FUNCTION
    'info-resto',                                       // MENU PAGE SLUG
    'section_creditcard'                                    // SECTION ID
); // end --> field_inforesto_facebook


// REGISTER : section_social
register_setting('group-info-resto', 'inforesto_carte_visa');
register_setting('group-info-resto', 'inforesto_carte_mastercard');
register_setting('group-info-resto', 'inforesto_carte_american');
register_setting('group-info-resto', 'inforesto_carte_maestro');
