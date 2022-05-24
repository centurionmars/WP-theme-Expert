<?php
function register_game_post_type()
{
	$labels =
		[
			'name'                  => _x('بازی ها', 'Post type general name', 'textdomain'),
			'singular_name'         => _x('بازی', 'Post type singular name', 'textdomain'),
			'menu_name'             => _x('بازی ها', 'Admin Menu text', 'textdomain'),
			'name_admin_bar'        => _x('بازی های من', 'Add New on Toolbar', 'textdomain'),
			'add_new'               => __('اضافه کردن جدید', 'textdomain'),
			'add_new_item'          => __('اضافه کردن بازی جدید', 'textdomain'),
			'new_item'              => __('بازی جدید', 'textdomain'),
			'edit_item'             => __('ویرایش بازی', 'textdomain'),
			'view_item'             => __('نمایش بازی', 'textdomain'),
			'all_items'             => __('همه بازی ها', 'textdomain'),
			'search_items'          => __('جستجوی بازی ها', 'textdomain'),
			'parent_item_colon'     => __('منبع بازی ها:', 'textdomain'),
			'not_found'             => __('بازی ها پیدا نشد.', 'textdomain'),
			'not_found_in_trash'    => __('بازی در زباله دان پیدا نشد.', 'textdomain'),
			'featured_image'        => _x('تصویر پوشش بازی', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
			'set_featured_image'    => _x('تنظیم تصویر جلد بازی', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
			'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
			'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
			'archives'              => _x('Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
			'insert_into_item'      => _x('Insert into games', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
			'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
			'filter_items_list'     => _x('Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
			'items_list_navigation' => _x('Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
			'items_list'            => _x('Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'text domain'),
		];
	$args =
		[
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => 'dashicons-games',
			'query_var'          => true,
			'rewrite'            => [ 'slug' => 'games' ],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 3,
			'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ],

		];
	register_post_type('games', $args);
}
add_action('init', 'register_game_post_type');