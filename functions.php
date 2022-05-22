<?php
define('EXP_PATH', get_template_directory());
define('EXP_URL', get_template_directory_uri());
function expert_add_assets()
{
    wp_register_style('experts-main-style', EXP_URL. '/assests/css/main.css');
    wp_enqueue_style('experts-main-style');
    if (is_single())
    {
        wp_register_script('expert-main-script', EXP_URL. '/assests/js/main.js', ['jquery'],'1.0.0', true);
        wp_enqueue_script('expert-main-script');
    }

}
function experts_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
	add_theme_support('post-formats', ['gallery', 'video', 'audio']);
}

add_action('wp_enqueue_scripts', 'expert_add_assets');
add_action('after_setup_theme', 'experts_setup');