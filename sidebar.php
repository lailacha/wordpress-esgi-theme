
<?php $categories = get_categories();
?>

<aside class="sidebar">
	<?php dynamic_sidebar( 'zone-1' ); ?>
	<div class="recent-posts">
	<h3 class="mb-4">Recents posts</h3>
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 4, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    )); ?>
	<?php foreach( $recent_posts as $post_item ) : ?>
	<div class="recent-post">
	<?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>

		<div class="recents-post--text">
		<a href="<?php echo get_permalink($post_item['ID']) ?>">
		<p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
		</a>
		<p>12 may 2019</p>
		</div>
		
	</div>	
	<?php endforeach; ?>
	</div>

	<div class="categories">

	<h3 class="mb-4">Categories</h3>
	<ul>

	<?php foreach( $categories as $categorie) : ?>
				<a href="<?php echo get_category_link($categorie->term_id) ?>">
		<li><?php echo $categorie->name ?></li>
		</a>
	<?php endforeach; ?>
	</ul>

	</div>
	<div class="archives">
	<h3 class="mb-4">Archives</h3>

	<?php wp_get_archives(); ?>
	</div>

</aside>