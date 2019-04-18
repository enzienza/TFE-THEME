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
function display_section_buffetpage_cover(){}

// CALLBACK REGISTER : buffetpage_cover_bg_img --------------------------------
function handle_file_bg_buffet_buffetpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['buffetpage_cover_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['buffetpage_cover_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['buffetpage_cover_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('buffetpage_cover_bg_img');

} // END => handle_file_bg_buffet_buffetpage


// CALLBACK FIELDS : buffetpage_cover_hidden ----------------------------------
function field_buffetpage_cover_hidden(){
    $buffetpage_cover_hidden = esc_attr(get_option('buffetpage_cover_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="buffetpage_cover_hidden" name="buffetpage_cover_hidden" value="1" <?php checked(1, get_option('buffetpage_cover_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_buffetpage_cover_hidden

// CALLBACK FIELDS : buffetpage_cover_bg_img ----------------------------------
function field_buffetpage_cover_bg_img(){
    //echo form element for file upload

    $buffetpage_cover_affiche_img = esc_attr(get_option('buffetpage_cover_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="buffetpage_cover_affiche_img" name="buffetpage_cover_affiche_img" value="1" <?php checked(1, get_option('buffetpage_cover_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='buffetpage_cover_bg_img' id='buffetpage_cover_bg_img' value="<?php echo get_option('buffetpage_cover_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('buffetpage_cover_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('buffetpage_cover_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_buffetpage_cover_bg_img


// CALLBARCK FIELD : field_buffetpage_cover_titre -----------------------------
function field_buffetpage_cover_titre(){
    $buffetpage_cover_titre = esc_attr(get_option('buffetpage_cover_titre'));
    ?>
        <div class="">
            <input type="text" id="buffetpage_cover_titre" name="buffetpage_cover_titre" value="<?php echo(get_option('buffetpage_cover_titre')); ?>">
        </div>
    <?php
} // END => field_buffetpage_cover_titre

// CALLBARCK FIELD : field_buffetpage_cover_texte -----------------------------
function field_buffetpage_cover_texte(){
    $buffetpage_cover_texte = esc_attr(get_option('buffetpage_cover_texte'));
    ?>
    <div class="">
        <textarea id="buffetpage_cover_texte" name="buffetpage_cover_texte" ><?php echo(get_option('buffetpage_cover_texte')); ?></textarea>
    </div>
    <?php
} // END => field_buffetpage_cover_texte

/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_message --> Option 3 -- page-buffet
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_buffetpage_message(){}

// CALLBACK REGISTER : buffetpage_message_avatar --------------------------------
function handle_file_msg_avatar_buffetpage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['buffetpage_message_avatar']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['buffetpage_message_avatar'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['buffetpage_message_avatar']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('buffetpage_message_avatar');

} // END => handle_file_msg_avatar_buffetpage


// CALLBACK FIELDS : buffetpage_message_hidden ----------------------------------
function field_buffetpage_message_hidden(){
    $buffetpage_message_hidden = esc_attr(get_option('buffetpage_message_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="buffetpage_message_hidden" name="buffetpage_message_hidden" value="1" <?php checked(1, get_option('buffetpage_message_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_buffetpage_message_hidden

// CALLBACK FIELDS : buffetpage_message_avatar ----------------------------------
function field_buffetpage_message_avatar(){
    //echo form element for file upload

    $buffetpage_message_affiche_img = esc_attr(get_option('buffetpage_message_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="buffetpage_message_affiche_img" name="buffetpage_message_affiche_img" value="1" <?php checked(1, get_option('buffetpage_message_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='buffetpage_message_avatar' id='buffetpage_message_avatar' value="<?php echo get_option('buffetpage_message_avatar'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('buffetpage_message_avatar'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('buffetpage_message_avatar'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_buffetpage_message_avatar

// CALLBARCK FIELD : field_buffetpage_message_texte -----------------------------
function field_buffetpage_message_texte(){
    $buffetpage_message_texte = esc_attr(get_option('buffetpage_message_texte'));
    ?>
    <div class="">
        <textarea id="buffetpage_message_texte" name="buffetpage_message_texte" ><?php echo(get_option('buffetpage_message_texte')); ?></textarea>
    </div>
    <?php
} // END => field_buffetpage_message_texte
