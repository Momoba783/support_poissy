<?php

$martePostsPagesArray = array(
	'select' => 'Select a post/page',
);

$martePostsPagesArgs = array(
	
	// Change these category SLUGS to suit your use.
	'ignore_sticky_posts' => 1,
	'post_type' => array('post', 'page'),
	'orderby' => 'date',
	'posts_per_page' => -1,
	'post_status' => 'publish',
	
);
$martePostsPagesQuery = new WP_Query( $martePostsPagesArgs );
	
if ( $martePostsPagesQuery->have_posts() ) :
							
	while ( $martePostsPagesQuery->have_posts() ) : $martePostsPagesQuery->the_post();
			
		$martePostsPagesId = get_the_ID();
		if(get_the_title() != ''){
				$martePostsPagesTitle = get_the_title();
		}else{
				$martePostsPagesTitle = get_the_ID();
		}
		$martePostsPagesArray[$martePostsPagesId] = $martePostsPagesTitle;
	   
	endwhile; wp_reset_postdata();
							
endif;

$marteYesNo = array(
	'select' => __('Select', 'marte'),
	'yes' => __('Yes', 'marte'),
	'no' => __('No', 'marte'),
);


