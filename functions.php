<?php

// logique du thème

// support d'un logo custom
add_theme_support( 'custom-logo' );

// support de thumbnails
add_theme_support( 'post-thumbnails' );

// support de widgets
add_theme_support( 'widgets' );

// Définir les emplacements de menu

function register_menu() {
	register_nav_menus( array(
		'primary_menu' => __( 'Primary Menu', 'text_domain' ),
		'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
	) );
}

add_action( 'after_setup_theme', 'register_menu', 0 );


// Incorporer la feuille de style principale
function esgi_add_theme_css_and_js() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js' );

	// Injection d'une variable dans le js
	$variables = [
		'ajaxURL' => admin_url( 'admin-ajax.php' )
	];
	wp_localize_script( 'main-js', 'esgi', $variables );
}

add_action( 'wp_enqueue_scripts', 'esgi_add_theme_css_and_js', 0 );


function esgi_customize_register( $wp_customize ) {


	$wp_customize->add_section( 'esgi_services'
		, [
			'title'    => 'Gestion des services',
			'priority' => 4
		] );


	$wp_customize->add_setting( 'esgi_services_photo_1'
		, [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw'
		] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'esgi_services_photo_1', [
		'label'    => 'Photo 1',
		'section'  => 'esgi_services',
		'settings' => 'esgi_services_photo_1',
		'priority' => 1
	] ) );

	$wp_customize->add_setting( 'esgi_services_photo_2'
		, [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw'
		] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'esgi_services_photo_2', [
		'label'    => 'Photo 2',
		'section'  => 'esgi_services',
		'settings' => 'esgi_services_photo_2',
		'priority' => 2
	] ) );

	$wp_customize->add_setting( 'esgi_services_photo_3'
		, [
			'type'              => 'theme_mod',
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw'
		] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'esgi_services_photo_3', [
		'label'    => 'Photo 3',
		'section'  => 'esgi_services',
		'settings' => 'esgi_services_photo_3',
		'priority' => 3
	] ) );


	$wp_customize->add_section( 'esgi_footer'
		, [
			'title'    => 'Gestion du footer',
			'priority' => 4
		] );

	$wp_customize->add_setting( 'esgi_footer_first_contact',
		[
			'default'   => 'Manager',
			'transport' => 'refresh'
		] );

	$wp_customize->add_control( 'esgi_footer_first_contact',
		[
			'type'     => 'text',
			'section'  => 'esgi_footer',
			'label'    => 'Nom du premier contact',
			'settings' => 'esgi_footer_first_contact',
			'default'  => 'Test',
		] );

	$wp_customize->add_setting( 'esgi_footer_first_contact_email',
		[
			'default'   => 'info@esgi.com',
			'transport' => 'refresh'
		] );

	$wp_customize->add_control( 'esgi_footer_first_contact_email',
		[
			'type'     => 'email',
			'section'  => 'esgi_footer',
			'label'    => 'Email du premier contact',
			'settings' => 'esgi_footer_first_contact_email'
		] );

	$wp_customize->add_control( 'esgi_footer_first_contact_phone',
		[
			'type'     => 'text',
			'section'  => 'esgi_footer',
			'label'    => 'Téléphone du premier contact',
			'settings' => 'esgi_footer_first_contact_phone'
		] );

		$wp_customize->add_setting( 'esgi_footer_first_contact_phone',
		[
			'default'   => '+33 1 53 31 25 25',
			'transport' => 'refresh'
		] );

	$wp_customize->add_setting( 'esgi_footer_second_contact',
		[
			'default'   => 'CEO',
			'transport' => 'refresh'
		] );


	$wp_customize->add_control( 'esgi_footer_second_contact',
		[
			'type'     => 'text',
			'section'  => 'esgi_footer',
			'label'    => 'Nom du deuxième contact',
			'settings' => 'esgi_footer_second_contact'
		] );

	$wp_customize->add_setting( 'esgi_footer_second_contact_email',
		[
			'default'   => 'ceo@company.com',
			'transport' => 'refresh'
		] );

	$wp_customize->add_control( 'esgi_footer_second_contact_email',
		[
			'type'     => 'email',
			'section'  => 'esgi_footer',
			'label'    => 'Email du deuxième contact',
			'settings' => 'esgi_footer_second_contact_email'
		] );

	$wp_customize->add_setting( 'esgi_footer_second_contact_phone',
		[
			'default'   => '+33 1 53 31 25 25',
			'transport' => 'refresh'
		] );

	$wp_customize->add_control( 'esgi_footer_second_contact_phone',
		[
			'type'     => 'text',
			'section'  => 'esgi_footer',
			'label'    => 'Téléphone du deuxième contact',
			'settings' => 'esgi_footer_second_contact_phone'
		] );


	$wp_customize->add_section( 'esgi_exam_images', [
		'title'    => 'Gestion des images',
		'priority' => 2,
	] );

	$wp_customize->add_setting( 'esgi_exam_image_dj', [
		'type'              => 'theme_mod',
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
	'esgi_exam_image_dj', [
		'label' => 'Photo du DJ',
		'section' => 'esgi_exam_images',
		'settings' => 'esgi_exam_image_dj',
	]));
	$wp_customize->add_section('esgi_exam_images', [
		'title' => 'Gestion des images',
		'priority' => 3,
	]);

	$wp_customize->add_setting('esgi_exam_image_dj', [
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
	'esgi_exam_image_dj', [
		'label' => 'Photo du DJ',
		'section' => 'esgi_exam_images',
		'settings' => 'esgi_exam_image_dj',
	]));
	$wp_customize->add_setting('esgi_exam_image_AboutUs', [
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
	'esgi_exam_image_AboutUs', [
		'label' => 'Photo About us',
		'section' => 'esgi_exam_images',
		'settings' => 'esgi_exam_image_AboutUs',
	]));
	$wp_customize->add_setting('esgi_exam_image_section2home', [
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
	'esgi_exam_image_section2home', [
		'label' => 'Photo section 2 home',
		'section' => 'esgi_exam_images',
		'settings' => 'esgi_exam_image_section2home',
	]));
	$wp_customize->add_setting('membre1', [
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
	'membre1', [
		'label' => 'membre1',
		'section' => 'esgi_exam_images',
		'settings' => 'membre1',
	]));	

	
	$wp_customize->add_setting('membre3', [
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
	'membre3', [
		'label' => 'Membre 3',
		'section' => 'esgi_exam_images',
		'settings' => 'membre3',
	]));
	
	$wp_customize->add_setting('membre4', [
		'type' => 'theme_mod',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
	'membre4', [
		'label' => 'Membre 4',
		'section' => 'esgi_exam_images',
		'settings' => 'membre4',
	]));
	
   

	$wp_customize->add_section( 'esgi_custom', [
		'title'    => 'Personnalisation du thème',
		'priority' => 1
	] );

	$wp_customize->add_setting( 'main_color', [
		'type'              => 'theme_mod',
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'default'           => '#3F51B5',
		'sanitize_callback' => 'sanitize_hex_color',
	] );

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'main_color',
			[
				'label'    => __( 'Couleur principale', 'ESGI' ),
				'section'  => 'esgi_custom',
				'settings' => 'main_color',
			] ) );


	$wp_customize->add_setting( 'has_sidebar', [
		'type'              => 'theme_mod',
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'default'           => false,
		'sanitize_callback' => 'esgi_sanitize_checkbox',
	] );

	$wp_customize->add_control( 'has_sidebar', [
		'type'        => 'checkbox',
		'section'     => 'esgi_custom', // Add a default or your own section
		'label'       => __( 'Afficher la sidebar' ),
		'description' => __( 'Affiche la barre latérale sur les pages d\'article.' ),
	] );

	$wp_customize->add_setting( 'is_dark', [
		'type'              => 'theme_mod',
		'transport'         => 'refresh',
		'capability'        => 'edit_theme_options',
		'default'           => false,
		'sanitize_callback' => 'esgi_sanitize_checkbox',
	] );

	$wp_customize->add_control( 'is_dark', [
		'type'        => 'checkbox',
		'section'     => 'esgi_custom', // Add a default or your own section
		'label'       => __( 'Thème sombre' ),
		'description' => __( 'Activer la version sombre du thème.' ),
	] );

	$wp_customize->add_panel( 'text_blocks', array(
        'priority'       => 10,
        'theme_supports' => '',
        'title'          => __( 'Gestion des textes', 'theme_name' ),
        'description'    => __( 'Set editable text for certain content.', 'theme_name' ),
    ) );
    // Add section.
    $wp_customize->add_section( 'custom_title_text' , array(
        'title'    => __('Custom Text','theme-name'),
        'panel'    => 'text_blocks',
        'priority' => 10
    ) );
	$wp_customize->add_setting( 'title_page', array(
		'default'           => __( 'Default text', 'theme-name' ),
		'sanitize_callback' => 'sanitize_text'
   ) );
   // Add control
   $wp_customize->add_control( new WP_Customize_Control(
	   $wp_customize,
	   'title_page',
		   array(
			   'label'    => __( 'Title page', 'theme_name' ),
			   'section'  => 'custom_title_text',
			   'settings' => 'title_page',
			   'type'     => 'text'
		   )
	   )
   ); 
    // Add setting
    $wp_customize->add_setting( 'title_text_block', array(
         'default'           => __( 'Default text', 'theme-name' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'custom_title_text',
            array(
                'label'    => __( 'Custom Text', 'theme_name' ),
                'section'  => 'custom_title_text',
                'settings' => 'title_text_block',
                'type'     => 'text'
            )
        )
    );
	
    // Add setting
     $wp_customize->add_setting( 'title1', array(
         'default'           => __( 'Default text', 'theme-name' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'title1',
            array(
                'label'    => __( 'Title 1', 'theme_name' ),
                'section'  => 'custom_title_text',
                'settings' => 'title1',
                'type'     => 'text'
            )
        )
    ); 
	$wp_customize->add_setting( 'identity_title', array(
		'default'           => __( 'Default text', 'theme-name' ),
		'sanitize_callback' => 'sanitize_text'
   ) );
   // Add control
   $wp_customize->add_control( new WP_Customize_Control(
	   $wp_customize,
	   'identity_title',
		   array(
			   'label'    => __( 'Identity title', 'theme_name' ),
			   'section'  => 'custom_title_text',
			   'settings' => 'identity_title',
			   'type'     => 'text'
		   )
	   )
   );
   $wp_customize->add_setting( 'identity', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'identity',
	   array(
		   'label'    => __( 'Identity', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'identity',
		   'type'     => 'text'
	   )
   )
); 
$wp_customize->add_setting( 'vision_title', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'vision_title',
	   array(
		   'label'    => __( 'Vision title', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'vision_title',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'vision', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'vision',
	   array(
		   'label'    => __( 'Vision', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'vision',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'mission_title', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'mission_title',
	   array(
		   'label'    => __( 'mission title', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'mission_title',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'mission', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'mission',
	   array(
		   'label'    => __( 'mission', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'mission',
		   'type'     => 'text'
	   )
   )
); 
$wp_customize->add_setting( 'member_job1', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_job1',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job1',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'member_info1', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_info1',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job1',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'member_job2', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_job2',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job2',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'member_info2', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_info2',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job2',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'member_job3', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_job3',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job3',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'member_info3', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_info3',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job3',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'member_job4', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_job4',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job4',
		   'type'     => 'text'
	   )
   )
);
$wp_customize->add_setting( 'member_info4', array(
	'default'           => __( 'Default text', 'theme-name' ),
	'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
   $wp_customize,
   'member_info4',
	   array(
		   'label'    => __( 'Poste', 'theme_name' ),
		   'section'  => 'custom_title_text',
		   'settings' => 'member_job4',
		   'type'     => 'text'
	   )
   )
);            
	 
	

	


    // Sanitize text
    function sanitize_text( $text ) {
        return sanitize_text_field( $text );
    }
}

add_action( 'customize_register', 'esgi_customize_register' );

function esgi_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}


function css_output() {
	$main_color = get_theme_mod( 'main_color', '#050A3A' );
	echo "<style>
	html{--main-color: $main_color; }
	</style>";
}

add_action( 'wp_head', 'css_output' );


add_filter( 'body_class', 'esgi_body_class' );
function esgi_body_class( $classes ) {
	if ( get_theme_mod( 'is_dark', 0 ) ) {
		$classes[] = 'dark';
	}

	return $classes;
}


// WIDGETS
function esgi_widgets_init() {
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar( [
				'id'            => 'zone-1',
				'name'          => 'Zone des widgets',
				'before_widget' => '<div class = "widget-zone">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3>',
				'after_title'   => '</h3>',
			]
		);
	}
}

add_action( 'widgets_init', 'esgi_widgets_init' );

function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );


add_action( 'customize_register', 'list_partners' );


function list_partners( $wp_customize ): void {

	$wp_customize->add_section( 'Partners', [
		'title'    => 'Template Partners',
		'priority' => 1,
	] );

	$wp_customize->add_setting( 'titre_partners', [
		'default' => 'Our Partners',
	] );


	$wp_customize->add_control( 'titre_partners', [
		'section'  => 'Template Partners',
		'label'    => 'Nouveau titre',
		'priority' => 1,
	] );

	$wp_customize->add_setting( 'logo partner 1', [
		'default' => get_bloginfo( 'template_url' ) . '/assets/images/partner-1.svg',
	] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo partner 1', [
		'section' => 'Partners',
		'label'   => 'logo partner 1'
	] ) );
	$wp_customize->add_setting( 'logo partner 2', [
		'default' => get_bloginfo( 'template_url' ) . '/assets/images/partner-2.svg',
	] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo partner 2', [
		'section' => 'Partners',
		'label'   => 'logo partner 2'
	] ) );


	$wp_customize->add_setting( 'logo partner 3', [
		'default' => get_bloginfo( 'template_url' ) . '/assets/images/partner-3.svg',
	] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo partner 3', [
		'section' => 'Partners',
		'label'   => 'logo partner 3'
	] ) );

	$wp_customize->add_setting( 'logo partner 4', [
		'default' => get_bloginfo( 'template_url' ) . '/assets/images/partner-4.svg',
	] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo partner 4', [
		'section' => 'Partners',
		'label'   => 'logo partner 4'
	] ) );

	$wp_customize->add_setting( 'logo partner 5', [
		'default' => get_bloginfo( 'template_url' ) . '/assets/images/partner-5.svg',
	] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo partner 5', [
		'section' => 'Partners',
		'label'   => 'logo partner 5'
	] ) );

	$wp_customize->add_setting( 'logo partner 6', [
		'default' => get_bloginfo( 'template_url' ) . '/assets/images/partner-6.svg',
	] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo partner 6', [
		'section' => 'Partners',
		'label'   => 'logo partner 6'
	] ) );

}
add_action( 'customize_register', 'contact' );


function contact( $wp_customize ): void {
	$wp_customize->add_section( 'Contact', [
		'title'    => 'Template Contact',
		'priority' => 1,
	] );

	$wp_customize->add_setting( 'Titre contact', [
		'default' => 'Contacts',
	] );

	$wp_customize->add_control( 'Titre contact', [
		'section'  => 'Contact',
		'label'    => 'Nouveau titre',
		'priority' => 1,
	] );

	$wp_customize->add_setting( 'Description', [
		'default' => 'A desire for a big big party or a very select congress? Contact us. ',
	] );

	$wp_customize->add_control( 'Description', [
		'section'  => 'Contact',
		'label'    => 'Description',
		'priority' => 2,
		'type'     => 'text',
	] );

	$wp_customize->add_setting( 'Titre Location', [
		'default' => 'Location',
	] );

	$wp_customize->add_control( 'Titre Location', [
		'section'  => 'Contact',
		'label'    => 'Titre',
		'priority' => 3,
	] );


	$wp_customize->add_setting( 'Adresse Location', [
		'default' => '242 Rue du Faubourg Saint-Antoine',
	] );

	$wp_customize->add_control( 'Adresse Location', [
		'section'  => 'Contact',
		'label'    => 'Adresse location',
		'priority' => 3,
		'type'     => 'text'
	] );


	$wp_customize->add_setting( 'Ville et Code Postale Location', [
		'default' => '75020 Paris FRANCE',
	] );

	$wp_customize->add_control( 'Ville et Code Postale Location', [
		'section'  => 'Contact',
		'label'    => 'Ville et Code Postale location',
		'priority' => 3,
		'type'     => 'text'
	] );


	$wp_customize->add_setting( 'Titre Manager', [
		'default' => 'Manager',
	] );

	$wp_customize->add_control( 'Titre Manager', [
		'section'  => 'Contact',
		'label'    => 'Titre',
		'priority' => 3,
	] );


	$wp_customize->add_setting( 'Telephone Manager', [
		'default' => '+33 1 53 31 25 23',
	] );

	$wp_customize->add_control( 'Telephone Manager', [
		'section'  => 'Contact',
		'label'    => 'Telephone Manager',
		'priority' => 3,
		'type'     => 'text'
	] );


	$wp_customize->add_setting( 'Mail Manager', [
		'default' => 'info@company.com',
	] );

	$wp_customize->add_control( 'Mail Manager', [
		'section'  => 'Contact',
		'label'    => 'Adresse mail Manager',
		'priority' => 3,
		'type'     => 'text'
	] );


	$wp_customize->add_setting( 'Titre Ceo', [
		'default' => 'CEO',
	] );

	$wp_customize->add_control( 'Titre Ceo', [
		'section'  => 'Contact',
		'label'    => 'Titre',
		'priority' => 3,
	] );


	$wp_customize->add_setting( 'Telephone Ceo', [
		'default' => '+33 1 53 31 25 25',
	] );

	$wp_customize->add_control( 'Telephone Ceo', [
		'section'  => 'Contact',
		'label'    => 'Telephone CEO',
		'priority' => 3,
		'type'     => 'text'
	] );


	$wp_customize->add_setting( 'Mail Ceo', [
		'default' => 'ceo@company.com',
	] );

	$wp_customize->add_control( 'Mail Ceo', [
		'section'  => 'Contact',
		'label'    => 'Adresse mail CEO',
		'priority' => 3,
		'type'     => 'text'
	] );


	$wp_customize->add_setting( 'Banner Contact', [
		'default' => get_bloginfo( 'template_url' ) . '/assets/images/10.png',
	] );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'Banner Contact', [
		'section' => 'Contact',
		'label'   => 'Changer Banner Contact',
	] ) );



	$wp_customize->add_setting( 'Titre Formulaire', [
		'default' => 'Write us here',
	] );

	$wp_customize->add_control( 'Titre Formulaire', [
		'section'  => 'Contact',
		'label'    => 'Titre Formulaire',
		'priority' => 3,
		'type'     => 'text'
	] );

	$wp_customize->add_setting( 'Description Formulaire', [
		'default' => 'Go! Don’t be shy.',
	] );

	$wp_customize->add_control( 'Description Formulaire', [
		'section'  => 'Contact',
		'label'    => 'Description Formulaire',
		'priority' => 3,
		'type'     => 'text'
	] );
}
