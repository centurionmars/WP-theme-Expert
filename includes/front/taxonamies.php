<?php
function register_publisher_taxonamie()
{
	$args =
		[
			'label'        => __('ناشر', 'textdomain'),
			'public'       => true,
			'rewrite'      => true,
			'hierarchical' => false,
		];
	register_taxonomy('publisher', 'games', $args);
}
add_action('init', 'register_publisher_taxonamie');