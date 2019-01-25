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
 * Template Name: Marte 3.0 - Contact
 *
 * @package marte
 */

get_header();
?>

<div class="form-contato">
<div class="contato"> 
<br>
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
<h1><?php echo esc_html($martecontatoPostTitle); ?></h1>

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
			<br>
	</center>
</div>
<div class="form">
			<?php if( '' != get_theme_mod('business_page_formulario') ): ?>
			<?php echo do_shortcode(get_theme_mod('business_page_formulario')); ?>
			<br>
			<?php endif; ?>	

					
</div>	
</center>
</div>	


<!-- .frontpage-contato-container -->
	<?php endif; ?>
	<?php endif; ?>
</div>



<?php
get_footer();
