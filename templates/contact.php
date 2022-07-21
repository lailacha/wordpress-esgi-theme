<?php
/*
  Template Name: Contact
*/
?>
<?php get_header(); ?>
    <main>
        <div class="container-fluid page-contact ps-5">
            <h2 class="contact-title"><?= get_theme_mod('Titre contact','Contacts' ) ?>.</h2>
            <p class="contact-subtitle"><?= get_theme_mod('Description','A desire for a big big party or a very select congress? Contact us.' ) ?></>
            <div class="row">

                <div id="information-contact">

                    <div class="col-2 location-section">
                        <h4><?= get_theme_mod('Titre Location','Location' ) ?></h4>
                        <p><?= get_theme_mod('Adresse Location','242 Rue du Faubourg Saint-Antoine' ) ?></p>
                        <p><?= get_theme_mod('Ville et Code Postale Location','75020 Paris FRANCE' ) ?></p>
                    </div>
                    <div class="col-2 manager-section">
                        <h4><?= get_theme_mod('Titre Manager','Manager' ) ?></h4>
                        <p><?= get_theme_mod('Telephone Manager','+33 1 53 31 25 23' ) ?></p>
                        <p><?= get_theme_mod('Mail Manager','info@company.com' ) ?></p>
                    </div>
                    <div class="col-2 ceo-section">
                        <h4><?= get_theme_mod('Titre Ceo','Ceo' ) ?></h4>
                        <p><?= get_theme_mod('Telephone Ceo','+33 1 53 31 25 25' ) ?></p>
                        <p><?= get_theme_mod('Mail Ceo','ceo@company.com' ) ?></p>
                    </div>

                    <div class="col-9 ">
                        <img class="image-card"
                             src="<?php echo get_theme_mod( 'Banner Contact', get_bloginfo( 'template_url' ) . '/assets/images/10.png' ) ?>"
                             alt="">
                    </div>
                </div>


                <div class="col-12 mt-4">
                    <h3><?= get_theme_mod('Titre Formulaire','Write us here' ) ?></h3>
                    <p><?= get_theme_mod('Description Formulaire','Write us here' ) ?></p>
                    <div class="contact-form">
                        <form action="" class="form-group col-6">
                            <input type="text" name="subject" id="" placeholder="Subject">
                            <div>
                                <input type="email" name="email" id="" placeholder="Email">
                                <input type="text" name="phone" id="" placeholder="Phone no.">
                            </div>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>

            </div>
        </div>


    </main>
<?php get_footer(); ?>