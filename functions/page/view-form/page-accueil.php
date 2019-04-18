<?php

/*
Name:   [view-form] -> Page accueil
Description: Element de formulaire pour les sections de la page d'accueil
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

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_homepage_cover(){}

// CALLBACK REGISTER : homepage_cover_bg_img -----------------------------------
function handle_file_bg_cover_homepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['homepage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['homepage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['homepage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('homepage_cover_bg_img');

} // END => handle_file_bg_cover_homepage

// CALLBACK FIELDS : homepage_cover_hidden -------------------------------------
function field_homepage_cover_hidden(){
    $homepage_cover_hidden = esc_attr(get_option('homepage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="homepage_cover_hidden" name="homepage_cover_hidden" value="1" <?php checked(1, get_option('homepage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_homepage_cover_hidden

// CALLBACK FIELDS : homepage_cover_bg_img -------------------------------------
function field_homepage_cover_bg_img(){
    //echo form element for file upload

    $homepage_cover_affiche_img = esc_attr(get_option('homepage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="homepage_cover_affiche_img" name="homepage_cover_affiche_img" value="1" <?php checked(1, get_option('homepage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='homepage_cover_bg_img' id='homepage_cover_bg_img' value="<?php echo get_option('homepage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('homepage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('homepage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_homepage_cover_bg_img

// CALLBARCK FIELD : field_homepage_cover_titre --------------------------------
function field_homepage_cover_titre(){
    $homepage_cover_titre = esc_attr(get_option('homepage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="homepage_cover_titre" name="homepage_cover_titre" value="<?php echo(get_option('homepage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_homepage_cover_titre

// CALLBARCK FIELD : field_homepage_cover_texte --------------------------------
function field_homepage_cover_texte(){
    $homepage_cover_texte = esc_attr(get_option('homepage_cover_texte'));
    ?>
    <div class="">
        <textarea id="homepage_cover_texte" name="homepage_cover_texte" ><?php echo(get_option('homepage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_homepage_cover_texte

// CALLBARCK FIELD : field_homepage_cover_button -------------------------------
function field_homepage_cover_button(){
    $homepage_cover_btn_actif = esc_attr(get_option('homepage_cover_btn_actif'));
    $homepage_cover_btn_txt = esc_attr(get_option('homepage_cover_btn_txt'));
    $homepage_cover_btn_url= esc_attr(get_option('homepage_cover_btn_url'));
    ?>
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="checkbox" id="homepage_cover_btn_actif" name="homepage_cover_btn_actif" value="1" <?php checked(1, get_option('homepage_cover_btn_actif'), true); ?> />
                    <span>Afficher le bouton</span>
                </td>
            </tr>
            <tr>
                <td><label for="">Texte</label></td>
                <td><input type="text" id="homepage_cover_btn_txt" name="homepage_cover_btn_txt" value="<?php echo(get_option('homepage_cover_btn_txt')); ?>" /></td>
            </tr>
            <tr>
                <td><label for="">Lien (url)</label></td>
                <td><input type="text" id="homepage_cover_btn_url" name="homepage_cover_btn_url" value="<?php echo(get_option('homepage_cover_btn_url')); ?>" /></td>
            </tr>
        </tbody>
    </table>
    <?php
} // END => field_homepage_cover_button
