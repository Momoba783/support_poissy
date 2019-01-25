<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marte
 */

?>

	</div><!-- #content -->
	


	<div class="frontpage-social">
			<?php if( '' != get_theme_mod('business_page_facebook') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_facebook')); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook.svg'; ?>" width="25"></a>
			<?php endif; ?>
			
			<?php if( '' != get_theme_mod('business_page_instagram') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_instagram')); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/instagram.svg'; ?>" width="25"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_gplus') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_gplus')); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/gplus.svg'; ?>" width="25"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_linkedin') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_linkedin')); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.svg'; ?>" width="25"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_tumblr') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_tumblr')); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/tumblr.svg'; ?>" width="25"></a>
			<?php endif; ?>	

			<?php if( '' != get_theme_mod('business_page_youtube') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_youtube')); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/youtube.svg'; ?>" width="25"></a>
			<?php endif; ?>		

			<?php if( '' != get_theme_mod('business_page_twitter') ): ?>
			<a href="<?php echo esc_url(get_theme_mod('business_page_twitter')); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/twitter.svg'; ?>" width="25"></a>
			<?php endif; ?>				
					
		</div><!-- .frontpage-social -->	
	<footer id="colophon" class="site-footer">

		<div class="site-logo">
		
			<?php
			
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
						echo '<a href="' . esc_url(get_site_url()) . '"><img src="'. esc_url( $logo[0] ) .'"></a>';
				} else {
						echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				}			
			
			?>
		    <div class="allrights">
			<p><?php esc_html_e( 'All rights reserved.', 'marte' ); ?><br><?php esc_html_e( 'design by', 'marte' ); ?> <a title="Analista de SEO | Criação de Web Sites" href="https://www.miguelsantiago.com.br/">Miguel Santiago</a></p>
		
		</div>
		
		<div class="footer-widgets">
		
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-left') ){ } else { ?>
			
			
			
			<?php } ?> 
			</div><!-- .footerWidgetContainer -->
			
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-middle') ){ } else { ?>
			

					

			<?php } ?> 			
			</div><!-- .footerWidgetContainer -->
			
			<div class="footerWidgetContainer">
			<?php if ( dynamic_sidebar('footer-right') ){ } else { ?>
			

			<?php } ?> 			
			</div><!-- .footerWidgetContainer -->			
		
		</div><!-- .footer-widgets -->
		
	
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- .outerContainer -->
<?php wp_footer(); ?>

</body>
</html>
