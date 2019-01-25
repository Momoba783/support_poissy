<?php
/**
 * marte Theme Customizer
 *
 * @package marte
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function marte_customize_register( $wp_customize ) {

	global $martePostsPagesArray, $marteYesNo;

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'marte_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'marte_customize_partial_blogdescription',
		) );
	}
	
	$wp_customize->add_panel( 'marte_general', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'title'      => __('General Settings', 'marte'),
		'active_callback' => '',
	) );

	$wp_customize->get_section( 'title_tagline' )->panel = 'marte_general';
	$wp_customize->get_section( 'static_front_page' )->panel = 'business_page';
	$wp_customize->get_section( 'static_front_page' )->title = __('Select frontpage type', 'marte');
	$wp_customize->get_section( 'static_front_page' )->priority = 9;
	//$wp_customize->remove_section('static_front_page');	
	//$wp_customize->remove_section('header_image');	


	$wp_customize->add_setting( 'marte_show_sliderr',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new marte_Customize_Control_Upgrade(
		$wp_customize,
		'marte_show_sliderr',
		array(
			'label'      => __( 'Show headerr?', 'marte' ),
			'settings'   => 'marte_show_sliderr',
			'priority'   => 10,
			'section'    => 'business_upgrade',
			'choices' => '',
			'input_attrs'  => 'yes',
			'active_callback' => ''			
		)
	) );
	
		
	$wp_customize->add_setting( 'marte_show_sliderrr',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);	
	$wp_customize->add_control( new marte_Customize_Control_Guide(
		$wp_customize,
		'marte_show_sliderrr',
		array(

			'label'      => __( 'Show headerr?', 'marte' ),
			'settings'   => 'marte_show_sliderrr',
			'priority'   => 10,
			'section'    => 'business_usage',
			'choices' => '',
			'input_attrs'  => 'yes',
			'active_callback' => ''				
		)
	) );	
	
	/* Business page panel */
	$wp_customize->add_panel( 'business_page', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'title'      => __('Home/Front Page Settings', 'marte'),
		'active_callback' => '',
	) );

	/* Header options */	
	$wp_customize->add_section( 'business_page_header', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'title'      => __('Header Settings', 'marte'),
		'active_callback' => 'marte_front_page_sections',
		'panel'  => 'business_page',
	) );		
	$wp_customize->add_setting( 'marte_show_slider',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_show_slider',
		array(
			'label'      => __( 'Show header?', 'marte' ),
			'settings'   => 'marte_show_slider',
			'priority'   => 10,
			'section'    => 'business_page_header',
			'type'    => 'select',
			'choices' => $marteYesNo,
		)
	) );	
	
	
    $wp_customize -> add_setting('header_destack', array(
    'type' => 'theme_mod'
  
));

 $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'header_destack', array(
    'label' => __( 'Featured Image', 'marte'),
    'section' => 'business_page_header',
    'settings' => 'header_destack',
))); 
   
	
    $wp_customize->add_setting( 'titleheader',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control( 'titleheader', array(
	  'type' => 'text',
	  'section' => 'business_page_header', // Add a default or your own section
	  'label' => __( 'Title Header', 'marte' ),
	  'description' => __( 'Enter Title Header.', 'marte' ),
	) );
	
	 $wp_customize->add_setting( 'descheader',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	
   $wp_customize->add_control( 'descheader', array(
	  'type' => 'textarea',
	  'section' => 'business_page_header', // Add a default or your own section
	  'label' => __( 'Description', 'marte' ),
	  'description' => __( 'Enter Description.', 'marte' ),
	) );

	$wp_customize->add_setting( 'urlheader',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'urlheader', array(
	  'type' => 'text',
	  'section' => 'business_page_header', // Add a default or your own section
	  'label' => __( 'Url', 'marte' ),
	  'description' => __( 'Enter url.', 'marte' ),
	) );
	
	$wp_customize->add_setting( 'infourlheader',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'infourlheader', array(
	  'type' => 'text',
	  'section' => 'business_page_header', // Add a default or your own section
	  'label' => __( 'Read More', 'marte' ),
	  'description' => __( 'Enter Read More Info .', 'marte' ),
	) );
	

	
   
	

	
	/* Welcome options */	
	$wp_customize->add_section( 'business_page_welcome', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'title'      => __('Portfolio', 'marte'),
		'active_callback' => 'marte_front_page_sections',
		'panel'  => 'business_page',
	) );		
	$wp_customize->add_setting( 'marte_show_welcome',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_show_welcome',
		array(
			'label'      => __( 'Show Portfolio?', 'marte' ),
			'description' => __( 'Do you want to change the title of the Portfolio page? And even include up to 30 items? Get the Premium theme.', 'marte' ),
			'settings'   => 'marte_show_welcome',
			'priority'   => 10,
			'section'    => 'business_page_welcome',
			'type'    => 'select',
			'choices' => $marteYesNo,
		)
	) );
	$wp_customize->add_setting( 'marte_welcome_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_welcome_post',
		array(
			'label'      => __( 'Select post', 'marte' ),
			'description' => __( 'Select a post/page you want to show in portfolio section', 'marte' ),
			'settings'   => 'marte_welcome_post',
			'priority'   => 20,
			'section'    => 'business_page_welcome',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );

	$wp_customize->add_setting( 'marte_portfolio_one',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_portfolio_one',
		array(
			'label'      => __( 'Portfolio 1', 'marte' ),
			'description' => __( 'Select a post/page you want to show in Portfolio section', 'marte' ),
			'settings'   => 'marte_portfolio_one',
			'priority'   => 20,
			'section'    => 'business_page_welcome',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );	
	
		$wp_customize->add_setting( 'marte_portfolio_two',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_portfolio_two',
		array(
			'label'      => __( 'Portfolio 2', 'marte' ),
			'description' => __( 'Select a post/page you want to show in Portfolio section', 'marte' ),
			'settings'   => 'marte_portfolio_two',
			'priority'   => 20,
			'section'    => 'business_page_welcome',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'marte_portfolio_three',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_portfolio_three',
		array(
			'label'      => __( 'Portfolio 3', 'marte' ),
			'description' => __( 'Select a post/page you want to show in Portfolio section', 'marte' ),
			'settings'   => 'marte_portfolio_three',
			'priority'   => 20,
			'section'    => 'business_page_welcome',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );
		$wp_customize->add_setting( 'marte_portfolio_four',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_portfolio_four',
		array(
			'label'      => __( 'Portfolio 4', 'marte' ),
			'description' => __( 'Select a post/page you want to show in Portfolio section', 'marte' ),
			'settings'   => 'marte_portfolio_four',
			'priority'   => 20,
			'section'    => 'business_page_welcome',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );
	/* Products options */
	$wp_customize->add_section( 'business_page_services', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'title'      => __('Team Settings', 'marte'),
		'active_callback' => 'marte_front_page_sections',
		'panel'  => 'business_page',
	) );		
	$wp_customize->add_setting( 'marte_show_services',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_show_services',
		array(
			'label'      => __( 'Show Team?', 'marte' ),
			'description' => __( 'Do you want to change the title of the Team page? And even include up to 30 items? Get the Premium theme.', 'marte' ),
			'settings'   => 'marte_show_services',
			'priority'   => 10,
			'section'    => 'business_page_services',
			'type'    => 'select',
			'choices' => $marteYesNo,
		)
	) );		
	
	$wp_customize->add_setting( 'business_page_teamtitle',
		
array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_teamtitle', array(
	  'type' => 'text',
	  'section' => 'business_page_services', // Add a default or your own section
	  'label' => __( 'Title Team', 'marte' ),
	  'description' => __( 'Enter your title.', 'marte' ),
	) );
	
	$wp_customize->add_setting( 'marte_products_one',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_products_one',
		array(
			'label'      => __( 'Team one', 'marte' ),
			'description' => __( 'Select a post/page you want to show in team section', 'marte' ),
			'settings'   => 'marte_products_one',
			'priority'   => 20,
			'section'    => 'business_page_services',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'marte_products_two',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_products_two',
		array(
			'label'      => __( 'Team two', 'marte' ),
			'description' => __( 'Select a post/page you want to show as team two', 'marte' ),
			'settings'   => 'marte_products_two',
			'priority'   => 30,
			'section'    => 'business_page_services',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );
	$wp_customize->add_setting( 'marte_products_three',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_products_three',
		array(
			'label'      => __( 'Team three', 'marte' ),
			'description' => __( 'Select a post/page you want to show as team three', 'marte' ),
			'settings'   => 'marte_products_three',
			'priority'   => 40,
			'section'    => 'business_page_services',
			'type'    => 'select',
			'choices' => $martePostsPagesArray,
		)
	) );

	$wp_customize->add_section( 'business_page_contato', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'title'      => __('Contact Settings', 'marte'),
		'active_callback' => 'marte_front_page_sections',
		'panel'  => 'business_page',
	) );		
	$wp_customize->add_setting( 'marte_show_contact',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_show_contato',
		array(
			'label'      => __( 'Show quote?', 'marte' ),
			'settings'   => 'marte_show_contato',
			'priority'   => 10,
			'section'    => 'business_page_contato',
			'type'    => 'select',
			'choices' => $marteYesNo,
		)
	) );		
	$wp_customize->add_setting( 'marte_contato_post',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_post_selection',
		) 
	);	
	
	$wp_customize->add_setting( 'business_page_formulariotitle',
		
array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_formulariotitle', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'Title Contact', 'marte' ),
	  'description' => __( 'Enter your contact.', 'marte' ),
	) );

	$wp_customize->add_setting( 'business_page_formulario',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);

	$wp_customize->add_control( 'business_page_formulario', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'Contact Form 7', 'marte' ),
	  'description' => __( 'Enter your Shortcode. Example: [contact-form-7 id="106" title="form1"]', 'marte' ),
	) );
	$wp_customize->add_setting( 'business_page_formulariotelefone',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_formulariotelefone', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'Telephone', 'marte' ),
	  'description' => __( 'Enter your telephone.', 'marte' ),
	) );
		$wp_customize->add_setting( 'business_page_formulariorua',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_formulariorua', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'Street', 'marte' ),
	  'description' => __( 'Enter your adress.', 'marte' ),
	) );
		$wp_customize->add_setting( 'business_page_formulariocep',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_formulariocep', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'Zip code', 'marte' ),
	  'description' => __( 'Enter your zip code.', 'marte' ),
	) );
		$wp_customize->add_setting( 'business_page_formulariobairro',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_formulariobairro', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'Neighborhood', 'marte' ),
	  'description' => __( 'Enter your neighborhood.', 'marte' ),
	) );
	
	$wp_customize->add_setting( 'business_page_formulariocidade',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_formulariocidade', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'City', 'marte' ),
	  'description' => __( 'Enter your city.', 'marte' ),
	) );
		$wp_customize->add_setting( 'business_page_formularioestado',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_formularioestado', array(
	  'type' => 'text',
	  'section' => 'business_page_contato', // Add a default or your own section
	  'label' => __( 'State', 'marte' ),
	  'description' => __( 'Enter your state.', 'marte' ),
	) );


	$wp_customize->add_section( 'business_page_social', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'title'      => __('Social Settings', 'marte'),
		'active_callback' => 'marte_front_page_sections',
		'panel'  => 'business_page',
	) );	
	$wp_customize->add_setting( 'marte_show_social',
		array(
			'default'    => 'select',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'marte_sanitize_yes_no_setting',
		) 
	);	
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'marte_show_social',
		array(
			'label'      => __( 'Show social?', 'marte' ),
			'settings'   => 'marte_show_social',
			'priority'   => 10,
			'section'    => 'business_page_social',
			'type'    => 'select',
			'choices' => $marteYesNo,
		)
	) );
	$wp_customize->add_setting( 'business_page_facebook',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_facebook', array(
	  'type' => 'text',
	  'section' => 'business_page_social', // Add a default or your own section
	  'label' => __( 'Facebook', 'marte' ),
	  'description' => __( 'Enter your facebook url.', 'marte' ),
	) );
	$wp_customize->add_setting( 'business_page_instagram',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_instagram', array(
	  'type' => 'text',
	  'section' => 'business_page_social', // Add a default or your own section
	  'label' => __( 'Instagram', 'marte' ),
	  'description' => __( 'Enter your instagram url.', 'marte' ),
	) );
	$wp_customize->add_setting( 'business_page_gplus',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_gplus', array(
	  'type' => 'text',
	  'section' => 'business_page_social', // Add a default or your own section
	  'label' => __( 'Gplus', 'marte' ),
	  'description' => __( 'Enter your gplus url.', 'marte' ),
	) );
	$wp_customize->add_setting( 'business_page_linkedin',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_linkedin', array(
	  'type' => 'text',
	  'section' => 'business_page_social', // Add a default or your own section
	  'label' => __( 'Linkedin', 'marte' ),
	  'description' => __( 'Enter your linkedin url.', 'marte' ),
	) );
	$wp_customize->add_setting( 'business_page_tumblr',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_tumblr', array(
	  'type' => 'text',
	  'section' => 'business_page_social', // Add a default or your own section
	  'label' => __( 'Tumblr', 'marte' ),
	  'description' => __( 'Enter your tumblr url.', 'marte' ),
	) );
	$wp_customize->add_setting( 'business_page_youtube',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_youtube', array(
	  'type' => 'text',
	  'section' => 'business_page_social', // Add a default or your own section
	  'label' => __( 'Youtube', 'marte' ),
	  'description' => __( 'Enter your youtube url.', 'marte' ),
	) );
	$wp_customize->add_setting( 'business_page_twitter',
		array(
			'default'    => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
		) 
	);
	$wp_customize->add_control( 'business_page_twitter', array(
	  'type' => 'text',
	  'section' => 'business_page_social', // Add a default or your own section
	  'label' => __( 'Twitter', 'marte' ),
	  'description' => __( 'Enter your twitter url.', 'marte' ),
	) );	
	
}
add_action( 'customize_register', 'marte_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function marte_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function marte_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function marte_customize_preview_js() {
	wp_enqueue_script( 'marte-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'marte_customize_preview_js' );

require get_template_directory() . '/inc/marte-variables.php';

function marte_sanitize_yes_no_setting( $value ){
	global $marteYesNo;
    if ( ! array_key_exists( $value, $marteYesNo ) ){
        $value = 'select';
	}
    return $value;	
}

function marte_sanitize_post_selection( $value ){
	global $martePostsPagesArray;
    if ( ! array_key_exists( $value, $martePostsPagesArray ) ){
        $value = 'select';
	}
    return $value;	
}

function marte_front_page_sections(){
	
	$value = false;
	
	if( 'page' == get_option( 'show_on_front' ) ){
		$value = true;
	}
	
	return $value;
	
}

add_action( 'customize_register', 'marte_load_customize_classes', 0 );
function marte_load_customize_classes( $wp_customize ) {
	
	class marte_Customize_Control_Upgrade extends WP_Customize_Control {

		public $type = 'marte-upgrade';
		
		public function enqueue() {

		}

		public function to_json() {
			
			parent::to_json();

			$this->json['link']    = $this->get_link();
			$this->json['value']   = $this->value();
			$this->json['id']      = $this->id;
			$this->json['default'] = $this->default;
			
		}	
		
		public function render_content() {}
		
		public function content_template() { ?>

			<div id="marte-upgrade-container" class="marte-upgrade-container">



			
				
									
			</div>
			
		<?php }	
		
	}
	
	class marte_Customize_Control_Guide extends WP_Customize_Control {

		public $type = 'marte-guide';
		
		public function enqueue() {

		}

		public function to_json() {
			
			parent::to_json();

			$this->json['link']    = $this->get_link();
			$this->json['value']   = $this->value();
			$this->json['id']      = $this->id;
			$this->json['default'] = $this->default;
			
		}	
		
		public function render_content() {}
		
		public function content_template() { ?>

		
		<?php }	
		
	}	

	$wp_customize->register_control_type( 'marte_Customize_Control_Upgrade' );
	$wp_customize->register_control_type( 'marte_Customize_Control_Guide' );
	
	
}