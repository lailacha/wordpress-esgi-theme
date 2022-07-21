<?php $tags = get_the_tags($post->ID);
$categories = get_the_category($post->ID);
$categories = array_values( $categories );
?>
<?php get_header(); ?>

<main id="site-content">
	<div class="mr-4 ml-4 container-fluid post">
		<div class="row">
			<div class="col-md-4 offset-md-1">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-md-6 single-post">
			<?= get_the_post_thumbnail($post->ID) ?>
				<p class="mt-5 fw-bolder txt-main-color">
					<?php  foreach ( array_keys( $categories ) as $key ) {
						echo $categories[ $key ]->name ;
						} 
						echo ' - '.get_the_date()
						?></p>
				<?php the_content() ?>
				<p> </p>
				<div class="row mb-5">
								<?php if(($tags)):
								foreach ($tags as $tag) : ?>
					<a class="post-tag" href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?></a>
				<?php endforeach;
					endif;
				?>
				</div>
	
			<?php if (comments_open()){
				comments_template();
			} ?>
			<?php
			if(get_theme_mod('has_sidebar', 0)){ ?>
				<div class="col-md-2 offset-md-1">
					<?php get_sidebar(); ?>
				</div>
			<?php } ?>
			</div>
		</div>
		

	</div>
</main>

<?php get_footer(); ?>
<!-- 
<div class="col-md-6 offset-md-3">
				<article class="single-post">
					<header>
						<h1 class="post-title"><?php the_title() ?></h1>
						<div class="post-meta">
							<?php 
							$author_id = $post->post_author;
							$author_name = get_the_author_meta('nickname', $author_id);
							?>
							<img src="<?= get_avatar_url($author_id) ?>" alt="<?= $author_name ?>"> 
							<?= $author_name ?>
							<time><?= date_i18n('j F Y', get_post_timestamp($post)) ?></time> 
						</div>
					</header>
					<div class="post-image">
					<?= get_the_post_thumbnail($post->ID) ?>
					</div>
					<div class="post-content">
					<?php the_content() ?>
					</div>
					<footer>
						<?php include('template-parts/social-block.php'); ?>
					</footer>
				</article>
			</div> -->