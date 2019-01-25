<?php get_header(); ?>

<!-- cette ligne va boucler tant qu'il y a des articles dans notre site-->
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

<!--cette ligne va afficher le titre de notre page et le lien qui amène vers le titre-->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!--Affiche le corps (content) de l'article dans un bloc div -->
<div class="container-fluid">
    <?php the_content(); ?>
</div>

<!-- FIN de ma boucle avec ajout du message dans le cas où il n'y a rien a afficher-->
<?php endwhile; else: ?>
<p>Contenu non trouvé</p>
<?php endif; ?>

<?php get_footer(); ?>

