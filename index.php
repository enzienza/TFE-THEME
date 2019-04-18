<?php get_header(); ?>

<main role="main">

    <!-- section-cover -->
    <?php require get_template_directory() . '/home-sections/section-cover.php' ?>

    <!-- section-buffet -->
    <?php require get_template_directory() . '/home-sections/section-buffet.php' ?>

    <!-- section-carte -->
    <?php require get_template_directory() . '/home-sections/section-carte.php' ?>

    <!-- section-emporter -->
    <?php require get_template_directory() . '/home-sections/section-emporter.php' ?>

    <!-- section-event -->
    <?php require get_template_directory() . '/home-sections/section-event.php' ?>

    <!-- DEBUT : section #section-contact -->
    <section id="section-contact" class="bg-map">
        <div class="container">
            <div class="row info-contact">
                <div class="col-md-6 col-12 info-left">
                    <div class="icons flaticon-placeholder"></div>
                    <div class="text">
                        <?php echo get_option('inforesto_adresse'); ?>
                    </div>
                </div><!-- ./ col-md-6 col-12 -->
                <div class="col-md-6 col-12 info-right">
                    <div class="icons flaticon-phone-call"></div>
                    <div class="text">
                        <?php echo get_option('inforesto_phone'); ?>
                    </div>
                </div><!-- ./ col-md-6 col-12 -->
            </div><!-- ./ info-contact -->
        </div><!-- ./ container -->
    </section><!-- ./ #section-contact -->

</main>

<?php get_footer(); ?>
