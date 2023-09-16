<?php get_header(); ?>



<div class="front-overall-1 d-flex align-items-center flex-column" style="padding-bottom: 1rem; height: 100%">
<div class="d-flex col-10 flex-column">

    <div class="d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 1rem;">
        <img class="Logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png" alt="Busters Verden Logo" style="height: auto;">
    </div>
    <div>
        <a href="http://busters-verden.local/"><button>⭠ FORSIDE</button></a>
    </div>
</div>
</div>

<!-- Display hello world on the front page -->
<?php while (have_posts()) : the_post(); ?>

    <div class="d-flex align-items-center flex-column" style="padding-bottom: 1rem;">
        <div class="info-row-1 col-10 d-flex justify-content-center gap-3">
            <!-- Program -->
            <div class="box inner-box" style="width: 60%;">
                <!--Program loop (Prints the programs added to the custom post type "program")-->
                <div class="program">

                    <h2 class="text-center">PROGRAM</h2>

                    <?php
                        $program = new WP_Query(
                            array(
                                'post_type'      => 'program', 
                                'posts_per_page' => -1,
                            )
                        );
                    ?>

                    <div class="info-program d-flex justify-content-between flex-wrap";>
                        <?php while($program->have_posts()): $program->the_post() ?>
                            <div class="inner-info-program" style="width: 48%;">
                                <div>
                                <hr style="">
                                    <h3 class="info-dato"> <?php the_field('program_dato'); ?> </h3>
                                </div>
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
                <div style="margin: 2rem;"></div>
                <a href="https://mhe.dk/program" style="width: 100%">
                <input class="info-køb-billet-link" type="submit" alt="Link til at købe biletter på musikhusets hjemmeside" value="KØB BILLET"><!--PLaceholder pic, please replace-->
                </a>
            </div>

            <!-- Skuespillere -->
            <div class="box inner-box" style="width: 40%;">
                <h2>SKUESPILLERE</h2>
                <!--Skuespiller loop (Prints the actors added to the custom post type "skuespillere")-->
                <?php
                    $skuespiller = new WP_Query(
                        array(
                            'post_type'      => 'skuespiller', 
                            'posts_per_page' => -1,
                        )
                    );
                ?>

                    <div class="skuespiller-info d-flex justify-content-between flex-wrap" style="width: 100%;">
                        <?php while($skuespiller->have_posts()): $skuespiller->the_post() ?>
                            <div>
                                <img src="<?php the_field('skuespillerens_billede'); ?>" alt="Billede af skuespilleren" style="width: 100px; height: 100px;">
                                <p> <?php the_field('skuespillerens_navn'); ?> </p>
                                <p> <span> <?php the_field('skuespillerens_rolle'); ?> </span> </p>
                            </div>
                        <?php endwhile ?>
                    </div>

                <?php wp_reset_postdata() ?>

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
        <div class="box col-10" style="padding-bottom: 1rem;">
            <?php
                $anmeldelse = new WP_Query(
                    array(
                    'post_type'      => 'anmeldelse', 
                    'posts_per_page' => -1,
                    )
                );
            ?>

            <div class="anmeldelser-box">
                <?php while($anmeldelse->have_posts()): $anmeldelse->the_post() ?>
                <div class="d-flex gap-3">
                    <p><span><?php the_field('anmeldelse-navn'); ?></span></p>
                    <p> <?php echo get_the_time('Y-m-d'); ?> </p>
                </div>
                <p> <?php the_field('anmeldelse-tekst'); ?> </p>

                <hr>

                <?php endwhile ?>
            </div>

            <?php wp_reset_postdata() ?>
        </div>
    </div>
    
    <div class="d-flex align-items-center flex-column" style="padding-bottom: 1rem;">
        <!-- Sponsore -->
        <div class="box col-10 text-center">
            <h2>VORES SPONSORE</h2>
                <?php
                    $sponsor = new WP_Query(
                        array(
                            'post_type'      => 'sponsor', 
                            'posts_per_page' => -1,
                        )
                    );
                ?>
            <div class="d-flex flex-wrap justify-content-center gap-3" style="width: 100%;">
                <?php while($sponsor->have_posts()): $sponsor->the_post() ?>
                    <div class="">
                        <img src="<?php the_field('sponsor_img'); ?>" alt="Billede af sponsorater" style="width: auto; height: 60px;">
                    </div>
                <?php endwhile ?>
            </div>

                
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-10 d-flex justify-content-end" style="margin-bottom: 1rem;">
        <a href=""><button>⭡ OP</button></a>
        </div>
    </div>

<?php endwhile; ?>

<?php wp_reset_postdata() ?>



<?php get_footer(); ?>