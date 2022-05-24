<?php
add_action('after_setup_theme', 'experts_setup_nav_menu');
function experts_setup_nav_menu()
{
	register_nav_menu('top_bar', 'menu for theme nav menu');
}