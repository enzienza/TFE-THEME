

<!-- START : section-homepage_emporter -->
<?php
    // SI homepage_emporter_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('homepage_emporter_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>

        <section id="home-section-emporter" class="bg-section">

            <?php
                // SI homepage_emporter_affiche_img EST COCHE
                // => Alors on affiche l'image en background

                if(checked(1, get_option('homepage_emporter_affiche_img'), false)){
                    ?>
                        <div class="img-cover">
                            <img src="<?php echo get_option('homepage_emporter_bg_img'); ?>" alt="">
                        </div><!-- .img-emporter -->
                    <?php
                }
             ?>

            <div class="container">
                <h1><?php echo get_option('homepage_emporter_titre'); ?></h1>
                <p><?php echo get_option('homepage_emporter_texte'); ?></p>

                <?php
                    // SI homepage_emporter_btn_actif EST COCHE
                    // => Alors afficher le bouton

                    if(checked(1, get_option('homepage_emporter_btn_actif'), false)){

                        ?>
                            <div>
                                <a href=" href="<?php echo get_option('homepage_emporter_btn_url'); ?>" target="_blank"">
                                    <?php echo get_option('homepage_emporter_btn_txt'); ?>
                                </a>
                            </div>
                        <?php
                    }
                 ?>
            </div><!-- / .container -->
        </section><!-- / #home-section-emporter .bg-emporter-->
        <?php
    }
 ?>
