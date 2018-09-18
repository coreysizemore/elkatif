<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
		Template Name: Page - Calendar
	*/
	
	get_header();
	 
	get_template_part( 'headers/header', 'page' );
	
	get_template_part( 'mains/main', 'calendar' );
	
	get_footer(); 

?>