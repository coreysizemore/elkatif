<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('secondary_navigation') ):
	
		if ( has_nav_menu( 'secondary_nav' ) ):
		
	    	echo get_template_part( 'navs/nav', 'secondary' );
	    	    	
	    endif;
    
    endif;

	if( get_field('display_call_out_boxes') ):

		get_template_part( 'misc/calloutboxes' );
		
	endif;

	echo '<div class="main ';
	
	echo basename(get_permalink());
	
	echo '">';
	
	if ( function_exists('yoast_breadcrumb') ):
	
		yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');
		
	endif;
	
	echo '<div class="default_editor"><div class="container">';
	
	echo '<div class="row gutters">';
	
	$events = get_field('priority_events','options');
	
	if( $events ):
	
		//shuffle($marketplace);
		
		echo '<div class="col_12">';
									
		foreach( $events as $event ):
			
			$image = $event['event_image'];
			
			echo '<div class="event_item">';
			
			echo '<a href="' . $image['url'] . '" class="fancybox" rel="events" target="_blank">';
			
			echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			echo '</a>';
			
			echo '</div>';
		
		endforeach;
		
		echo '</div>';
		
	endif;
	
	echo '</div>';

	echo '<div class="row gutters"><div class="col_12"><div class="content">';
	
	get_template_part( 'loops/loop', 'page' );

	echo '</div></div>';
	
	echo '</div></div></div>';

	if(is_user_logged_in()):
	
		echo '<div class="edit_button"><span class="edit">';
		
		edit_post_link();
		
		echo '</span></div>';
	
	endif;
	
	echo '</div>';

	get_template_part( 'misc/parallax' );

	if(get_field('appointment_feature')):

		get_template_part( 'sidebars/sidebar' , 'appointment' );
		
	endif;
					
?>