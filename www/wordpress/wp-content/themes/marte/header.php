<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marte
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>
	
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.site-header{
			background:rgba(56,11,52,1.0)  url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-size:100% auto;
		}

	<?php endif; ?>	
	</style>

<body <?php body_class(); ?>>
<div id="page" class="site">


<div class="outerContainer">
	
	</div>

	<header id="masthead" class="site-header">
	
        
		
		<div class="responsive-container"> 
		
			<div class="site-branding">
			
			

				<?php
				
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
							echo '<a href="' . esc_url( home_url( '/' ) ) . '"><img src="'. esc_url( $logo[0] ) .'"></a>';
					} else {
							echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
							$marte_description = get_bloginfo( 'description', 'display' );
							if ( $marte_description || is_customize_preview() ){
								echo '<p class="site-description">' . $marte_description . '</p>';
							}
					}			
				
				?>
				
				<span class="menu-button"></span>

			</div><!-- .site-branding -->
			</div>
        
			<nav id="site-navigation" class="main-navigation">
				
				<div class="menu-container">
				
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'depth' => 1,
						'container_class' => 'marte-menu',
					) );
					?>
				
				</div><!-- .menu-container -->

			</nav><!-- #site-navigation -->
		
		
		
	</header><!-- #masthead -->
	
	<?php 

		if( is_front_page() && 'page' == get_option( 'show_on_front' ) ):

		if( 'no' != get_theme_mod('marte_show_slider') ): 
		
		$marteHeaderPostTitle = '';
		$marteHeaderPostDesc = '';
		$marteHeaderPostUrl = '';
		$marteHeaderPostImage = '';
		
		if( 'no' != get_theme_mod('marte_slider_post') && 'select' != get_theme_mod('marte_slider_post') ){
			
			$marteHeaderPostId = get_theme_mod('marte_slider_post');
			
			if( ctype_alnum($marteHeaderPostId) ){

				$marteHeaderPost = get_post( $marteHeaderPostId );
    			$marteHeaderPostTitle = $marteHeaderPost->post_title;
				$marteHeaderPostUrl = get_permalink( $marteHeaderPostId );
				
				if( has_post_thumbnail($marteHeaderPostId) ){
					$marteHeaderPostImage = wp_get_attachment_image_src( get_post_thumbnail_id( $marteHeaderPostId ), 'full' );
					$marteHeaderPostImage = $marteHeaderPostImage[0];
				}
				
			}
			
		}
		
		
		
	?>
	
	<div class="header-container">

		<div class="frontpage-container">
		
			<div class="responsive-container">

				<div class="frontpage-image">
					
					<img src="<?php echo esc_url( get_theme_mod( 'header_destack' ) ); ?>">

					
				</div><!-- .frontpage-image -->
				
				<div class="frontpage-text">

			
     <h1><?php echo esc_html(get_theme_mod('titleheader')); ?></h1>
     <p><em> <?php echo esc_html(get_theme_mod('descheader')); ?> </em></p>
     <p><a href="<?php echo esc_html(get_theme_mod('urlheader')); ?>"><?php echo esc_html(get_theme_mod('infourlheader')); ?></a></p>
 <?php   ?>
 

					
				</div><!-- .frontpage-text -->			
			
			</div>

		</div><!-- .frontpage-container -->

	</div><!-- .header-container -->
	<?php endif; endif; ?>
	<div id="content" class="site-content">
