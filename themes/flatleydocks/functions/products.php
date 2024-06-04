<?php 
// Register Custom Post Type Product
function create_product_cpt() {

    $labels = array(
        'name' => _x( 'Products', 'Post Type General Name', 'textdomain' ),
        'singular_name' => _x( 'Product', 'Post Type Singular Name', 'textdomain' ),
        'menu_name' => _x( 'Products', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar' => _x( 'Product', 'Add New on Toolbar', 'textdomain' ),
        'archives' => __( 'Product Archives', 'textdomain' ),
        'attributes' => __( 'Product Attributes', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Product:', 'textdomain' ),
        'all_items' => __( 'All Products', 'textdomain' ),
        'add_new_item' => __( 'Add New Product', 'textdomain' ),
        'add_new' => __( 'Add New', 'textdomain' ),
        'new_item' => __( 'New Product', 'textdomain' ),
        'edit_item' => __( 'Edit Product', 'textdomain' ),
        'update_item' => __( 'Update Product', 'textdomain' ),
        'view_item' => __( 'View Product', 'textdomain' ),
        'view_items' => __( 'View Products', 'textdomain' ),
        'search_items' => __( 'Search Product', 'textdomain' ),
        'not_found' => __( 'Not found', 'textdomain' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
        'featured_image' => __( 'Featured Image', 'textdomain' ),
        'set_featured_image' => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item' => __( 'Insert into Product', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Product', 'textdomain' ),
        'items_list' => __( 'Products list', 'textdomain' ),
        'items_list_navigation' => __( 'Products list navigation', 'textdomain' ),
        'filter_items_list' => __( 'Filter Products list', 'textdomain' ),
    );
    $args = array(
        'label' => __( 'Product', 'textdomain' ),
        'description' => __( '', 'textdomain' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-screenoptions',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'comments', 'page-attributes', 'post-formats', 'custom-fields'),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'exclude_from_search' => true,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );
    register_post_type( 'fd-product', $args );

}
add_action( 'init', 'create_product_cpt', 0 );
?>