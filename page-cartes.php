<?php
/* Template Name: cartes */
?>

<?php get_header(); ?>

<!-- START section 1 : section-cartepage_cover -->
<?php
    // SI cartepage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('cartepage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="home-section-carte" class="bg-section">

            <?php
            // SI cartepage_cover_affiche_img EST COCHE
            // => Alors on affiche l'image en background

            if(checked(1, get_option('cartepage_cover_affiche_img'), false)){
                ?>
                <div class="img-cover">
                    <img src="<?php echo get_option('cartepage_cover_bg_img'); ?>" alt="">
                </div><!-- .img-carte -->
                <?php
            }
            ?>
            <div class="container">
                <h1><?php echo get_option('cartepage_cover_titre'); ?></h1>
                <p><?php echo get_option('cartepage_cover_texte'); ?></p>
            </div><!-- / .container -->
        </section><!-- / #home-section-carte .bg-carte-->
        <?php
    }
?>

<!-- START section 2 : section-cartepage_message -->
<?php
    // SI cartepage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('cartepage_message_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="message-carte" class="container section-message">
            <div class="row">
                <?php
                // SI cartepage_msg_affiche_avatar EST COCHE
                // => Alors on affiche l'avatar

                if(checked(1, get_option('cartepage_msg_affiche_avatar'), false)){
                    ?>
                    <div class="col-md-6 col-12">
                        <img src="<?php echo get_option('cartepage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                    </div><!-- .col-md-6 .col-12 -->
                    <?php
                }
                ?>
                <div class="col-md-6 col-12">
                    <h2><?php echo get_option('cartepage_message_titre'); ?></h2>

                    <?php
                        // SI cartepage_mgs_chinois est COCHE
                        // Alors on affiche

                        if(checked(1, get_option('cartepage_mgs_chinois'), false)){
                            ?>
                                <p>Chinoise</p>
                            <?php
                        }
                     ?>


                     <?php
                         // SI cartepage_mgs_france est COCHE
                         // Alors on affiche

                         if(checked(1, get_option('cartepage_mgs_france'), false)){
                             ?>
                                 <p>Française</p>
                             <?php
                         }
                      ?>

                      <?php
                          // SI cartepage_mgs_thai est COCHE
                          // Alors on affiche

                          if(checked(1, get_option('cartepage_mgs_thai'), false)){
                              ?>
                                  <p>Thaïlandaise</p>
                              <?php
                          }
                       ?>

                </div><!-- / .col-md-6 col-12 -->
            </div><!-- / .row -->
        </section><!-- / #home-section-carte .bg-carte-->
        <?php
    }
?>

<!-- START section 4 : carte-content -->
<section>
    <h1>Que c'est beau</h1>
</section>


<!-- START section 5 : section-reservation -->
<?php
    // SI cartepage_reservation_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('cartepage_reservation_hidden'), false)){
        ?>
        <section class="reservation text-center">
            <h1>Réserver maintenant</h1>
            <p>
                <?php echo get_option('inforesto_phone'); ?>
            </p>

        </section><!-- /  .bg-carte-->
        <?php
    } 
?>






<?php get_footer(); ?>
