<?php

/*
Name:   [custom-settings] - Menu Table de Riz
Description: Page pour gérer le menu Table de Riz de la page service menu
             [custom_settings_sercive_menu]
             => 1er onglet de la page API table-riz
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/*
-----    SOMMAIRES    -----

    section 1 : info_menu
    section 2 : service_un
    section 3 : service_deux
    section 4 : service_trois
    section 5 : service_quattre

*/

/* ----------------------------------------------------------------------------- */
// SECTION 1 : info_menu --> Option 1 -- table-riz
/* ----------------------------------------------------------------------------- */
// SETTING
add_settings_section(
    'info_menu',                                // ID
    __('Info menu', 'info_menu'),              // TITLE
    'display_info_menu',                        // CALLBACK
    'table-riz'                                       // PAGE
); // end --> section : info_menu
