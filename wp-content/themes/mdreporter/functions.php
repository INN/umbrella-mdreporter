<?php

/**
 * Register a custom homepage layout
 *
 * @see "homepages/layouts/your_homepage_layout.php"
 */
function register_custom_homepage_layout() {
	include_once __DIR__ . '/homepages/layouts/mreporter.php';
	register_homepage_layout('MarylandReporter');
}
add_action( 'init', 'register_custom_homepage_layout', 0 );


/**
 * Include compiled style.css
 */
function child_stylesheet() {
	wp_dequeue_style( 'largo-child-styles' );

	$suffix = ( LARGO_DEBUG )? '' : '.min';
	wp_enqueue_style( 'maryland-reporter', get_stylesheet_directory_uri() . '/css/child' . $suffix . '.css' );

}
add_action( 'wp_enqueue_scripts', 'child_stylesheet', 20 );


/**
 * DoubleClick for WordPress setup
 */
function maryland_configure_dfp() {

    global $DoubleClick;

    $DoubleClick->networkCode = "41354743";

    /* breakpoints */
    $DoubleClick->register_breakpoint('phone', array('minWidth'=>0,'maxWidth'=>769));
    $DoubleClick->register_breakpoint('tablet', array('minWidth'=>769,'maxWidth'=>980));
    $DoubleClick->register_breakpoint('desktop', array('minWidth'=>980,'maxWidth'=>9999));

}

add_action('dfw_setup', 'maryland_configure_dfp');