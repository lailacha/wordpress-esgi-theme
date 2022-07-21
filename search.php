<?php

get_header();
global $query_string;

$query = get_search_query();
wp_parse_str( $query_string, $search_query );
$the_query = new WP_Query( $search_query );


?>


<main>
    <div class="container">
        <div class="row" id="results">
            <h2 class="title-h2">Search results for: <span id="query"><?= $query ?></span></h2>

            <div id="container-result">
				<?php
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$article = get_post(); ?>
                    <article class="result">
                        <a href="<?= get_permalink( $article->ID ) ?>" alt="<?= $article->post_title ?>">
                            <h2><?= $article->post_title ?></h2></a>
                        <span><?= get_category( $article->ID ) ?? "Uncategorized " ?>
                            ,<?= date_i18n( 'F j, Y', get_post_timestamp( $article ) ) ?></span>
                        <p><?= substr( strip_tags( $article->post_content ), 0, 120 ); ?></p>
                    </article>
                    <article class="result">
                        <a href="<?= get_permalink( $article->ID ) ?>" alt="<?= $article->post_title ?>">
                            <h2><?= $article->post_title ?></h2></a>
                        <span><?= get_category( $article->ID ) ?? "Uncategorized " ?>
                            ,<?= date_i18n( 'F j, Y', get_post_timestamp( $article ) ) ?></span>
                        <p><?= substr( strip_tags( $article->post_content ), 0, 120 ); ?></p>
                    </article>
                    <article class="result">
                        <a href="<?= get_permalink( $article->ID ) ?>" alt="<?= $article->post_title ?>">
                            <h2><?= $article->post_title ?></h2></a>
                        <span><?= get_category( $article->ID ) ?? "Uncategorized " ?>
                            ,<?= date_i18n( 'F j, Y', get_post_timestamp( $article ) ) ?></span>
                        <p><?= substr( strip_tags( $article->post_content ), 0, 120 ); ?></p>
                    </article>
                    <article class="result">
                        <a href="<?= get_permalink( $article->ID ) ?>" alt="<?= $article->post_title ?>">
                            <h2><?= $article->post_title ?></h2></a>
                        <span><?= get_category( $article->ID ) ?? "Uncategorized " ?>
                            ,<?= date_i18n( 'F j, Y', get_post_timestamp( $article ) ) ?></span>
                        <p><?= substr( strip_tags( $article->post_content ), 0, 120 ); ?></p>
                    </article>
				<?php } ?>


            </div>

        </div>
    </div>
</main>
<?php get_footer(); ?>
