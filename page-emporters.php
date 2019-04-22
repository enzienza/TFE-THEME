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


<!-- START section 4 : carte-content -->



<!-- START section 5 : section-reservation -->


<?php get_footer(); ?>
