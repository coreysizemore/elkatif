<?php

	$gallery = get_field('photo_gallery');
						
	if( $gallery ):
		
		echo '<div class="gallery_wrapper">';
									
		foreach( $gallery as $album ):
		
			echo $album['gallery_title'];
			
			$galleryitem = $album['gallery_item'];
		
			foreach( $galleryitem as $item ):
			
				echo '<div class="gallery_item">';
				
				echo '<a href="';
				
				echo $item['gallery_item_link'];
				
				echo '" target="_blank">';
				
				echo $item['gallery_item_title'];
				
				echo '</a>';

				echo '</div>';
			
			endforeach;
																		
		endforeach;
		
		echo '</div>';
									
	endif;

?>