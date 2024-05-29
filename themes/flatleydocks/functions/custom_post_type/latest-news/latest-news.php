<?php 
register_post_type( 'latest-news',
    array(
    'labels'             => array(
    'name'               => __('Latest News'            		),
    'singular_name'      => __('Latest News'                    ),
    'add_new'            => __('Add Latest News'                ),
    'all_items'          => __('All Latest News'                ),
    'add_new_item'       => __('Add New Latest News'            ),
    'edit_item'          => __('Edit Latest News'               ),
    'new_item'           => __('New Latest News'                ),
    'view_item'          => __('View Latest News'               ),
    'search_items'       => __('Search Latest News'             ),
    'not_found'          => __('No Latest News found'           ),
    'not_found_in_trash' => __('No Latest News found in Trash'  )
    ),
    'public'       => true,
    'has_archive'  => true,
    'menu_icon'    => 'dashicons-admin-page',
    'rewrite'      => array('slug'=>'latest-news'),
    'supports'     => array( 'title','editor','thumbnail'),
    )
);
?>