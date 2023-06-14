<?php
/**
 * Template Name:Commander 
 */
get_header();
 ?>
<?php if( have_posts() ) {
                     while(have_posts()){
                           the_post();
                           the_content();
                           }
                        } 
                ?>
<article class="mb-5" id="Commander">
    <div class="formContainer">

        <form action="/precommande/#wpcf7-f640-p12-o1" method="post" aria-label="Formulaire de contact"
            novalidate="novalidate" data-status="init">
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="640">
                <input type="hidden" name="_wpcf7_version" value="5.7.7">
                <input type="hidden" name="_wpcf7_locale" value="fr_FR">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f640-p12-o1">
                <input type="hidden" name="_wpcf7_container_post" value="12">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
            </div>
            <div class="superWrapper">
                <div class="wrapper">
                    <span class="wpcf7-form-control-wrap" data-name="number-432">
                        <input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number  classDisplay"
                            id="fraise" aria-invalid="false" value="" type="number" name="number-432">
                    </span>
                    <img decoding="async"
                        src="http://planty.local/wp-content/uploads/2023/05/jeremy-bezanger-0QgbyZdhX7k-unsplash-1.png"
                        alt="Fraise" class="quantityImgCommande">
                    <h2 class="fraiseTitle">FRAISE</h2>
                    <div class="quantityp">
                        <p class="fraisenumber " id="outputNumber"></p>
                        <div class="d-flex">
                            <button class="btn addFraise">
                                +
                            </button>
                            <button class="btn removeFraise">
                                -
                            </button>
                        </div>
                        <button type="button" class="btnOk" id="confirmFraise">OK</button>
                    </div>

                </div>
                <div class="wrapper">
                    <img src="http://planty.local/wp-content/uploads/2023/05/estudio-bloom-tOitjphtIXU-unsplash-1.png"
                        class="quantityImgCommande" alt="Pamplemousse">
                    <h2 class="pamplemousseTitle">PAMPLE
                        <br>MOUSSE
                    </h2>
                    <span class="wpcf7-form-control-wrap" data-name="number-494">
                        <input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number classDisplay"
                            id="pamplemousse" aria-invalid="false" value="" type="number" name="number-494">
                    </span>
                    <div class="quantityp">
                        <p class="fraisenumber" id="pamplemouseNumber"></p>
                        <div class="d-flex">
                            <button class="btn addPamplemousse" type="button">
                                +
                            </button>
                            <button class="btn removePamplemousse" type="button">
                                -
                            </button>
                        </div>
                        <button class="btnOk" type="button" id="confirmPamplemousse">OK</button>
                    </div>

                </div>
                <div class="wrapper">
                    <span class="wpcf7-form-control-wrap" data-name="number-796">
                        <input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number classDisplay"
                            id="frambroise" aria-invalid="false" value="" type="number" name="number-796">
                    </span>
                    <img decoding="async"
                        src="http://planty.local/wp-content/uploads/2023/05/rodion-kutsaev-4k8xEFW4_3Q-unsplash-1.png"
                        class="quantityImgCommande" alt="frambroise">
                    <h2 class="frambroiseTitle">FRAM
                        <br>BOISE
                    </h2>
                    <div class="quantityp">
                        <p class="fraisenumber" id="framboiseNumber"></p>
                        <div class="d-flex">
                            <button class="btn addFramboise" type="button">
                                +
                            </button>
                            <button class="btn removeFramboise" type="button">
                                -
                            </button>
                        </div>
                        <button class="btnOk" type="button" id="confirmFrambroise">OK</button>
                    </div>

                </div>
                <div class="wrapper">
                    <span class="wpcf7-form-control-wrap" data-name="number-83">
                        <input class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number classDisplay"
                            id="citron" aria-invalid="false" value="" type="number" name="number-83">
                    </span>
                    <img decoding="async"
                        src="http://planty.local/wp-content/uploads/2023/05/estudio-bloom-ezqnxsqUZ80-unsplash-1.png"
                        class="quantityImgCommande" alt="Citron">
                    <h2 class="citronTitle">CITRON</h2>
                    <div class="quantityp">
                        <p class="fraisenumber" id="citronNumber"></p>
                        <div class="d-flex">
                            <button class="btn addCitron" type="button">
                                +
                            </button>
                            <button class="btn removeCitron" type="button">
                                -
                            </button>
                        </div>
                        <button type="button" class="btnOk" id="confirmCitron">OK</button>
                    </div>

                </div>
            </div>
            <hr>
            <div class="flexContainer">
                <div class="firstHalf">
                    <h3>Vos informations</h3>
                    <p>
                        Nom
                        <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name"
                                aria-required="true" aria-invalid="false" value="" type="text" name="your-name"></span>
                    </p>
                    <p>
                        Prénom
                        <span class="wpcf7-form-control-wrap" data-name="text-722"><input size="40"
                                class="wpcf7-form-control wpcf7-text" aria-invalid="false" value="" type="text"
                                name="text-722"></span>
                    </p>
                    <p>
                        Votre e-mail
                        <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40"
                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                autocomplete="email" aria-required="true" aria-invalid="false" value="" type="email"
                                name="your-email"></span>
                    </p>
                </div>
                <div class="secondHalf">
                    <h3>Livraison</h3>
                    <p>
                        Adresse de livraison
                        <span class="wpcf7-form-control-wrap" data-name="text-722"><input size="40"
                                class="wpcf7-form-control wpcf7-text" aria-invalid="false" value="" type="text"
                                name="text-722"></span>
                    </p>
                    <p>
                        Code postal
                        <span class="wpcf7-form-control-wrap" data-name="text-814"><input size="40"
                                class="wpcf7-form-control wpcf7-text" aria-invalid="false" value="" type="text"
                                name="text-814"></span>
                    </p>
                    <p>
                        Ville
                        <span class="wpcf7-form-control-wrap" data-name="text-983"><input size="40"
                                class="wpcf7-form-control wpcf7-text" aria-invalid="false" value="" type="text"
                                name="text-983"></span>
                    </p>
                </div>
            </div>
            <input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit" value="Envoyer"><span
                class="wpcf7-spinner"></span>
            <div class="wpcf7-response-output" aria-hidden="true"></div>
        </form>
    </div>
</article>

<?php get_footer(); ?>