<?php /* Template Name: Template Index 

             
               */ 
               get_header(); ?> 
    <main>

        <!-- Section Accueil -->
        <section id="section-welcome">
            <div class="accueil-messages">
                <div>
                    <p class="accueil-slogan">Agissez pour le bien avec Deme</p>
                </div>
                <div>
                    <p class="accueil-sous-slogan">Dans un monde qui a besoin de h&eacute;ros, chaque geste compte. Deme vous offre la possibilit&eacute; d'&ecirc;tre
                        ce h&eacute;ros. D&eacute;couvrez comment vous pouvez changer des vies d&egrave;s aujourd'hui.</p>
                </div>
            </div>
            <div><img src="<?php echo esc_url(get_template_directory_uri()."/assets/accueil.png"); ?>" alt=""></div>
        </section>

        <!-- Section de t&eacute;l&eacute;chargement -->
        <section id="section-download">
            <div class="section-download1">
                <p class="download-message">Avec Deme, vous pouvez aider &agrave; transformer des vies en un simple geste. Ne laissez pas cette opportunit&eacute; passer, t&eacute;l&eacute;chargez l'application d&egrave;s aujourd'hui.</p>
            </div>
            <div class="align-download-button">
                <a href="#"><div class="download-button"><img src="<?php echo esc_url(get_template_directory_uri()."/assets/App Store.png"); ?>" alt="app store logo"></div>
                </a>
                <a href="#"><div class="download-button"><img src="<?php echo esc_url(get_template_directory_uri()."/assets/play.png"); ?>" alt="play store logo"></div></a>
            </div>
        </section>

        <!-- Section features -->
        <section id="section-feature">
            <div class="feature-messages">
                <div class="feature">
                    <div class="ellipse1"></div>
                    <p class="feature-message">Deme, une application qui vous permet de d&eacute;couvrir des organisations humanitaires engag&eacute;es</p>
                </div>
                <div class="feature">
                    <div class="ellipse2"></div>
                    <p class="feature-message">Solliciter des dons pour des causes qui vous tiennent &agrave; c&oelig;ur</p>
                </div>
                <div class="feature">
                    <div class="ellipse3"></div>
                    <p class="feature-message">Faire des dons en toute simplicit&eacute; et en toute confiance. </p>
                </div>
                <div class="feature">
                    <div class="ellipse4"></div>
                    <p class="feature-message">Et ce n'est que le d&eacute;but, car Deme regorge de fonctionnalit&eacute;s inspirantes &agrave; explorer.</p>
                </div>
            </div>
            <div><img src="<?php echo esc_url(get_template_directory_uri()."/assets/features.png"); ?>" alt=""></div>
        </section>


        <!-- Section contact -->
        <section id="section-contact">
            <div><p class="contact-us-text">Contactez-nous</p></div>
            <div class="contact-us">
                    <input type="text" placeholder="Nom complet">
                    <input type="email" placeholder="Email">
                    <textarea cols="30" rows="10" placeholder="Que voulez-vous nous partag&eacute; ?"></textarea>
                    <input type="submit" value="Envoyer" class="submit-button">
            </div>
        </section>

    </main>
    

               <?php
              // get_sidebar();
               get_footer(); 
               ?>
               