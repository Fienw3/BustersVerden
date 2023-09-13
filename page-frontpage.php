<?php get_header(); ?>

<!-- Display hello world on the front page -->
<?php while (have_posts()) : the_post(); ?>

<div>
<h1>Hello World</h1>
</div>

<!--Konkurrence formular-->
<div class="konkurrence-signup">
    <?php echo do_shortcode('[contact-form-7 id="9dd27a2" title="Konkurrence"]'); ?>
</div>



<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>