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

	if( get_field('default_editor')):
	
		echo '<div class="default_editor"><div class="container"><div class="row gutters">';
	
		if( get_field('sidebar_selection') == 'right' ):
	
			echo '<div class="col_9"><div class="content">';
	
			get_template_part( 'loops/loop', 'page' );

			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;

			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;

			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;

			echo '</div></div><div class="col_3">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			echo '</div>';
		
		endif;
	
		if( get_field('sidebar_selection') == 'none' ):
		
			echo '<div class="col_12"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
												
			$newsletter = get_field('newsletter');
								
			if( $newsletter ):
				
				echo '<div class="newsletter_wrapper">';
											
				foreach( $newsletter as $letter ):
						
					$image = $letter['newsletter_image'];
					
					echo '<div class="newsletter_item">';
					
					echo '<a href="';
					
					echo $letter['newsletter_link'];
					
					echo '" target="_blank">';
					
					echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
					
					echo '</a><h3>';
					
					echo $letter['newsletter_title'];

					echo '</h3></div>';
																				
				endforeach;
				
				echo '</div>';
											
			endif;
			
			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;
			
			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;
		
			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
		
			echo '</div></div>';
		
		endif;
		
		if( get_field('sidebar_selection') == 'left' ):
		
			echo '<div class="col_3">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			echo '</div><div class="col_9"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
		
			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;
			
			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;
		
			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
			
			echo '</div></div>';
		
		endif;
		
		echo '</div></div></div>';
	
	endif;
	
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