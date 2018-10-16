<?php

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

?>