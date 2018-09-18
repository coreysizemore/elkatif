<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
		Template Name: Page - Photo Gallery
	*/
	
	get_header();
	 
	get_template_part( 'headers/header', 'page' );
	
	get_template_part( 'mains/main', 'gallery' );
	
	get_footer(); 

?>