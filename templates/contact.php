<?php
/*
  Template Name: Contact
*/
?>
<?php get_header(); ?>
    <main>
        <div class="container-fluid page-contact ps-5">
            <h2 class="contact-title"><?= ucfirst( $post->post_title ) ?>.</h2>
            <p class="contact-subtitle">A desire for a big party or a very select congress? Contact us</>
            <div class="row">

                <div id="information-contact">

                    <div class="col-2 location-section">
                        <h4>Location</h4>
                        <p>242 Rue du Faubourg Saint-Antoine</p>
                        <p>75020 Paris FRANCE</p>
                    </div>
                    <div class="col-2 manager-section">
                        <h4>Manager</h4>
                        <p>+33 1 53 31 25 23</p>
                        <p>info@company.com</p>
                    </div>
                    <div class="col-2 ceo-section">
                        <h4>CEO</h4>
                        <p>+33 1 53 31 25 25</p>
                        <p>ceo@company.com</p>
                    </div>

                    <div class="col-9 ">
                        <img class="image-card"
                             src="<?php echo get_theme_mod( 'img_add_contact', get_bloginfo( 'template_url' ) . '/assets/images/10.png' ) ?>"
                             alt="">
                    </div>
                </div>


                <div class="col-12 mt-4">
                    <h3>Write us here</h3>
                    <p>Go! Don’t be shy.</p>
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