<?php 
/*
Template Name:Nous-Rencontrer 
*/
get_header();
?>
<article class="mb-5" id="nousRencontrer">

     
    <?php if( have_posts() ) {
                     while(have_posts()){
                           the_post();
                           the_content();
                           }
                        } 
                ?>

 <div class="wpcf7 js" id="wpcf7-f436-p1289-o1" lang="fr-FR" dir="ltr">
        <div class="screen-reader-response">
            <p role="status" aria-live="polite" aria-atomic="true"></p>
            <ul></ul>
        </div>
        <form action="/nous-rencontrer2/?preview=true#wpcf7-f436-p1289-o1" method="post" class="wpcf7-form init"
            aria-label="Formulaire de contact" novalidate="novalidate" data-status="init">
            <div style="display: none;">
             
                <input type="hidden" name="_wpcf7" value="436">
                <input type="hidden" name="_wpcf7_version" value="5.7.7">
                <input type="hidden" name="_wpcf7_locale" value="fr_FR">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f436-p1289-o1">
                <input type="hidden" name="_wpcf7_container_post" value="1289">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div> 
            <h2>Nous Contacter </h2>
            <p class="labelContact1"><label> Nom
                    <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required inputContact1"
                            autocomplete="name" aria-required="true" aria-invalid="false" value="" type="text"
                            name="your-name"></span></label> </p>

            <p class="labelContact1"><label> E-mail
                    <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email inputContact1"
                            autocomplete="email" aria-required="true" aria-invalid="false" value="" type="email"
                            name="your-email"></span></label></p>

            <p class="labelContact1"><label>Message
                    <span class="wpcf7-form-control-wrap" data-name="textarea-975">
                        <textarea cols="40" rows="10" id="ContactTextarea"
                            class="wpcf7-form-control wpcf7-textarea inputContact1" aria-invalid="false"
                            name="textarea-975"></textarea></span></label>
                        <img src="http://planty.local/wp-content/uploads/2023/05/Group-16.png" id="flowerBehind" alt="flower" />
                        </p>

            <input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Envoyer"><span
                class="wpcf7-spinner"></span>
            <div class="wpcf7-response-output" aria-hidden="true"></div>
        </form>

    </div> 
</article>
<div class="befortFooter">
    <img src="http://planty.local/wp-content/uploads/2023/05/Mask-group-3.png" alt="Can Energisante">
</div>

<?php get_footer(); ?>