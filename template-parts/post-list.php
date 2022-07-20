<?php
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$page = get_post();
		?>
        <div class="post-item">
            <div class="post-item-image"
                 style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID ) ?? '/uploads/2022/03/cropped-screenshot.png' ?>')">
                <span class="post-item-category"><?= get_category( $page->ID ) ?? "Uncategorized " ?></span>
            </div>
            <div class="post-item-content">
                <div class="post-item-title">
                    <a href="<?= get_permalink( $page->ID ) ?>"><?= $page->post_title ?></a>
                    <p class="post-item-text"><?= substr( strip_tags( $page->post_content ), 0, 120 ); ?></p>
                </div>


            </div>
        </div>
	<?php } ?>
	<?php


} ?>
