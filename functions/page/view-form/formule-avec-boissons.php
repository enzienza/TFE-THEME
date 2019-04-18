<?php

/*
Name:   [view-form] -> Formule buffet AVEC boissons
Description: Element de formulaire pour la formule AVEC boissons
             => 1er onglet de la page API formule-avec-boissons
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/* ----------------------------------------------------------------------------- */
/* Option 1 -- formules-avec-boissons */
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS
function display_section_formule_avec_boisson(){}

// CALLBACK FIELDS : checklis
function custom_field_checklist_avec_boissons(){

    $avec_apero = esc_attr(get_option('avec_apero'));
    $avec_vin = esc_attr(get_option('avec_vin'));
    $avec_soft = esc_attr(get_option('avec_soft'));
    $avec_cafe = esc_attr(get_option('avec_cafe'));
    $avec_digestif = esc_attr(get_option('avec_digestif'));

    ?>
        <div class="checklist">
            <input type="checkbox" id="avec_apero" name="avec_apero" value="1" <?php checked(1, get_option('avec_apero'), true); ?> /> Apérifif
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="avec_vin" name="avec_vin" value="1" <?php checked(1, get_option('avec_vin'), true); ?> /> 1/2l de vin par personne
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="avec_soft" name="avec_soft" value="1" <?php checked(1, get_option('avec_soft'), true); ?> /> Soft à volonter
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="avec_cafe" name="avec_cafe" value="1" <?php checked(1, get_option('avec_cafe'), true); ?> /> Thé ou Café
        </div><!-- / .checklist -->

        <div class="checklist">
            <input type="checkbox" id="avec_digestif" name="avec_digestif" value="1" <?php checked(1, get_option('avec_digestif'), true); ?> /> Digestif
        </div><!-- / .checklist -->
    <?php
} // END => custom_field_checklist_avec_boissons

// CALLBACK FIELDS : Tarif
function custom_field_tarif_avec_boissons(){
    // lundi
    $avec_lundi_midi = esc_attr( get_option('avec_lundi_midi') );
    $avec_lundi_soir = esc_attr( get_option('avec_lundi_soir') );
    // mardi
    $avec_mardi_midi = esc_attr( get_option('avec_mardi_midi') );
    $avec_mardi_soir = esc_attr( get_option('avec_mardi_soir') );
    // mercredi
    $avec_mercredi_midi = esc_attr( get_option('avec_mercredi_midi') );
    $avec_mercredi_soir = esc_attr( get_option('avec_mercredi_soir') );
    // jeudi
    $avec_jeudi_midi = esc_attr( get_option('avec_jeudi_midi') );
    $avec_jeudi_soir = esc_attr( get_option('avec_jeudi_soir') );
    // vendredi
    $avec_vendredi_midi = esc_attr( get_option('avec_vendredi_midi') );
    $avec_vendredi_soir = esc_attr( get_option('avec_vendredi_soir') );
    // samedi
    $avec_samedi_midi = esc_attr( get_option('avec_samedi_midi') );
    $avec_samedi_soir = esc_attr( get_option('avec_samedi_soir') );
    // dimanche
    $avec_dimanche_midi = esc_attr( get_option('avec_dimanche_midi') );
    $avec_dimanche_soir = esc_attr( get_option('avec_dimanche_soir') );

    ?>
        <table class="backend-table-tarif">
            <thead>
                <th scope="col" class="backend-day"></th>
                <th scope="col" class="backend-tarif">Midi</th>
                <th scope="col" class="backend-tarif">Soir</th>
            </thead>
            <tbody>
                <tr class="backend-item-tarif-backend-day">
                    <td class="backend-day">Lundi</td>
                    <td class="backend-tarif"><input type="text" id="avec_lundi_midi" name="avec_lundi_midi" value="<?php echo( get_option('avec_lundi_midi') ); ?>" /> <span>€</span></td>
                    <td class="backend-tarif"><input type="text" id="avec_lundi_soir" name="avec_lundi_soir" value="<?php echo( get_option('avec_lundi_soir') ); ?>" /> <span>€</span></td>
                </tr>
                <tr class="backend-item-tarif-backend-day">
                    <td class="backend-day">Mardi</td>
                    <td class="backend-tarif"><input type="text" id="avec_mardi_midi" name="avec_mardi_midi" value="<?php echo( get_option('avec_mardi_midi') ); ?>" /> <span>€</span></td>
                    <td class="backend-tarif"><input type="text" id="avec_mardi_soir" name="avec_mardi_soir" value="<?php echo( get_option('avec_mardi_soir') ); ?>" /> <span>€</span></td>
                </tr>
                <tr class="backend-item-tarif-backend-day">
                    <td class="backend-day">Mercredi</td>
                    <td class="backend-tarif"><input type="text" id="avec_mercredi_midi" name="avec_mercredi_midi" value="<?php echo( get_option('avec_mercredi_midi') ); ?>" /> <span>€</span></td>
                    <td class="backend-tarif"><input type="text" id="avec_mercredi_soir" name="avec_mercredi_soir" value="<?php echo( get_option('avec_mercredi_soir') ); ?>" /> <span>€</span></td>
                </tr>
                <tr class="backend-item-tarif-backend-day">
                    <td class="backend-day">Jeudi</td>
                    <td class="backend-tarif"><input type="text" id="avec_jeudi_midi" name="avec_jeudi_midi" value="<?php echo( get_option('avec_jeudi_midi') ); ?>" /> <span>€</span></td>
                    <td class="backend-tarif"><input type="text" id="avec_jeudi_soir" name="avec_jeudi_soir" value="<?php echo( get_option('avec_jeudi_soir') ); ?>" /> <span>€</span></td>
                </tr>
                <tr class="backend-item-tarif-backend-day">
                    <td class="backend-day">Vendredi</td>
                    <td class="backend-tarif"><input type="text" id="avec_vendredi_midi" name="avec_vendredi_midi" value="<?php echo( get_option('avec_vendredi_midi') ); ?>" /> <span>€</span></td>
                    <td class="backend-tarif"><input type="text" id="avec_vendredi_soir" name="avec_vendredi_soir" value="<?php echo( get_option('avec_vendredi_soir') ); ?>" /> <span>€</span></td>
                </tr>
                <tr class="backend-item-tarif-backend-day">
                    <td class="backend-day">Samedi</td>
                    <td class="backend-tarif"><input type="text" id="avec_samedi_midi" name="avec_samedi_midi" value="<?php echo( get_option('avec_samedi_midi') ); ?>" /> <span>€</span></td>
                    <td class="backend-tarif"><input type="text" id="avec_samedi_soir" name="avec_samedi_soir" value="<?php echo( get_option('avec_samedi_soir') ); ?>" /> <span>€</span></td>
                </tr>
                <tr class="backend-item-tarif-backend-day">
                    <td class="backend-day">Dimanche</td>
                    <td class="backend-tarif"><input type="text" id="avec_dimanche_midi" name="avec_dimanche_midi" value="<?php echo( get_option('avec_dimanche_midi') ); ?>" /> <span>€</span></td>
                    <td class="backend-tarif"><input type="text" id="avec_dimanche_soir" name="avec_dimanche_soir" value="<?php echo( get_option('avec_dimanche_soir') ); ?>" /> <span>€</span></td>
                </tr>
            </tbody>
        </table>

    <?php
} // END => custom_field_tarif_avec_boissons
