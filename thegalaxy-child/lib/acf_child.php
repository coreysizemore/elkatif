<?php
	
	/*
		Call Parent Default Styles
	*/

	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' => 'Priority Events',
			'menu_title' => 'Priority Events',
			'menu_slug' => 'priority-events',
			'capability' => 'edit_posts',
			'parent_slug' => '',
			'position' => false,
			'icon_url' => false,
			'redirect' => false
		));
	
	}
	
?>