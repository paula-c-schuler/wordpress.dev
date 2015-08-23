<?php  
// Note: Heavy commenting is for review and practice


// Call the function that registers style sheet.
add_action( 'wp_enqueue_scripts', 'register_plugin_styles' );

// Register style sheet.
function register_plugin_styles() {
	wp_register_style( 'style', get_template_directory_uri . 'style.css');
	wp_register_style( 'myFirstThemeStyle', get_stylesheet_uri() . '/css/myFirstThemeStyle.css');
}



// Declare a custom function that pulls in the CSS file for the WordPress theme.
function myFirstTheme_script_enqueue() {
	// Function calls CSS file name, its true path.
	wp_enqueue_style('style', get_template_directory_uri() . 'style.css');
	wp_enqueue_style( 'myFirstThemeStyle', get_stylesheet_uri() . '/css/myFirstThemeStyle.css');
	wp_enqueue_script( 'myFirstThemeJS', get_template_directory_uri() . '/js/myFirstThemeJS.js', array(), '1.0', 'all');
}

// Use the identified style, add it to the theme.
add_action('wp_enqueue_scripts', 'myFirstTheme_script_enqueue');
?>
