<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


	<div class="">
		<?php the_title(); ?>
	</div>

	<div class="container">
		<?php the_content(); ?>
	</div>

<?php endwhile; endif; ?>



<!-- START section 4 : section-reservation -->
<?php
    // SI eventpage_reservation_hidden EST COCHE
    // => Alors il n'y a pas de section

    if(checked(1, get_option('eventpage_reservation_hidden'), false)){
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
