<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marte
 */

?>


	<div class="entry-content">

<div id="post-nav">
    <?php $prevPost = get_previous_post(true);
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
        <div class="prev">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        </div>
        
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
         
        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
        <div class="next">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
</div>

<div class="nav">
<table width="100%" border="0">
  <tr>
    <td width="50%" valign="top"><div class="prev-link"><?php previous_post_link( '<strong>%link</strong>' ); ?></div> </td>
    <td width="50%" valign="top"><div class="next-link"><?php next_post_link( '<strong>%link</strong>' ); ?></div></td>
  </tr>
</table>
</div>

	</div><!-- .entry-content -->
	
	
