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
    <table class="table-btn">
        <p>
            <input type="checkbox" id="homepage_cover_btn_actif" name="homepage_cover_btn_actif" value="1" <?php checked(1, get_option('homepage_cover_btn_actif'), true); ?> />
            <span>Afficher le bouton</span>
        </p>
        <tbody>
            <tr class="backend-btn-item">
                <td><label for="">Texte</label></td>
                <td><input type="text" id="homepage_cover_btn_txt" name="homepage_cover_btn_txt" value="<?php echo(get_option('homepage_cover_btn_txt')); ?>" /></td>
            </tr><!-- / .backend-btn-item" -->
            <tr class="backend-btn-item">
                <td><label for="">Lien (url)</label></td>
                <td><input type="text" id="homepage_cover_btn_url" name="homepage_cover_btn_url" value="<?php echo(get_option('homepage_cover_btn_url')); ?>" /></td>
            </tr><!-- / .backend-btn-item" -->
        </tbody>
    </table><!-- / .table-btn -->
    <?php
} // END => field_homepage_cover_button


/* ----------------------------------------------------------------------------- */
// SECTION 2 : section_buffet --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_homepage_buffet(){}

// CALLBACK REGISTER : homepage_buffet_bg_img -----------------------------------
function handle_file_bg_buffet_homepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['homepage_buffet_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['homepage_buffet_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['homepage_buffet_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('homepage_buffet_bg_img');

} // END => handle_file_bg_buffet_homepage

// CALLBACK FIELDS : homepage_buffet_hidden -------------------------------------
function field_homepage_buffet_hidden(){
    $homepage_buffet_hidden = esc_attr(get_option('homepage_buffet_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="homepage_buffet_hidden" name="homepage_buffet_hidden" value="1" <?php checked(1, get_option('homepage_buffet_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_homepage_buffet_hidden

// CALLBACK FIELDS : homepage_buffet_bg_img -------------------------------------
function field_homepage_buffet_bg_img(){
    //echo form element for file upload

    $homepage_buffet_affiche_img = esc_attr(get_option('homepage_buffet_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="homepage_buffet_affiche_img" name="homepage_buffet_affiche_img" value="1" <?php checked(1, get_option('homepage_buffet_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='homepage_buffet_bg_img' id='homepage_buffet_bg_img' value="<?php echo get_option('homepage_buffet_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('homepage_buffet_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('homepage_buffet_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_homepage_buffet_bg_img

// CALLBARCK FIELD : field_homepage_buffet_titre --------------------------------
function field_homepage_buffet_titre(){
    $homepage_buffet_titre = esc_attr(get_option('homepage_buffet_titre'));
    ?>
        <div class="">
            <input type="text" id="homepage_buffet_titre" name="homepage_buffet_titre" value="<?php echo(get_option('homepage_buffet_titre')); ?>">
        </div>
    <?php
} // END => field_homepage_buffet_titre

// CALLBARCK FIELD : field_homepage_buffet_texte --------------------------------
function field_homepage_buffet_texte(){
    $homepage_buffet_texte = esc_attr(get_option('homepage_buffet_texte'));
    ?>
    <div class="">
        <textarea id="homepage_buffet_texte" name="homepage_buffet_texte" ><?php echo(get_option('homepage_buffet_texte')); ?></textarea>
    </div>
    <?php
} // END => field_homepage_buffet_texte

// CALLBARCK FIELD : field_homepage_buffet_button -------------------------------
function field_homepage_buffet_button(){
    $homepage_buffet_btn_actif = esc_attr(get_option('homepage_buffet_btn_actif'));
    $homepage_buffet_btn_txt = esc_attr(get_option('homepage_buffet_btn_txt'));
    $homepage_buffet_btn_url= esc_attr(get_option('homepage_buffet_btn_url'));
    ?>
    <table class="table-btn">
        <p>
            <input type="checkbox" id="homepage_buffet_btn_actif" name="homepage_buffet_btn_actif" value="1" <?php checked(1, get_option('homepage_buffet_btn_actif'), true); ?> />
            <span>Afficher le bouton</span>
        </p>
        <tbody>
            <tr class="backend-btn-item">
                <td><label for="">Texte</label></td>
                <td><input type="text" id="homepage_buffet_btn_txt" name="homepage_buffet_btn_txt" value="<?php echo(get_option('homepage_buffet_btn_txt')); ?>" /></td>
            </tr><!-- / .backend-btn-item" -->
            <tr class="backend-btn-item">
                <td><label for="">Lien (url)</label></td>
                <td><input type="text" id="homepage_buffet_btn_url" name="homepage_buffet_btn_url" value="<?php echo(get_option('homepage_buffet_btn_url')); ?>" /></td>
            </tr><!-- / .backend-btn-item" -->
        </tbody>
    </table><!-- / .table-btn -->
    <?php
} // END => field_homepage_buffet_button

/* ----------------------------------------------------------------------------- */
// SECTION 3 : section_carte --> Option 1 -- page-accueil
/* ----------------------------------------------------------------------------- */

// CALLBACK SETTINGS -----------------------------------------------------------
function display_section_homepage_carte(){}

// CALLBACK REGISTER : homepage_carte_bg_img -----------------------------------
function handle_file_bg_carte_homepage($options){
    //check if user had uploaded a file and clicked save changes button
    if(!empty($_FILES['homepage_carte_bg_img']['tmp_name'])){
        $urls = wp_handle_upload($_FILES['homepage_carte_bg_img'], array('test_form' => FALSE));
        $temp = $urls['url'];
        return $temp;
    } // end -> if(!empty($_FILES['homepage_carte_bg_img']['tmp_name']))

    //no upload. old file url is the new value.
    return get_option('homepage_carte_bg_img');

} // END => handle_file_bg_carte_homepage

// CALLBACK FIELDS : homepage_carte_hidden -------------------------------------
function field_homepage_carte_hidden(){
    $homepage_carte_hidden = esc_attr(get_option('homepage_carte_hidden'));
    ?>
        <div class="">
            <input type="checkbox" id="homepage_carte_hidden" name="homepage_carte_hidden" value="1" <?php checked(1, get_option('homepage_carte_hidden'), true); ?> />
            <span class="info">Masquer cette section sur la page d'acceuil</span>
        </div>
    <?php
} // END => field_homepage_carte_hidden

// CALLBACK FIELDS : homepage_carte_bg_img -------------------------------------
function field_homepage_carte_bg_img(){
    //echo form element for file upload

    $homepage_carte_affiche_img = esc_attr(get_option('homepage_carte_affiche_img'));
    ?>

    <div class="">
        <span>
            <input type="checkbox" id="homepage_carte_affiche_img" name="homepage_carte_affiche_img" value="1" <?php checked(1, get_option('homepage_carte_affiche_img'), true); ?> />
            <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
        </span>
        <input type="file" name='homepage_carte_bg_img' id='homepage_carte_bg_img' value="<?php echo get_option('homepage_carte_bg_img'); ?>" />
        <p>
            <input type="text" name="" value="<?php echo get_option('homepage_carte_bg_img'); ?>" />
        </p>
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('homepage_carte_bg_img'); ?>" alt="" class="backend-img-bg">
        </div>
    </div>
    <?php
} // END => field_homepage_carte_bg_img

// CALLBARCK FIELD : field_homepage_carte_titre --------------------------------
function field_homepage_carte_titre(){
    $homepage_carte_titre = esc_attr(get_option('homepage_carte_titre'));
    ?>
        <div class="">
            <input type="text" id="homepage_carte_titre" name="homepage_carte_titre" value="<?php echo(get_option('homepage_carte_titre')); ?>">
        </div>
    <?php
} // END => field_homepage_carte_titre

// CALLBARCK FIELD : field_homepage_carte_texte --------------------------------
function field_homepage_carte_texte(){
    $homepage_carte_texte = esc_attr(get_option('homepage_carte_texte'));
    ?>
    <div class="">
        <textarea id="homepage_carte_texte" name="homepage_carte_texte" ><?php echo(get_option('homepage_carte_texte')); ?></textarea>
    </div>
    <?php
} // END => field_homepage_carte_texte

// CALLBARCK FIELD : field_homepage_carte_button -------------------------------
function field_homepage_carte_button(){
    $homepage_carte_btn_actif = esc_attr(get_option('homepage_carte_btn_actif'));
    $homepage_carte_btn_txt = esc_attr(get_option('homepage_carte_btn_txt'));
    $homepage_carte_btn_url= esc_attr(get_option('homepage_carte_btn_url'));
    ?>
    <table class="table-btn">
        <p>
            <input type="checkbox" id="homepage_carte_btn_actif" name="homepage_carte_btn_actif" value="1" <?php checked(1, get_option('homepage_carte_btn_actif'), true); ?> />
            <span>Afficher le bouton</span>
        </p>
        <tbody>
            <tr class="backend-btn-item">
                <td><label for="">Texte</label></td>
                <td><input type="text" id="homepage_carte_btn_txt" name="homepage_carte_btn_txt" value="<?php echo(get_option('homepage_carte_btn_txt')); ?>" /></td>
            </tr><!-- / .backend-btn-item" -->
            <tr class="backend-btn-item">
                <td><label for="">Lien (url)</label></td>
                <td><input type="text" id="homepage_carte_btn_url" name="homepage_carte_btn_url" value="<?php echo(get_option('homepage_carte_btn_url')); ?>" /></td>
            </tr><!-- / .backend-btn-item" -->
        </tbody>
    </table><!-- / .table-btn -->
    <?php
} // END => field_homepage_carte_button
