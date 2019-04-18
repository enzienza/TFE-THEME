<?php

/*
Name:   [custom-settings] - Formule buffet FULL boissons
Description: Page pour gérer la formule FULL boisson (si qui est compris & prix) de la page formule buffet
             [ccustom_settings_formule_buffet]
             => 1er onglet de la page API formule-full-boissons
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/


/* ----------------------------------------------------------------------------- */
/* Option 1 -- formules-full-boissons */
/* ----------------------------------------------------------------------------- */

// SETTINGS --------------------------------------------------------------------
add_settings_section(
    'section_formule_full_boisson',                           // ID
    __('', 'section_formule_full_boisson'),                   // TITLE
    'display_section_formule_full_boisson',                   // CALLBACK
    'formule-full-boissons'                                   // PAGE
);

// FIELDS : Checklist
add_settings_field(
    'full_checklist',                                                           // ID
    __('La formule full boissons comprend', 'section_formule_full_boisson'),    // LABEL
    'custom_field_checklist_full_boissons',                                     // CALLBACK FUNCTION
    'formule-full-boissons',                                                    // MENU PAGE SLUG
    'section_formule_full_boisson'                                              // SECTION ID
);

// FIELDS : Tarif
add_settings_field(
    'full_tarif',                                                       // ID
    __('Les tarifs par jour', 'section_formule_full_boisson'),          // LABEL
    'custom_field_tarif_full_boissons',                                 // CALLBACK FUNCTION
    'formule-full-boissons',                                            // MENU PAGE SLUG
    'section_formule_full_boisson'                                      // SECTION ID
);

// REGISTER

/* --- checklist --- */
register_setting('group-full-boissons', 'full_apero');
register_setting('group-full-boissons', 'full_vin');
register_setting('group-full-boissons', 'full_soft');
register_setting('group-full-boissons', 'full_cafe');
register_setting('group-full-boissons', 'full_digestif');

/* --- tarif - lundi --- */
register_setting('group-full-boissons', 'full_lundi_midi');
register_setting('group-full-boissons', 'full_lundi_soir');

/* --- tarif - mardi --- */
register_setting('group-full-boissons', 'full_mardi_midi');
register_setting('group-full-boissons', 'full_mardi_soir');

/* --- tarif - mercredi --- */
register_setting('group-full-boissons', 'full_mercredi_midi');
register_setting('group-full-boissons', 'full_mercredi_soir');

/* --- tarif - jeudi --- */
register_setting('group-full-boissons', 'full_jeudi_midi');
register_setting('group-full-boissons', 'full_jeudi_soir');

/* --- tarif - vendredi --- */
register_setting('group-full-boissons', 'full_vendredi_midi');
register_setting('group-full-boissons', 'full_vendredi_soir');

/* --- tarif - samedi --- */
register_setting('group-full-boissons', 'full_samedi_midi');
register_setting('group-full-boissons', 'full_samedi_soir');

/* --- tarif - dimanche --- */
register_setting('group-full-boissons', 'full_dimanche_midi');
register_setting('group-full-boissons', 'full_dimanche_soir');
