<?php get_header(); ?>

<!-- Display hello world on the front page -->
<?php while (have_posts()) : the_post(); ?>

    <div class="text-center">
        <h1>BUSTERS VERDEN</h1>
    </div>

    <div class="d-flex align-items-center flex-column" style="padding-bottom: 1rem;">
        <div class="col-10 d-flex justify-content-center gap-3">
            <!-- Program -->
            <div class="box" style="width: 60%;">
                <!--Program loop (Prints the programs added to the custom post type "program")-->
                <div class="program">

                    <h2>PROGRAM</h2>

                    <?php
                        $program = new WP_Query(
                            array(
                                'post_type'      => 'program', 
                                'posts_per_page' => -1,
                            )
                        );
                    ?>

                    <div class="info-program d-flex">
                        <?php while($program->have_posts()): $program->the_post() ?>
                            <div>
                                <div>
                                    <p class="info-dato"> <?php the_field('program_dato'); ?> </p>
                                </div>
                                <div>
                                    <p> <?php the_field('program_tid_start'); ?> </p>
                                    <p> <?php the_field('program_tid_slut'); ?> </p>
                                    <p> <?php the_field('program_sted'); ?> </p>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>

                    <?php wp_reset_postdata() ?>
                </div>
            </div>

            <!-- Skuespillere -->
            <div class="box" style="width: 40%;">
                <h2>SKUESPILLERE</h2>
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
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center flex-column" style="padding-bottom: 1rem;">
        <!-- Skriv anmeldelse -->
        <div class="box col-10">
            <!--Anmeldelses form -->
            <?php echo do_shortcode('[cf7form cf7key="anmeldelse"]'); ?>
        </div>
    </div>

    <div class="d-flex align-items-center flex-column" style="padding-bottom: 1rem;">
        <!-- Anmeldelser -->
        <div class="box col-10">
                    <?php
                        $anmeldelse = new WP_Query(
                            array(
                                'post_type'      => 'anmeldelse', 
                                'posts_per_page' => -1,
                            )
                        );
                    ?>


                    <?php while($anmeldelse->have_posts()): $anmeldelse->the_post() ?>
                        <p> <?php the_field('anmeldelse-navn'); ?> </p>
                        <p> <?php echo get_the_time('Y-m-d'); ?> </p>
                        <p> <?php the_field('anmeldelse-tekst'); ?> </p>
                        
                    <?php endwhile ?>



                    <?php wp_reset_postdata() ?>
                </div>
    </div>
    
    <div class="d-flex align-items-center flex-column" style="padding-bottom: 1rem;">
        <!-- Sponsore -->
        <div class="box col-10 text-center">
            <h2>VORES SPONSORE</h2>
        </div>
    </div>
<?php endwhile; ?>

<?php wp_reset_postdata() ?>

<?php get_footer(); ?>