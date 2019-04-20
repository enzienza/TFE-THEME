<?php

/*
Name:   [view-form] -> Page accueil
Description: Element de formulaire pour les sections de la page d'accueil
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

// CALLBACK FIELD : homepage_cover_bg_video ------------------------------------
function field_homepage_cover_bg_video(){
    ?>
        <div class="">
            <p>
                <input type="checkbox" id="" name="" value="1" <?php //checked(1, get_option(''), true); ?> />
                <span class="info">Ajouter une image d'arrière-plan pour cette section</span>
            </p>

            <p>
                <span>URL YouTube</span>
                <input type="text" id="" name="" value="<?php //'); ?>" />
            </p>

        </div>
    <?php
} // END => field_homepage_cover_bg_video






// CALLBACK FIELD : homepage_btn
function field_homepage_btn(){

    /* --- btn-buffet --- */
    $btn_buffet_hidden = esc_attr(get_option('btn_buffet_hidden'));
    $btn_buffet_txt = esc_attr(get_option('btn_buffet_txt'));
    $btn_buffet_url = esc_attr(get_option('btn_buffet_url'));

    /* --- btn-carte --- */
    $btn_carte_hidden = esc_attr(get_option('btn_carte_hidden'));
    $btn_carte_txt = esc_attr(get_option('btn_carte_txt'));
    $bnt_carte_url = esc_attr(get_option('bnt_carte_url'));


    ?>
    <div class="backend-item-btn-img">
        <h4>Bouton buffet</h4>
        <!-- START : btn-info -->
        <div class="backend-hiden-btn">
            <input type="checkbox" id="btn_buffet_hidden" name="btn_buffet_hidden" value="1" <?php checked(1, get_option('btn_buffet_hidden'), true); ?> />
            <span>Afficher le bouton</span>
        </div><!-- / .backend-hiden-btn -->

        <div class="backend-btn-txt">
            <label for="">Texte</label>
            <input type="text" id="btn_buffet_txt" name="btn_buffet_txt" value="<?php echo(get_option('btn_buffet_txt')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <div class="backend-btn-txt">
            <label for="">Lien (url)</label>
            <input type="text" id="btn_buffet_url" name="btn_buffet_url" value="<?php echo(get_option('btn_buffet_url')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <!-- START : btn-img -->
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('buffetpage_desc_img_uno'); ?>" alt="" class="backend-img-accueil">
        </div>

        <div class="backend-patg-img-accueil">
            <input type="file" name='buffetpage_desc_img_uno' id='buffetpage_desc_img_uno' value="<?php echo get_option('buffetpage_desc_img_uno'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('buffetpage_desc_img_uno'); ?>" />
            </p>
        </div>
    </div><!-- / .backend-item-btn-img -->

    <div class="backend-item-btn-img">
        <h4>Bouton carte</h4>

        <!-- START : btn-info -->
        <div class="backend-hiden-btn">
            <input type="checkbox" id="btn_carte_hidden" name="btn_carte_hidden" value="1" <?php checked(1, get_option('btn_carte_hidden'), true); ?> />
            <span>Afficher le bouton</span>
        </div><!-- / .backend-hiden-btn -->

        <div class="backend-btn-txt">
            <label for="">Texte</label>
            <input type="text" id="btn_carte_txt" name="btn_carte_txt" value="<?php echo(get_option('btn_carte_txt')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <div class="backend-btn-txt">
            <label for="">Lien (url)</label>
            <input type="text" id="bnt_carte_url" name="bnt_carte_url" value="<?php echo(get_option('bnt_carte_url')); ?>" />
        </div><!-- / .backend-btn-txt -->

        <!-- START : bnt-img -->
        <div class="backend-card-img-bg">
            <img src="<?php echo get_option('buffetpage_desc_img_due'); ?>" alt="" class="backend-img-accueil">
        </div>

        <div class="backend-patg-img-accueil">
            <input type="file" name='buffetpage_desc_img_due' id='buffetpage_desc_img_due' value="<?php echo get_option('buffetpage_desc_img_due'); ?>" />
            <p>
                <input type="text" name="" value="<?php echo get_option('buffetpage_desc_img_due'); ?>" />
            </p>
        </div>
    </div><!-- / .backend-item-btn-img -->
    <?php
} // END => field_homepage_btn
