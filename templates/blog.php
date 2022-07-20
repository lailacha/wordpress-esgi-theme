<?php
/*
  Template Name: Blog
*/

$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;


$args      = [
	'post_type'      => 'post',
	'posts_per_page' => 6,
	'post_status'    => 'publish',
	'paged'          => $paged,
];
$the_query = new WP_Query( $args );
$result    = $the_query->posts;
?>
<?php get_header(); ?>
    <main>
        <div class="container">
            <div class="row" id="blog">
                <h2 class="blog-title"><?= ucfirst( $post->post_title ) ?>.</h2>
                <div class="col-md-4">
					<?= get_sidebar() ?>
                </div>
                <div class="col-md-6 posts" id="post-list-wrapper">

                    <?php include __DIR__."/../template-parts/post-list.php";?>
                    <div class="post-list-pagination">

		                <?=
		                paginate_links( [
			                // Note : lors de la réalisation du TP, nous n'avions pas défini une base d'url pour les liens de navigation
			                // Or, lors d'un call ajax, l'url utilisée comme base est celle de la page qui reçoit le call, à savoir admin-ajax.php
			                // Donc pour que la pagination se réfère toujours à la page blog, on définit le paramètre base comme suit :
//			'base'    => get_permalink( get_option( 'page_for_posts' ) ) . '%_%',
//			'base'    => '/blog/' . '%_%',
			                // La page 'page_for_posts' est définie dans l'admin WP, dans les réglages de lecture
			                // '%_%' sera remplacé par le format de pagination (par défaut ?page=%#%)
			                // Dans le cas d'un module post-list utilisé dans plusieurs pages, il faudra lui passer un paramètre permettant de construire l'url de base
			                'total'   => $the_query->max_num_pages,
			                'current' => $paged
		                ] );

		                ?>
                    </div>


                </div>






            </div>
        </div>

    </main>
<?php get_footer(); ?>