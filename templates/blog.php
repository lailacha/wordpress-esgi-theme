<?php
/*
  Template Name: Blog
*/
?>
<?php get_header(); ?>
    <main>
        <div class="container">
            <h2><?= ucfirst( $post->post_title ) ?>.</h2>
            <div class="row">
                <div class="col-md-4">
                    <?= get_sidebar()?>
                </div>

                <div class="col-md-6 single-post">
                    aedsqdqs
                </div>

            </div>
        </div>

    </main>
<?php get_footer(); ?>