<?php

include_once get_template_directory() . '/homepages/homepage-class.php';

class MarylandReporter extends Homepage {
	function __construct($options=array()) {
		$defaults = array(
			'name' => __('Maryland Reporter', 'marylandeporter'),
			'description' => __('Custom Homepage Layout for Maryland Reporter', 'marylandreporter'),
			'template' => get_stylesheet_directory() . '/homepages/templates/mreporter-template.php',
			'assets' => array(
				array(
					'marylandreporter',
					get_stylesheet_directory_uri() . '/homepages/assets/css/mreporter.min.css',
					array()
				)
			),
			'rightRail' 		=> true,
			'prominenceTerms' 	=> array(
				array(
					'name' 			=> __( 'Homepage Featured', 'largo' ),
					'description' 	=> __( 'If you are using the Newspaper or Carousel optional homepage layout, add this label to posts to display them in the featured area on the homepage.', 'largo' ),
					'slug' 			=> 'homepage-featured'
				)
			)
		);
		$options = array_merge($defaults, $options);
		parent::__construct($options);
	}
}
