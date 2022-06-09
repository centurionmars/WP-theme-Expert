<?php
define('EXP_PATH', get_template_directory());
define('EXP_URL', get_template_directory_uri());
function expert_add_assets()
{
    wp_register_style('experts-main-style', EXP_URL. '/assets/css/main.css');
    wp_enqueue_style('experts-main-style');
    if (is_single())
    {
        wp_register_script('expert-main-script', EXP_URL. '/assets/js/main.js', ['jquery'],'1.0.0', true);
        wp_enqueue_script('expert-main-script');
    }

}
function experts_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
	add_theme_support('post-formats', ['gallery', 'video', 'audio']);
	add_filter('show_admin_bar', '__return_false');
}
function menu_item_desc( $item_id, $item ) {
	$menu_item_desc = get_post_meta( $item_id, '_menu_item_desc', true );
	?>
	<div style="clear: both;">
		<span class="description"><?php _e( "Item Description", 'menu-item-desc' ); ?></span><br />
		<input type="hidden" class="nav-menu-id" value="<?php echo $item_id ;?>" />
		<div class="logged-input-holder">
            <label for="menu-item-desc-<?php echo $item_id ;?>"></label><input type="text" name="menu_item_desc[<?php echo $item_id ;?>]" id="menu-item-desc-<?php echo $item_id ;?>" value="<?php echo esc_attr( $menu_item_desc ); ?>" />
		</div>
	</div>
	<?php
}
function save_menu_item_desc( $menu_id, $menu_item_db_id ) {
	if ( isset( $_POST['menu_item_desc'][$menu_item_db_id]  ) ) {
		$sanitized_data = sanitize_text_field( $_POST['menu_item_desc'][$menu_item_db_id] );
		update_post_meta( $menu_item_db_id, '_menu_item_desc', $sanitized_data );
	} else {
		delete_post_meta( $menu_item_db_id, '_menu_item_desc' );
	}
}
function show_menu_item_desc( $title, $item ) {
	if( is_object( $item ) && isset( $item->ID ) ) {
		$menu_item_desc = get_post_meta( $item->ID, '_menu_item_desc', true );
		if ( ! empty( $menu_item_desc ) ) {
			$title .= '<p class="menu-item-desc">' . $menu_item_desc . '</p>';
		}
	}
	return $title;
}
add_filter('nav_menu_item_title'            , 'show_menu_item_desc ', 10, 2 );
add_action('wp_update_nav_menu_item'        , 'save_menu_item_desc ', 10, 2 );
add_action('wp_nav_menu_item_custom_fields' , 'menu_item_desc      ', 10, 2 );
add_action('wp_enqueue_scripts'             , 'expert_add_assets   ');
add_action('after_setup_theme'              , 'experts_setup       ');

include sprintf( "%s/includes/front/function.php", EXP_PATH );
include sprintf( "%s/includes/front/post-types.php", EXP_PATH );
include sprintf( "%s/includes/front/taxonomies.php", EXP_PATH );
include sprintf( "%s/includes/front/menus.php", EXP_PATH );