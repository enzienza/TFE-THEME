<!-- START : section-homepage_buffet -->
<?php
    // SI homepage_buffet_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('homepage_buffet_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>

        <section id="home-section-buffet" class="bg-section">

            <?php
                // SI homepage_buffet_affiche_img EST COCHE
                // => Alors on affiche l'image en background

                if(checked(1, get_option('homepage_buffet_affiche_img'), false)){
                    ?>
                        <div class="img-cover">
                            <img src="<?php echo get_option('homepage_buffet_bg_img'); ?>" alt="">
                        </div><!-- .img-buffet -->
                    <?php
                }
             ?>

            <div class="container">
                <h1><?php echo get_option('homepage_buffet_titre'); ?></h1>
                <p><?php echo get_option('homepage_buffet_texte'); ?></p>

                <?php
                    // SI homepage_buffet_btn_actif EST COCHE
                    // => Alors afficher le bouton

                    if(checked(1, get_option('homepage_buffet_btn_actif'), false)){

                        ?>
                            <div>
                                <a href=" href="<?php echo get_option('homepage_buffet_btn_url'); ?>" target="_blank"">
                                    <?php echo get_option('homepage_buffet_btn_txt'); ?>
                                </a>
                            </div>
                        <?php
                    }
                 ?>
            </div><!-- / .container -->
        </section><!-- / #home-section-buffet .bg-buffet-->
        <?php
    }
 ?>

<!-- START : section-homepage_event -->
<?php
    // SI homepage_event_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('homepage_event_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>

        <section id="home-section-event" class="bg-section">

            <?php
                // SI homepage_event_affiche_img EST COCHE
                // => Alors on affiche l'image en background

                if(checked(1, get_option('homepage_event_affiche_img'), false)){
                    ?>
                        <div class="img-cover">
                            <img src="<?php echo get_option('homepage_event_bg_img'); ?>" alt="">
                        </div><!-- .img-event -->
                    <?php
                }
             ?>

            <div class="container">
                <h1><?php echo get_option('homepage_event_titre'); ?></h1>
                <p><?php echo get_option('homepage_event_texte'); ?></p>

                <?php
                    // SI homepage_event_btn_actif EST COCHE
                    // => Alors afficher le bouton

                    if(checked(1, get_option('homepage_event_btn_actif'), false)){

                        ?>
                            <div>
                                <a href=" href="<?php echo get_option('homepage_event_btn_url'); ?>" target="_blank"">
                                    <?php echo get_option('homepage_event_btn_txt'); ?>
                                </a>
                            </div>
                        <?php
                    }
                 ?>
            </div><!-- / .container -->
        </section><!-- / #home-section-event .bg-event-->
        <?php
    }
 ?>
