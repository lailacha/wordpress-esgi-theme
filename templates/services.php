<?php 
/*
  Template Name: Services
*/
?>
<?php get_header(); ?>
	<main>
		<div class="container-fluid services-page">
			<div class="row">
				<div class="col-md-12">
				<?php get_template_part( 'template-parts/service-card' ); ?> 
		
				</div>
			</div>
			<div class="content row">
				<div class="col-md-5 col-sm-12 m-5">
				<?php the_content(); ?>
				</div>
			</div>
			<div class="row p-0">
				<img src="<?php echo get_theme_mod('esgi_exam_image_dj'); ?>" alt="">
				</div>

		</div>

	</main>
<?php get_footer(); ?>