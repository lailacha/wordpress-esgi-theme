<?php 
/*
  Template Name: Home
*/
?>
<?php get_header(); ?>
<main>
	<div class="container-fluid col-md-6 offset-md-1 brand">
		<h2><?php echo get_the_title(); ?></h2>
	</div>
	<div class="section1_home">
		<section class="row section-aboutus ">
			<div class="section1_image">
				<img src="<?php echo get_theme_mod('esgi_exam_image_AboutUs'); ?>" alt="aboutus_img" >
			</div>
			<div class="">
				<h2>Sky's the limit</h2>
				<p style="width:700px"><?php echo get_theme_mod( 'title_text_block'); ?></p>
			</div>
		</section>
		
	</div>
	<div class="section2_home">
		<section class="row section-aboutus2 ">
			
			<div class="section2_image col-md-3 d-none d-md-block">
				<img src="<?php echo get_theme_mod('esgi_exam_image_section2home'); ?>" alt="" class="section2_image" >
			</div>
			<div class="text_part col-md-3 col-sm-7">
				<h3>Who are we ?</h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.</p>
			</div>
		</section>
	</div>




		<div class="section3_home">
		<section class="row ">
			<?php get_template_part( 'template-parts/teams' ); ?> 
			
		</section>
</main>

<?php get_footer(); ?>