<?php get_header(); ?>

<!-- Display hello world on the front page -->
<?php while (have_posts()) : the_post(); ?>

<div>
<h1>Hello World</h1>

<!--Program loop (Prints the programs added to the custom post type "program")-->
<div class="program">

<?php
    $program = new WP_Query(
        array(
            'post_type'      => 'program', 
            'posts_per_page' => -1,
        )
    );
?>

<?php while($program->have_posts()): $program->the_post() ?>
    <p> <?php the_field('program_dato'); ?> </p>
    <p> <?php the_field('program_tid_start'); ?> </p>
    <p> <?php the_field('program_tid_slut'); ?> </p>
    <p> <?php the_field('program_sted'); ?> </p>
<?php endwhile ?>



<?php wp_reset_postdata() ?>
</div>


<!--Skuespiller loop (Prints the actors added to the custom post type "skuespillere")-->

<div class="skuespillere">

<?php
    $skuespiller = new WP_Query(
        array(
            'post_type'      => 'skuespiller', 
            'posts_per_page' => -1,
        )
    );
?>

<?php while($skuespiller->have_posts()): $skuespiller->the_post() ?>

    <img src="<?php the_field('skuespillerens_billede'); ?>" alt="">
    <p> <?php the_field('skuespillerens_navn'); ?> </p>
    <p> <?php the_field('skuespillerens_rolle'); ?> </p>
<?php endwhile ?>
<?php wp_reset_postdata() ?>
</div>


<!--Anmeldelses form -->
<?php echo do_shortcode('[cf7form cf7key="anmeldelse"]'); ?>


</div>




<?php endwhile; ?>

<?php get_footer(); ?>