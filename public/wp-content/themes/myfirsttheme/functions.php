<?php  
// Note: Heavy commenting is for review and practice



// Declare a custom function that pulls in the CSS and JS files for the theme.
// Will be pulled onto the web screen by wp_head() in HTML head tags.
function myFirstTheme_script_enqueue() {
	// Registers style files.
	// wp_register_style( 'style', get_template_directory_uri() . 'style.css');
	wp_register_style( 'myFirstThemeStyle', get_stylsheet_directory_uri() . '/css/myFirstThemeStyle');
	wp_register_script('myFirstThemeJS', get_template_directory_uri() . '/js/myFirstThemeJS');
	// Calls style files, its true path.
	// wp_enqueue_style('style', get_template_directory_uri() . 'style.css');
	wp_enqueue_style( 'myFirstThemeStyle', get_stylsheet_directory_uri() . '/css/myFirstThemeStyle', array(), '1.0', 'all');
	wp_enqueue_script( 'myFirstThemeJS', get_template_directory_uri() . '/css/myFirstThemeStyle'get_template_directory_uri() . '/js/myFirstThemeJS.js', array(), '1.0', true);
}

// Use the identified style and scripts, add it to the theme.
add_action('wp_enqueue_scripts', 'myFirstTheme_script_enqueue');
?>
