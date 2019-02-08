<?php

	if( get_field( "use_link_element" ) == 'utilize' ):
		
		echo '<div id="link_element"><div class="container"><div class="row"><div class="col_12">';
									
		echo '<span class="description">';
		
		echo get_field( "description" );
		
		echo '</span><span class="link"><a href="';
		
		echo get_field( "link_url" );
		
		echo '" target="_blank">';
		
		echo get_field( "link_text" );
		
		echo '</a></span>';
		
		echo '</div></div></div></div>';
		
	endif;

?>