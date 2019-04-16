<?php

/*
Name:   Pékin - Paris
Description: Page settings Theme Pékin
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 1.0
*/

/* ----------------------------------------------------------------------------- */
/* ADD MENU PAGE */
/* ----------------------------------------------------------------------------- */

// initialisation de la page ---------------------------------------------------
add_action('admin_menu', 'add_page_pekinparis');


// construire la page ----------------------------------------------------------
function add_page_pekinparis(){

    // Menu 1er niveau
    add_menu_page(
        'Pékin - Paris',                            // page_title
        'Pékin - Paris',                            // menu_title
        'manage_options',                           // capability
        'info-resto',                          // slug_menu
        'theme_page_pekinparis',                    // function qui rendra la sortie
        '',                                         // icon
        100                                         // position
    );
} // END ==> add_page_pekinparis

// TAB : créer un tableau dynamique
function tabs_pekinparis(){
    $tabs = array(
        'infos-resto' => 'Infos Resto',
        'horaires' => 'Horaires'
    );
    return apply_filters('tabs_pekinparis', $tabs);
} // END ==>  tabs_pekinparis

/* ----------------------------------------------------------------------------- */
/* THEME PAGE */
/* ----------------------------------------------------------------------------- */

// PAGE 1er NIVEAU -----------------------------
function theme_page_pekinparis(){

    // TABS
    $tabs = tabs_pekinparis();
    $current = sanitize_text_field($_GET['tab']);

    ?>

    <div class="wrap">
        <h1 class="wp-heading-inline">Pékin-Paris</h1>
        <p class="description"></p>
        <div>
            <h2 class="nav-tab-wrapper">
                <?php
                if(!empty($tabs)){
                    foreach($tabs as $key => $value){
                        $class = ( $key == $current ) ? ' nav-tab-active' : '';
                        ?>
                        <a href="?page=pekinparis&tab=<?php echo $key; ?>" class="nav-tab<?php echo $class; ?>"><?php echo $value; ?></a>
                        <?php
                    }
                }
                ?>
            </h2><!-- / .nav-tab-wrapper -->


                <form class="form-custom"  method="post" action="options.php">

                    <?php

                    if($_GET['tab'] == 'horaires'){
                        ?>
                        <h3>Horaire</h3>
                        <div class="form-table form-table-custom">
                            <?php settings_fields( 'group-horaire' );?>
                            <?php do_settings_sections( 'horaire' ); ?>
                        </div>
                        <?php
                    } else {
                        ?>
                        <h3 class="wp-heading-inline">Info Resto</h3>
                        <div class="">
                            <?php settings_fields( 'group-info-resto' );?>
                            <?php do_settings_sections( 'info-resto' ); ?>
                        </div>
                        <?php
                    }

                    ?>

                    <?php submit_button(); ?>
                </form><!-- / .form-custom -->


        </div>
    </div>


    <?php

} // END ==> theme_page_pekinparis


/* ----------------------------------------------------------------------------- */
/* SETTING SECTION AND FIED */
/* ----------------------------------------------------------------------------- */

// initialisation des paramattre -----------------------------------------------
add_action('admin_init', 'custom_settings_pekinparis');


// contruire des paramettres ---------------------------------------------------
function custom_settings_pekinparis(){

    // LOCATION ----------------------------------------------------------------
    /* --- setting ---*/
    add_settings_section(
        'section_location',                                // ID (id used to identify the field throughout the theme)
        __('Coordonnée', 'section_location'),              // TITLE (title to be displayed on the administration page)
        'display_section_location',                        // CALLBACK (callback used to render the description of the section)
        'info-resto'                                       // PAGE (page on which to add this section of options)
    ); // end --> section_location

    /* --- fields ---*/
    add_settings_field(
        'inforesto_adresse',                               // ID -- ID used to identify the field throughout the theme
        __('Adresse', 'section_location'),                  // LABEL -- The label to the left of the option interface element
        'field_inforesto_adresse',                         // CALLBACK FUNCTION -- The name of the function responsible for rendering the option interface
        'info-resto',                                       // MENU PAGE SLUG -- The page on which this option will be displayed
        'section_location'                                  // SECTION ID -- The name of the section to which this field belongs
    ); // end --> field_inforesto_adresse

    add_settings_field(
        'inforesto_map',                               // ID -- ID used to identify the field throughout the theme
        __('URL Google Map', 'section_location'),                  // LABEL -- The label to the left of the option interface element
        'field_inforesto_map',                              // CALLBACK FUNCTION -- The name of the function responsible for rendering the option interface
        'info-resto',                                       // MENU PAGE SLUG -- The page on which this option will be displayed
        'section_location'                                  // SECTION ID -- The name of the section to which this field belongs
    ); // end --> field_inforesto_map

    add_settings_field(
        'inforesto_phone',                               // ID -- ID used to identify the field throughout the theme
        __('Téléphone', 'section_location'),                  // LABEL -- The label to the left of the option interface element
        'field_inforesto_phone',                         // CALLBACK FUNCTION -- The name of the function responsible for rendering the option interface
        'info-resto',                                       // MENU PAGE SLUG -- The page on which this option will be displayed
        'section_location'                                  // SECTION ID -- The name of the section to which this field belongs
    ); // end --> field_inforesto_phone

    /* --- register --- */
    register_setting('group-info-resto', 'inforesto_adresse');
    register_setting('group-info-resto', 'inforesto_map');
    register_setting('group-info-resto', 'inforesto_phone');

    // LOCATION ----------------------------------------------------------------


} // END ==> custom_settings_pekinparis



/* ----------------------------------------------------------------------------- */
/* FIELD CALLBACK
/* ----------------------------------------------------------------------------- */


function display_section_location(){}

function field_inforesto_adresse(){
    $inforesto_adresse = esc_attr(get_option('inforesto_adresse'));
    ?>
        <input type="text" id="inforesto_adresse" name="inforesto_adresse" value="<?php echo(get_option('inforesto_adresse')); ?>" />
    <?php
} //END => field_inforesto_adresse

function field_inforesto_map(){
    $inforesto_map = esc_attr(get_option('inforesto_map'));
    ?>
        <textarea name="inforesto_map" id="inforesto_map" cols="80"><?php echo esc_attr(get_option('inforesto_map')); ?></textarea>
    <?php
} //END => field_inforesto_map

function field_inforesto_phone(){
    $inforesto_phone = esc_attr(get_option('inforesto_phone'));
    ?>
        <input type="text" id="inforesto_phone" name="inforesto_phone" value="<?php echo(get_option('inforesto_phone')); ?>" />
    <?php
} //END => field_inforesto_phone
