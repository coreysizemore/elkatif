<?php

	$events = get_field('priority_events','options');
	
	if( $events ):
	
		//shuffle($marketplace);
		
		echo '<div class="container"><div class="row"><div class="col_12">';
									
		foreach( $events as $event ):
			
			$image = $event['event_image'];
			
			echo '<div class="event_item">';
			
			echo '<a href="' . $image['url'] . '" class="fancybox" rel="events" target="_blank">';
			
			echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			echo '</a>';
			
			echo '</div>';
		
		endforeach;
		
		echo '</div></div></div>';
		
	endif;

?>