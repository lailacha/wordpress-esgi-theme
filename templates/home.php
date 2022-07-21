<?php 
/*

  Template Name: Home
*/
?>
<?php get_header(); ?>

<main>
	<div style="width:900px" class="container-fluid col-md-6 offset-md-1 brand">
		<h2><?php
		if(!is_front_page()){
			echo get_the_title(); 
		}else{
			echo get_theme_mod('title_page'); 
		}
		
	?></h2>
	</div>
	<div class="section1_home">
		<section class="row section-aboutus ">
			<div class="section1_image">
				<img src="<?php echo get_theme_mod('esgi_exam_image_AboutUs'); ?>" alt="aboutus_img" >
			</div>
			<div class="">
				<h2><?php echo get_theme_mod( 'title_text_block');?></h2>
				<p style="width:700px"><?php echo get_theme_mod( 'title1'); ?></p>
				
			</div>
		</section>
		
	</div>
	<div class="section2_home">
		<section class="row section-aboutus2 ">
			
			<div class="section2_image col-md-3 d-none d-md-block">
				<img src="<?php echo get_theme_mod('esgi_exam_image_section2home'); ?>" alt="" class="section2_image" >
			</div>
			<div class="text_part col-md-3 col-sm-7">
				<h3><?php echo get_theme_mod( 'identity_title');?></h3>
				<p> <?php echo get_theme_mod( 'identity');?></p>

				<h3><?php echo get_theme_mod( 'vision_title');?></h3>
				<p> <?php echo get_theme_mod( 'vision');?></p>

				<h3><?php echo get_theme_mod( 'mission_title');?></h3>
				<p> <?php echo get_theme_mod( 'mission');?></p>
			</div>
			
		</section>
	</div>

	<?php
		if(!is_front_page()){
			get_template_part( 'template-parts/teams' );
			get_footer(); 
		}
		
	?>

	
		
</main>

