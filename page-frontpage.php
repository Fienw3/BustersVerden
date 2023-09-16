<?php get_header(); ?>



<!-- Display hello world on the front page -->
<?php while (have_posts()) : the_post(); ?>

<div class="front-overall-1 d-flex align-items-center flex-column" style="padding-bottom: 1rem; height: 100%">
<div class="d-flex col-10 flex-column">

<div class="d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 1rem;">
        <img class="Logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/logo.png" alt="Busters Verden logo" style="height: auto;">
    </div>

    <div class="d-flex justify-content-end" style="margin-bottom: 1rem;">
        <a href="http://busters-verden.local/infopage/"><button>➝ INFO</button></a>
    </div>
</div>


<!--Frontpage row 1-->
<div class="front-row-1 col-10 d-flex justify-content-center gap-3" style="height: 100%">

<div class="outer-box" style="width: 27%; height: 100%;">
    <!--Competiton box -->
    <!--Konkurrence formular-->
    <div class="box konkurrence-signup" style="margin-bottom: 1rem;">
        <?php echo do_shortcode('[contact-form-7 id="9dd27a2" title="Konkurrence"]'); ?>
    </div>

    <div>
        <div class="box skarntyden-info" style="height: 100%">
            <h2>SKARNTYDEN ESBJERG</h2>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/Skarntyden-esbjerg.jpg" alt="Billede af skarntyden esbjergs team" style="height: auto; width: 100%;">
            <p>I Esbjerg Amatør Teater – Skarntyden laver vi to større forestillinger hvert år. Den ene er en forestilling for børn, der typisk ligger i vinterferien, og den anden er en gratis forestilling i forbindelse med Esbjerg Festuge. Der ind imellem laver har vi også andre aktiviteter
            </p>
            <div class="d-flex justify-content-center">
                <a href="https://eatskarntyden.dk/" style="width: 100%">
                <input class="skarntyden-link" type="submit" alt="Knap til skarntyden esbjergs egen side" value="LÆS MERE">
                </a>
            </div>
        </div>
    </div>
</div>

<!--Summary middle box-->
<div class="box inner-box" style="width: 46%; height: 100%">
    <h2>BUSTERS VERDEN</h2>
    <h3>Opført af amatørteateret Skarntyden Esbjerg</h3>
    <div>
    <img src="<?php the_field('busters_verden_forside_billede'); ?>" alt="Et billede af teaterstykket Busters Verden" style="height: auto; width: 100%;">
</div>
    <ul style="padding: 0px;">
        <li><span class="bold">Instruktør:</span> Thomas Bovlund</li>
        <li><span class="bold">Spilletid:</span> 1 time & 30 min</li>
        <li><span class="bold">Pris:</span> 95 kr.</li>
        <li><span class="bold">Sted:</span> Musikhuset Esbjerg</li>
    </ul>
        <p>Vi har igen et nyt teaterstykke klar til jer i vinterferien 2024! Denne gang er det en skildring af Bjarne Reuters bog “Busters verden” fra 1983 om karakteren Buster Origon Mortensen, der med sin ikoniske og sjove tilgang til livet giver et godt grin og ting til eftertanke. Så hvis i vil sikre jer en oplevelse ud over det sædvanlige, så skal i holde øje med vores side inden længe!⭐️ ”30 tønder torskerogn, rustne søm & skruer, bussemænd i bølgepap, går tur i deres stuer, juleand med gåsehud, vandpistol og vådeskud, pas på for nu cykler BUSTER OREGON MORTENSEN UD!”🤩</p>
        <a href="http://busters-verden.local/infopage/" style="width: 100%">
                <input class="info-program-link" type="submit" value="SE PROGRAMMET HER" alt="Knap til program siden" style="width: 100%">
                </a>
    </div>


<!--Ticket box-->
<div class="ticket-box" style="width: 27%; height: 100%; display: flex; flex-direction: column;">
    <a href="https://mhe.dk/program">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/billet-website.png" alt="En knap der tager dig til musikhusets hjemmeside, for at købe biletter" style="height: auto; width: 100%;">
    </a>
</img>
</div>


</div> <!--front-row-1 slut-->





<!--front-row-2-->



<?php endwhile; ?>
<?php wp_reset_postdata(); ?>


</div> <!--front-overall-1 slut-->

<div class="d-flex justify-content-center">
    <div class="col-10 d-flex justify-content-end" style="margin-bottom: 1rem;">
        <a href=""><button>⭡ OP</button></a>
    </div>
</div>

<?php get_footer(); ?>