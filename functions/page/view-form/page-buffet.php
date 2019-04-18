<?php

/*
Name:   [view-form] -> Page buffet
Description: Element de formulaire pour les sections de la page d'accueil
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
// SECTION 1 : section_cover --> Option 3 -- page-buffet
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_buffetpage_buffet(){}

// CALLBACK REGISTER : buffetpage_buffet_bg_img --------------------------------
function handle_file_bg_buffet_buffetpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['buffetpage_buffet_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['buffetpage_buffet_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['buffetpage_buffet_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('buffetpage_buffet_bg_img');

} // END => handle_file_bg_buffet_buffetpage


// CALLBACK FIELDS : buffetpage_buffet_hidden ----------------------------------
function field_buffetpage_buffet_hidden(){
    $buffetpage_buffet_hidden = esc_attr(get_option('buffetpage_buffet_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="buffetpage_buffet_hidden" name="buffetpage_buffet_hidden" value="1" <?php checked(1, get_option('buffetpage_buffet_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_buffetpage_buffet_hidden

// CALLBACK FIELDS : buffetpage_buffet_bg_img ----------------------------------
function field_buffetpage_buffet_bg_img(){
    //echo form element for file upload

    $buffetpage_buffet_affiche_img = esc_attr(get_option('buffetpage_buffet_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="buffetpage_buffet_affiche_img" name="buffetpage_buffet_affiche_img" value="1" <?php checked(1, get_option('buffetpage_buffet_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='buffetpage_buffet_bg_img' id='buffetpage_buffet_bg_img' value="<?php echo get_option('buffetpage_buffet_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('buffetpage_buffet_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('buffetpage_buffet_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_buffetpage_buffet_bg_img



// CALLBARCK FIELD : field_buffetpage_buffet_titre -----------------------------
function field_buffetpage_buffet_titre(){
    $buffetpage_buffet_titre = esc_attr(get_option('buffetpage_buffet_titre'));
    ?>
        <div class="">
            <input type="text" id="buffetpage_buffet_titre" name="buffetpage_buffet_titre" value="<?php echo(get_option('buffetpage_buffet_titre')); ?>">
        </div>
    <?php
} // END => field_buffetpage_buffet_titre

// CALLBARCK FIELD : field_buffetpage_buffet_texte -----------------------------
function field_buffetpage_buffet_texte(){
    $buffetpage_buffet_texte = esc_attr(get_option('buffetpage_buffet_texte'));
    ?>
    <div class="">
        <textarea id="buffetpage_buffet_texte" name="buffetpage_buffet_texte" ><?php echo(get_option('buffetpage_buffet_texte')); ?></textarea>
    </div>
    <?php
} // END => field_buffetpage_buffet_texte
