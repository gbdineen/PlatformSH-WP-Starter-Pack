<?php

/**

 * Template Name: Gallery Temeplate

 *

 */



get_header(); 

	if (have_posts()) : 
		while (have_posts()) : the_post(); 
			the_content(); 
		endwhile; 
	else: 
	endif; 

get_footer(); ?>