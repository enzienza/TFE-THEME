<?php
/* Template Name: emporters */
?>

<?php get_header(); ?>

<!-- START section 1 : section-emporterpage_cover -->
<?php
    // SI emporterpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('emporterpage_cover_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="menu-section-carte" class="bg-section">

            <?php
            // SI emporterpage_cover_affiche_img EST COCHE
            // => Alors on affiche l'image en background

            if(checked(1, get_option('emporterpage_cover_affiche_img'), false)){
                ?>
                <div class="img-cover">
                    <img src="<?php echo get_option('emporterpage_cover_bg_img'); ?>" alt="">
                </div><!-- .img-carte -->
                <?php
            }
            ?>
            <div class="container">
                <h1><?php echo get_option('emporterpage_cover_titre'); ?></h1>
                <p><?php echo get_option('emporterpage_cover_texte'); ?></p>
            </div><!-- / .container -->
        </section><!-- / #menu-section-carte .bg-carte-->
        <?php
    }
?>

<!-- START section 2 : section-emporterpage_message -->
<?php
    // SI emporterpage_cover_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('emporterpage_message_hidden'), false)){
        ?>
        <?php
    } else {
        // SINON
        // => Afficher la section
        ?>
        <section id="message-carte" class="container section-message">
            <div class="row">

                <div class="col-md-6 col-12">
                    <p class="acchoche"><?php echo get_option('emporterpage_msg_txt'); ?></p>
                </div><!-- / .col-md-6 col-12 -->

                <?php
                // SI emporterpage_msg_affiche_avatar EST COCHE
                // => Alors on affiche l'avatar

                if(checked(1, get_option('emporterpage_msg_affiche_avatar'), false)){
                    ?>
                    <div class="col-md-6 col-12">
                        <img src="<?php echo get_option('emporterpage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                    </div><!-- .col-md-6 .col-12 -->
                    <?php
                }
                ?>

            </div><!-- / .row -->
        </section><!-- / #menu-section-carte .bg-carte-->
        <?php
    }
?>

<!-- START section 3 : carte-emporter -->
<section id="carte-emporter" class="container">
    <h1>Carte à emporter</h1>
    <div class="row">
        <div class="col-3">
            <img src="<?php echo get_option('emporterpage_info_avatar'); ?>" alt="">
        </div><!-- /.col-3 -->

        <div class="col-9">
            <ul>
                <li>
                    <strong><?php echo get_option('emporterpage_promo_reduction'); ?></strong>
                    sur tout les plats à emporter
                </li>
                <li>
                    <strong>
                        <?php echo get_option('emporterpage_promo_offert'); ?> <span> offert</span>
                    </strong>
                    <span>a partir de </span>
                    <span><?php echo get_option('emporterpage_promo_minimum'); ?></span>
                </li>
            </ul>
        </div><!-- /.col-9 -->
    </div><!-- /.row -->

    <!-- region repete => CPT-Emporter -->
    <div class="">
        Ici région répeter Filter
    </div>

    <div class="row">
        <!-- region repete => CPT-Emporter -->
        <div class="col-md-3 .col-12">
            <h1>Titre plat</h1>
            <div class="">
                image
            </div>
        </div>
        <div class="col-md-9 .col-12">
            <!-- region repeter => metabox repeatable-field -->
            Table
        </div>
    </div>

</section><!-- / #carte-emporter .container -->


<!-- START section 5 : section-commander -->
<?php
    // SI emporterpage_commander_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('emporterpage_commander_hidden'), false)){
        ?>
        <section class="commander text-center">
            <h1>Passer commande</h1>
            <p>
                <?php echo get_option('inforesto_phone'); ?>
            </p>

        </section><!-- /  .bg-carte-->
        <?php
    }
?>

<!-- START section 5 : buffet-emporter -->
<section id="buffet-emporter" class="container">
    <div class="text-center">
        <h1>Buffet à emporter</h1>
        <p>faites votre choix dans les entrées et plats préparés</p>
    </div>

    <div class="row">
        <div class="col-md-7 col-12 box-left">
            <ul>

                    <!-- item-buffet-takeaway -->
                <li class="item-buffet-takeaway row">
                    <div class="col-4">
                        <img src="" alt="">
                    </div>

                    <div class="col-5">
                        <p>1 barquette</p>
                    </div>

                    <div class="col-3">
                        <p class="prix">8,00€</p>
                    </div>

                </li><!-- /.item-buffet-takeaway -->

                <!-- item-buffet-takeaway -->
                <li class="item-buffet-takeaway row">
                    <div class="col-4">
                        <img src="" alt="">
                    </div>

                    <div class="col-5">
                        <p>1 barquette</p>
                    </div>

                    <div class="col-3">
                        <p class="prix">8,00€</p>
                    </div>

                </li><!-- /.item-buffet-takeaway -->

                <!-- item-buffet-takeaway -->
                <li class="item-buffet-takeaway row">
                    <div class="col-4">
                        <img src="" alt="">
                    </div>

                    <div class="col-5">
                        <p>1 barquette</p>
                    </div>

                    <div class="col-3">
                        <p class="prix">8,00€</p>
                    </div>

                </li><!-- /.item-buffet-takeaway -->
            </ul>
        </div><!-- /.box-left -->
        <div class="col-md-5 box-right">
            <img src="<?php echo get_option('emporter_buffet_avatar'); ?>" alt="">
        </div><!-- /.box-right -->
    </div><!-- /.row -->

</section><!-- / #buffet-emporter .container -->

<?php get_footer(); ?>
