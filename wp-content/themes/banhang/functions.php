<?php
function settup_theme(){
	// Hỗ trợ thubmail
	add_theme_support('post-thumbnails');
	// Remove chiều cao, chiều rộng của hình ảnh trong bài viết
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}
	add_filter('max_srcset_image_width', 'returnOne');
	function returnOne(){
		return 1;
	}
	// Thêm sidebar
	// if (function_exists('register_sidebar')){
	// 	register_sidebar(array(
	// 		'name'=> 'Cột phải',
	// 		'id' => 'sidebar',
	// 		'before_widget' => '<div class="widget">',
	// 		'after_widget'  => "</div></div>\n",
	// 		'before_title'  => '<h3 class="title-w"><span><i class="fa fa-bars"></i>',
	// 		'after_title'   => "</span></h3><div class='content-view'>\n",
	// 	));
	// }
	if (function_exists('register_sidebar')){
		register_sidebar(array(
		'name'=> 'Cột bên',
		'id' => 'sidebar',
	));
	}
	// Thêm menu
	register_nav_menus(
		array(
			'main_nav' => 'Main menu',
			'footer_nav' => 'Footer menu',
		)
	);
	// Hàm get đoạn mô tả bài viết
	function teaser($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'[...]';
		} else {
			$excerpt = implode(" ",$excerpt);
		}
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt.'...';
	}
	// Hàm để tăng lượt xem sử dung trong file single.php
	function setpostview($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	    } else {
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}
	// Hàm hiển thị lượt xem
	function getpostviews($postID){
	    $count_key ='views';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count == ''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	        return "1";
	    }
	    return $count;
	}
	// function tao_shortcode() {
	// 	echo "Xin chào!";
	// 	}
	// 	add_shortcode( 'vidu_shortcode', 'tao_shortcode' );
	// 	add_filter('widget_text', 'tao_shortcode');
	// // add style và scirpt
// 	function add_theme_scripts() {
// 		wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'OwlCarousel2', get_template_directory_uri() . '/libs/OwlCarousel2/assets/owl.carousel.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'OwlCarousel2-theme', get_template_directory_uri() . '/libs/OwlCarousel2/assets/owl.theme.default.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'font-icon', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
// 		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');
// 	  	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.0.min.js', array(), '1.0', true);
// 	  	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true);
// 	  	wp_enqueue_script( 'owl', get_template_directory_uri() . '/libs/OwlCarousel2/owl.carousel.min.js', array(), '1.0', true);
// 	  	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
// 	}
// 	add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
}
add_action('init','settup_theme');
// Register Custom Post Type
function custom() {

	$labels = array(
		'name'                  => 'Hóa đơn',
		'singular_name'         => 'Hóa đơn',
		'menu_name'             => 'Hóa đơn',
		'name_admin_bar'        => 'Hóa đơn',
		'archives'              => 'Item Archives',
		'attributes'            => 'Item Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Tất cả hóa đơn',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Thêm mới',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
		
	);
	$args = array(
		'label'                 => 'Hóa đơn',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'danhmuchoadon' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon' 			=> 'dashicons-clipboard', 
	);
	register_post_type( 'Hóa đơn', $args );

}
add_action( 'init', 'custom', 0 );

// Register Custom Taxonomy
function danhmuchoadon() {

	$labels = array(
		'name'                       => _x( 'Danh mục hóa đơn', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Danh mục hóa đơn', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Danh mục hóa đơn', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'danhmuchoadon', array( 'han' ), $args );

}
add_action( 'init', 'danhmuchoadon', 0 );