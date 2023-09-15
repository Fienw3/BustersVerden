<?php get_header(); ?>

<!-- Display hello world on the front page -->
<?php while (have_posts()) : the_post(); ?>

    <div class="text-center">
        <h1>BUSTERS VERDEN</h1>
    </div>

    <div class="d-flex align-items-center flex-column" style="padding-bottom: 1rem;">
        <div class="info-row-1 col-10 d-flex justify-content-center gap-3">
            <!-- Program -->
            <div class="box inner-box" style="width: 60%;">
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

                    <div class="info-program d-flex flex-wrap">
                        <?php while($program->have_posts()): $program->the_post() ?>
                            <div>
                                <div>
                                    <h3 class="info-dato"> <?php the_field('program_dato'); ?> </h3>
                                </div>
                                <hr style="">
                                <div>
                                <p>
                                    <?php
                                    $program_tid_start = get_field('program_tid_start');
                                    $program_tid_slut = get_field('program_tid_slut');
                                    
                                    echo $program_tid_start . ' til ' . $program_tid_slut;
                                    ?>
                                </p>
                                    <p> <?php the_field('program_sted'); ?> </p>
                                </div>
                            </div>
                        <?php endwhile ?>
                    </div>

                    <?php wp_reset_postdata() ?>
                </div>
            </div>

            <!-- Skuespillere -->
            <div class="box inner-box" style="width: 40%;">
                <h2>SKUESPILLERE</h2>
                <!--Skuespiller loop (Prints the actors added to the custom post type "skuespillere")-->
                <div class="skuespillere  d-flex flex-wrap">

                <?php
                    $skuespiller = new WP_Query(
                        array(
                            'post_type'      => 'skuespiller', 
                            'posts_per_page' => -1,
                        )
                    );
                ?>

                    <div class="skuespiller-info flex-column">
                        <?php while($skuespiller->have_posts()): $skuespiller->the_post() ?>
                            <div>
                            <img src="<?php the_field('skuespillerens_billede'); ?>" alt="Billede af skuespilleren" style="width: 100px; height: 100px;">
                            </div>
                            <div>
                            <p> <?php the_field('skuespillerens_navn'); ?> </p>
                            <p> <?php the_field('skuespillerens_rolle'); ?> </p>
                            </div>
                        <?php endwhile ?>
                    </div>

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