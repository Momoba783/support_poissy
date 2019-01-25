<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/templatude-hierarchy/
 *
 * Template Name: Marte 3.0 - Home
 *
 * @package marte
 */

get_header();
?>

<?php if( 'page' == get_option( 'show_on_front' ) ): ?>


	<div class="frontpage-welcome-container">
	

<center>
<div class="title_"><h1>Portfolio</h1></div>

       <div class="container">
		
			<section class="main">
			
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">				
 <?php
				
				if( '' != get_theme_mod('marte_portfolio_one') && 'select' != get_theme_mod('marte_portfolio_one') ):
				
				$martePortfolioOneTitle = '';
				$martePortfolioOneDesc = '';
				$martePortfolioOneUrl = '';
				$martePortfolioOneImage = '';			
				
				$martePortfolioOneId = get_theme_mod('marte_portfolio_one');
				
				if( ctype_alnum($martePortfolioOneId) ){

					$martePortfolioOne = get_post( $martePortfolioOneId );
				
					$martePortfolioOneTitle = $martePortfolioOne->post_title;
					$martePortfolioOneDesc = $martePortfolioOne->post_excerpt;
					$martePortfolioOneUrl = get_permalink( $martePortfolioOneId );
					
					if( has_post_thumbnail($martePortfolioOneId) ){
						$martePortfolioOneImage = wp_get_attachment_image_src( get_post_thumbnail_id( $martePortfolioOneId ), 'full' );
						$martePortfolioOneImage = $martePortfolioOneImage[0];
					}				
					
				}			
				
			?>
			
			

				<div class="circle-portfolio">
					
					<?php 
							
						if( '' != $martePortfolioOneImage ){
							echo '<a href="' . esc_url($martePortfolioOneUrl) . '"><img src="' . esc_url($martePortfolioOneImage) . '" /></a>';
						} 
							
					?>				
					
                </div>
		
			
			
			<?php endif; ?>						</div>
					</li>
					<li>
						<div class="ch-item ch-img-1">
			<?php
				
				if( '' != get_theme_mod('marte_portfolio_two') && 'select' != get_theme_mod('marte_portfolio_two') ):
				
				$martePortfolioTwoTitle = '';
				$martePortfolioTwoDesc = '';
				$martePortfolioTwoUrl = '';
				$martePortfolioTwoImage = '';			
				
				$martePortfolioTwoId = get_theme_mod('marte_portfolio_two');
				
				if( ctype_alnum($martePortfolioTwoId) ){

					$martePortfolioTwo = get_post( $martePortfolioTwoId );
				
					$martePortfolioTwoTitle = $martePortfolioTwo->post_title;
					$martePortfolioTwoDesc = $martePortfolioTwo->post_excerpt;
					$martePortfolioTwoUrl = get_permalink( $martePortfolioTwoId );
					
					if( has_post_thumbnail($martePortfolioTwoId) ){
						$martePortfolioTwoImage = wp_get_attachment_image_src( get_post_thumbnail_id( $martePortfolioTwoId ), 'full' );
						$martePortfolioTwoImage = $martePortfolioTwoImage[0];
					}				
					
				}			
				
			?>
				<div class="circle-portfolio">
					
					<?php 
							
						if( '' != $martePortfolioTwoImage ){
							echo '<a href="' . esc_url($martePortfolioTwoUrl) . '"><img src="' . esc_url($martePortfolioTwoImage) . '" /><a>';
						} 
							
					?>				
					

	
			</div>
			<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-1">
			<?php
				
				if( '' != get_theme_mod('marte_portfolio_three') && 'select' != get_theme_mod('marte_portfolio_three') ):
				
				$martePortfolioThreeTitle = '';
				$martePortfolioThreeDesc = '';
				$martePortfolioThreeUrl = '';
				$martePortfolioThreeImage = '';			
				
				$martePortfolioThreeId = get_theme_mod('marte_portfolio_three');
				
				if( ctype_alnum($martePortfolioThreeId) ){

					$martePortfolioThree = get_post( $martePortfolioThreeId );
				
					$martePortfolioThreeTitle = $martePortfolioThree->post_title;
					$martePortfolioThreeDesc = $martePortfolioThree->post_excerpt;
					$martePortfolioThreeUrl = get_permalink( $martePortfolioThreeId );
					
					if( has_post_thumbnail($martePortfolioThreeId) ){
						$martePortfolioThreeImage = wp_get_attachment_image_src( get_post_thumbnail_id( $martePortfolioThreeId ), 'full' );
						$martePortfolioThreeImage = $martePortfolioThreeImage[0];
					}				
					
				}			
				
			?>

				<div class="circle-portfolio">
					
					<?php 
							
						if( '' != $martePortfolioThreeImage ){
							echo '<a href="' . esc_url($martePortfolioThreeUrl) . '"><img src="' . esc_url($martePortfolioThreeImage) . '" /></a>';
						} 
							
					?>				
					
				</div>
				
					
			
			<?php endif; ?>		
					</li>
						<li>
						<div class="ch-item ch-img-1">
						<?php
				
				if( '' != get_theme_mod('marte_portfolio_four') && 'select' != get_theme_mod('marte_portfolio_four') ):
				
				$martePortfolioFourTitle = '';
				$martePortfolioFourDesc = '';
				$martePortfolioFourUrl = '';
				$martePortfolioFourImage = '';			
				
				$martePortfolioFourId = get_theme_mod('marte_portfolio_four');
				
				if( ctype_alnum($martePortfolioFourId) ){

					$martePortfolioFour = get_post( $martePortfolioFourId );
				
					$martePortfolioFourTitle = $martePortfolioFour->post_title;
					$martePortfolioFourDesc = $martePortfolioFour->post_excerpt;
					$martePortfolioFourUrl = get_permalink( $martePortfolioFourId );
					
					if( has_post_thumbnail($martePortfolioFourId) ){
						$martePortfolioFourImage = wp_get_attachment_image_src( get_post_thumbnail_id( $martePortfolioFourId ), 'full' );
						$martePortfolioFourImage = $martePortfolioFourImage[0];
					}				
					
				}			
				
			?>

				<div class="circle-portfolio">
					
					<?php 
							
						if( '' != $martePortfolioFourImage ){
							echo '<a href="' . esc_url($martePortfolioFourUrl) . '"><img src="' . esc_url($martePortfolioFourImage) . '" /></a>';
						} 
							
					?>				
					
				</div>
				
				
			
			<?php endif; ?>		
	
									</div>
					</li>
				
		
				</ul>
				
			</section>
        </div>

	<?php 
			
			if( 'no' != get_theme_mod('marte_show_welcome') ): 
			
			$marteWelcomePostTitle = '';
			$marteWelcomePostImage = '';
			$conteudo = '';
			
			if( 'no' != get_theme_mod('marte_welcome_post') && 'select' != get_theme_mod('marte_welcome_post') ){
				
				$marteWelcomePostId = get_theme_mod('marte_welcome_post');
				
				if( ctype_alnum($marteWelcomePostId) ){

					$marteWelcomePost = get_post( $marteWelcomePostId );
				
					$marteWelcomePostTitle = $marteWelcomePost->post_title;

				}
				if( has_post_thumbnail($marteWelcomePostId) ){
					$marteWelcomeImage = wp_get_attachment_image_src( get_post_thumbnail_id( $marteWelcomePostId ), 'full' );
					$marteWelcomeImage = $marteWelcomeImage[0];
				}
				
			}
	?>

<br><br>
</center>
<br><br>

						
					</div>	



	</div><!-- .frontpage-welcome-container -->
	<?php endif; ?>


	<?php

		if( 'no' != get_theme_mod('marte_show_services') ):
		
	?>
	
		<div class="team">
        <h1><?php if( '' != get_theme_mod('business_page_teamtitle') ): ?>
		     <?php echo esc_html(get_theme_mod('business_page_teamtitle')); ?>
		    <?php endif; ?></h1>
        </div>


	<div class="team-grid">

			<?php
				
				if( '' != get_theme_mod('marte_products_one') && 'select' != get_theme_mod('marte_products_one') ):
				
				$marteProductOneTitle = '';
				$marteProductOneDesc = '';
				$marteProductOneUrl = '';
				$marteProductOneImage = '';			
				
				$marteProductOneId = get_theme_mod('marte_products_one');
				
				if( ctype_alnum($marteProductOneId) ){

					$marteProductOne = get_post( $marteProductOneId );
				
					$marteProductOneTitle = $marteProductOne->post_title;
					$marteProductOneDesc = $marteProductOne->post_excerpt;
					$marteProductOneUrl = get_permalink( $marteProductOneId );
					
					if( has_post_thumbnail($marteProductOneId) ){
						$marteProductOneImage = wp_get_attachment_image_src( get_post_thumbnail_id( $marteProductOneId ), 'full' );
						$marteProductOneImage = $marteProductOneImage[0];
					}				
					
				}			
				
			?>
			
			
			<div class="item-team">
			
				<div class="circle">
					<center>
					<?php 
							
						if( '' != $marteProductOneImage ){
							echo '<a href="' . esc_url($marteProductOneUrl) . '"><img src="' . esc_url($marteProductOneImage) . '" /></a>';
						} 
							
					?>	</center>			
					
				</div>
				

					<div class="text-team-link"><h3><center><a href="<?php echo esc_url($marteProductOneUrl); ?>"><?php echo esc_html($marteProductOneTitle); ?></a></center></h3></div>
					<div class="text-team">
					<?php	$post = get_post($marteProductOneId);
                   echo apply_filters('the_content', $post->post_content); ?>
						
				
				
				</div>		
			
			</div>
			<?php endif; ?>
			
			<?php
				
				if( '' != get_theme_mod('marte_products_two') && 'select' != get_theme_mod('marte_products_two') ):
				
				$marteProductTwoTitle = '';
				$marteProductTwoDesc = '';
				$marteProductTwoUrl = '';
				$marteProductTwoImage = '';			
				
				$marteProductTwoId = get_theme_mod('marte_products_two');
				
				if( ctype_alnum($marteProductTwoId) ){

					$marteProductTwo = get_post( $marteProductTwoId );
				
					$marteProductTwoTitle = $marteProductTwo->post_title;
					$marteProductTwoDesc = $marteProductTwo->post_excerpt;
					$marteProductTwoUrl = get_permalink( $marteProductTwoId );
					
					if( has_post_thumbnail($marteProductTwoId) ){
						$marteProductTwoImage = wp_get_attachment_image_src( get_post_thumbnail_id( $marteProductTwoId ), 'full' );
						$marteProductTwoImage = $marteProductTwoImage[0];
					}				
					
				}			
				
			?>
			<div class="item-team">
			
				<div class="circle">
					<center>
					<?php 
							
						if( '' != $marteProductTwoImage ){
							echo '<a href="' . esc_url($marteProductTwoUrl) . '"><img src="' . esc_url($marteProductTwoImage) . '" /><a>';
						} 
							
					?>	</center>			
					
				</div>
				
					<div class="text-team-link"><h3><center><a href="<?php echo esc_url($marteProductTwoUrl); ?>"><?php echo esc_html($marteProductTwoTitle); ?></a></center></h3></div>
					<div class="text-team">
                 	<?php	$post = get_post($marteProductTwoId);
                    echo apply_filters('the_content', $post->post_content); ?>	
					</div>	
				

			</div>
			<?php endif; ?>

			<?php
				
				if( '' != get_theme_mod('marte_products_three') && 'select' != get_theme_mod('marte_products_three') ):
				
				$marteProductThreeTitle = '';
				$marteProductThreeDesc = '';
				$marteProductThreeUrl = '';
				$marteProductThreeImage = '';			
				
				$marteProductThreeId = get_theme_mod('marte_products_three');
				
				if( ctype_alnum($marteProductThreeId) ){

					$marteProductThree = get_post( $marteProductThreeId );
				
					$marteProductThreeTitle = $marteProductThree->post_title;
					$marteProductThreeDesc = $marteProductThree->post_excerpt;
					$marteProductThreeUrl = get_permalink( $marteProductThreeId );
					
					if( has_post_thumbnail($marteProductThreeId) ){
						$marteProductThreeImage = wp_get_attachment_image_src( get_post_thumbnail_id( $marteProductThreeId ), 'full' );
						$marteProductThreeImage = $marteProductThreeImage[0];
					}				
					
				}			
				
			?>
			<div class="item-team">
			
				<div class="circle">
					
					<center><?php 
							
						if( '' != $marteProductThreeImage ){
							echo '<a href="' . esc_url($marteProductThreeUrl) . '"><img src="' . esc_url($marteProductThreeImage) . '" /></a>';
						} 
							
					?>				
						</center>
				</div>
				

					<div class="text-team-link"><h3><center><a href="<?php echo esc_url($marteProductThreeUrl); ?>"><?php echo esc_html($marteProductThreeTitle); ?></a></center></h3></div>
					<div class="text-team">
                     <?php	$post = get_post($marteProductThreeId);
                    echo apply_filters('the_content', $post->post_content); ?>		
                    <br><br></div>	
				

			</div>	
			<?php endif; ?>		
	</div>


	<?php endif; ?>

<div class="form-contato">
<div class="contato"> 
<?php if( 'page' == get_option( 'show_on_front' ) ): ?>


	<?php 
			
	if( 'no' != get_theme_mod('marte_show_contato') ): 
			
			$martecontatoPostTitle = '';
			$martecontatoPostImage = '';
			$martecontatoform = '';
			$business_page_formulario = '';
			$conteudo = '';
			
			
			
if( '' != get_theme_mod('marte_contato_post') && 'select' != get_theme_mod('marte_contato_post') ){
				
				$martecontatoPostId = get_theme_mod('marte_contato_post');
				
				if( ctype_alnum($martecontatoPostId) ){

					$martecontatoPost = get_post( $martecontatoPostId );
				
					$martecontatoPostTitle = $martecontatoPost->post_title;
					

				}
				if( has_post_thumbnail($martecontatoPostId) ){
					$martecontatoImage = wp_get_attachment_image_src( get_post_thumbnail_id( $martecontatoPostId ), 'full' );
					$martecontatoImage = $martecontatoImage[0];
				}
				
			}
			
			
			
	?>


<center>
    <div>
<h1><?php if( '' != get_theme_mod('business_page_formulariotitle') ): ?>
		    <br> <?php echo esc_html(get_theme_mod('business_page_formulariotitle')); ?>
		    <?php endif; ?> </h1>
	</div>

<div class="texto-telefone">
    <center><?php if( '' != get_theme_mod('business_page_formulariotelefone') ): ?>
		<img src="<?php echo get_template_directory_uri() . '/assets/images/tel.png'; ?>"><br> Tel: <?php echo esc_html(get_theme_mod('business_page_formulariotelefone')); ?>
			<?php endif; ?>
			<?php if( '' != get_theme_mod('business_page_formulariorua') ): ?>
		    <br> <?php echo esc_html(get_theme_mod('business_page_formulariorua')); ?>
			<?php endif; ?>
			<?php if( '' != get_theme_mod('business_page_formulariocep') ): ?>
		    <br> <?php echo esc_html(get_theme_mod('business_page_formulariocep')); ?>
			<?php endif; ?>
			<?php if( '' != get_theme_mod('business_page_formulariobairro') ): ?>
		    - <?php echo esc_html(get_theme_mod('business_page_formulariobairro')); ?>
			<?php endif; ?>
			<?php if( '' != get_theme_mod('business_page_formulariocidade') ): ?>
		    <br> <?php echo esc_html(get_theme_mod('business_page_formulariocidade')); ?>
			<?php endif; ?>
			<?php if( '' != get_theme_mod('business_page_formularioestado') ): ?>
		    - <?php echo esc_html(get_theme_mod('business_page_formularioestado')); ?>
			<?php endif; ?>
	</center>
</div>
<div class="form">
			<?php if( '' != get_theme_mod('business_page_formulario') ): ?>
			<?php echo do_shortcode(get_theme_mod('business_page_formulario')); ?>
			<?php endif; ?>	
</div>	
</center>
	

<div class="contato" ></div>
</div>
<!-- .frontpage-contato-container -->
	<?php endif; ?>
	<?php endif; ?>
</div>
<?php else : ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>

<?php endif; ?>

<?php
get_footer();
