<?php 

	add_theme_support( 'post-thumbnails'); 
	set_post_thumbnail_size( 400, 400 );

	//Post Template depending on category
	//Gets post cat slug and looks for single-[cat slug].php and applies it
	add_filter('single_template', create_function(
		'$the_template',
		'foreach( (array) get_the_category() as $cat ) {
			if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
			return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
		return $the_template;' )
	);