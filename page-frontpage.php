<?php get_header(); ?>

<!-- Display hello world on the front page -->
<?php while (have_posts()) : the_post(); ?>

<div class="front-overall-1 d-flex align-items-center flex-column" style="padding-bottom: 1rem; height: 100%">
<div>
    <h1>BUSTERS VERDEN</h1>
</div>


<!--Frontpage row 1-->
<div class="front-row-1 col-10 d-flex justify-content-center gap-3" style="height: 100%">

<div style="width: 27%; height: 100%;">
    <!--Competiton box -->
    <!--Konkurrence formular-->
    <div class="box konkurrence-signup" style="margin-bottom: 1rem;">
        <?php echo do_shortcode('[contact-form-7 id="9dd27a2" title="Konkurrence"]'); ?>
    </div>

    <div>
        <div class="box skarntyden-info" style="height: 100%">
            <h2>SKARNTYDEN ESBJERG</h2>
            <img url="Cat2.jpg" alt="PLACEHOLDER"> <!--PLaceholder pic, please replace-->
            <p>I Esbjerg Amatør Teater – Skarntyden laver vi to større forestillinger hvert år. Den ene er en forestilling for børn, der typisk ligger i vinterferien, og den anden er en gratis forestilling i forbindelse med Esbjerg Festuge. Der ind imellem laver har vi også andre aktiviteter
            </p>
            <div class="d-flex justify-content-center">
                <input class="skarntyden-link" type="submit" href="https://eatskarntyden.dk/" value="LÆS MERE">
            </div>
        </div>
    </div>
</div>



<!--Summary middle box-->
<div class="box buster-summary" style="width: 46%; height: 100%">
    <h1>BUSTERS VERDEN</h1>
    <h3>Opført af amatørteateret Skarntyden Esbjerg</h3>
<div>
    <img url="Cat2.jpg" alt="PLACEHOLDER"> <!--PLaceholder pic, please replace-->
</div>
    <ul style="padding: 0px;">
        <li><span class="bold">Instruktør:</span> Thomas Bovlund</li>
        <li><span class="bold">Spilletid:</span> 1 time & 30 min</li>
        <li><span class="bold">Pris:</span> 95 kr.</li>
        <li><span class="bold">Sted:</span> Musikhuset Esbjerg</li>
    </ul>
        <p>Vi har igen et nyt teaterstykke klar til jer i vinterferien 2024! Denne gang er det en skildring af Bjarne Reuters bog “Busters verden” fra 1983 om karakteren Buster Origon Mortensen, der med sin ikoniske og sjove tilgang til livet giver et godt grin og ting til eftertanke. Så hvis i vil sikre jer en oplevelse ud over det sædvanlige, så skal i holde øje med vores side inden længe!⭐️ ”30 tønder torskerogn, rustne søm & skruer, bussemænd i bølgepap, går tur i deres stuer, juleand med gåsehud, vandpistol og vådeskud, pas på for nu cykler BUSTER OREGON MORTENSEN UD!”🤩</p>
</div>


<!--Ticket box-->
<div class="box tickets" style="width: 27%; height: 100%; display: flex; flex-direction: column;">
    <img url="Cat2.jpg" alt="PLACEHOLDER"> <!--PLaceholder pic, please replace-->
    <input class="køb-billet-link" type="submit" href="" value="KØB BILLET"><!--PLaceholder pic, please replace-->
</img>
</div>


</div> <!--front-row-1 slut-->





<!--front-row-2-->



<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

</div>
</div> <!--front-overall-1 slut-->


<?php get_footer(); ?>