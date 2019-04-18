

<!-- START : section-homepage_cover -->
<?php
    // SI homepage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('homepage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>

        <section id="home-section-cover" class="bg-cover">

            <?php
                // SI homepage_cover_affiche_img EST COCHE
                // => Alors on affiche l'image en background

                if(checked(1, get_option('homepage_cover_affiche_img'), false)){
                    ?>
                        <div class="img-cover">
                            <img src="<?php echo get_option('homepage_cover_bg_img'); ?>" alt="">
                        </div><!-- .img-cover -->
                    <?php
                }
             ?>

            <div class="container">
                <h1><?php echo get_option('homepage_cover_titre'); ?></h1>
                <p><?php echo get_option('homepage_cover_texte'); ?></p>

                <?php
                    // SI homepage_cover_btn_actif EST COCHE
                    // => Alors afficher le bouton

                    if(checked(1, get_option('homepage_cover_btn_actif'), false)){

                        ?>
                            <div>
                                <a href=" href="<?php echo get_option('homepage_cover_btn_url'); ?>" target="_blank"">
                                    <?php echo get_option('homepage_cover_btn_txt'); ?>
                                </a>
                            </div>
                        <?php
                    }
                 ?>
            </div><!-- / .container -->
        </section><!-- / #home-section-cover .bg-cover-->
        <?php
    }
 ?>
