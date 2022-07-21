<?php $categories = get_categories();
?>
<?php $tags = get_the_tags( $post->ID ) ?>

<aside class="sidebar">
	<?php dynamic_sidebar( 'zone-1' ); ?>
    <h6>Search</h6>
    <div class="search">
		<?php get_search_form(); ?>
    </div>
    <div class="recent-posts">
        <h6 class="mb-4">Recents posts</h6>
		<?php
		$recent_posts = wp_get_recent_posts( array(
			'numberposts' => 4, // Number of recent posts thumbnails to display
			'post_status' => 'publish' // Show only the published posts
		) ); ?>
		<?php foreach ( $recent_posts as $post_item ) : ?>
            <div class="recent-post mb-4">
				<?php echo get_the_post_thumbnail( $post_item['ID'], 'full' ); ?>

                <div class="recents-post--text">
                    <a href="<?php echo get_permalink( $post_item['ID'] ) ?>">
                        <p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
                    </a>
                    <p class="small-txt">12 may 2019</p>
                </div>

            </div>
		<?php endforeach; ?>
    </div>

    <div class="categories mb-4">

        <h6 class="mb-4">Categories</h6>
        <ul>

			<?php foreach ( $categories as $categorie ) : ?>
                <a href="<?php echo get_category_link( $categorie->term_id ) ?>">
                    <li><?php echo $categorie->name ?></li>
                </a>
			<?php endforeach; ?>
        </ul>

    </div>
    <div class="archives">
        <h6 class="mb-4">Archives</h6>
        <ul>
			<?php wp_get_archives(); ?>
        </ul>
    </div>
	<div class="tags mb-4">
		<h6>
			Tags
		</h6>
		<?php if(($tags)): ?>
		<div class="d-flex mt-4">
						<?php foreach ($tags as $tag) : ?>
					<a class="post-tag" href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?></a>
					
		</div>
		<?php endforeach; endif;
	?>
	</div>

</aside>