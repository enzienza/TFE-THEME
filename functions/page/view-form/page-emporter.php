<?php

/*
Name:   [view-form] -> Page carte
Description: Element de formulaire pour les sections de la page d'accueil
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

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_emporterpage_cover(){}

// CALLBACK REGISTER : emporterpage_cover_bg_img ---------------------------------
function handle_file_bg_emporterpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['emporterpage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['emporterpage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['emporterpage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('emporterpage_cover_bg_img');

} // END => handle_file_bg_emporterpage


// CALLBACK FIELDS : emporterpage_cover_hidden -----------------------------------
function field_emporterpage_cover_hidden(){
    $emporterpage_cover_hidden = esc_attr(get_option('emporterpage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="emporterpage_cover_hidden" name="emporterpage_cover_hidden" value="1" <?php checked(1, get_option('emporterpage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page buffet</span>
        </div>
    <?php
} // END => field_emporterpage_cover_hidden

// CALLBACK FIELDS : emporterpage_cover_bg_img -----------------------------------
function field_emporterpage_cover_bg_img(){
    //echo form element for file upload

    $emporterpage_cover_affiche_img = esc_attr(get_option('emporterpage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="emporterpage_cover_affiche_img" name="emporterpage_cover_affiche_img" value="1" <?php checked(1, get_option('emporterpage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='emporterpage_cover_bg_img' id='emporterpage_cover_bg_img' value="<?php echo get_option('emporterpage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('emporterpage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('emporterpage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_emporterpage_cover_bg_img


// CALLBARCK FIELD : field_emporterpage_cover_titre ------------------------------
function field_emporterpage_cover_titre(){
    $emporterpage_cover_titre = esc_attr(get_option('emporterpage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="emporterpage_cover_titre" name="emporterpage_cover_titre" value="<?php echo(get_option('emporterpage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_emporterpage_cover_titre

// CALLBARCK FIELD : field_emporterpage_cover_texte ------------------------------
function field_emporterpage_cover_texte(){
    $emporterpage_cover_texte = esc_attr(get_option('emporterpage_cover_texte'));
    ?>
    <div class="">
        <textarea id="emporterpage_cover_texte" name="emporterpage_cover_texte" ><?php echo(get_option('emporterpage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_emporterpage_cover_texte
