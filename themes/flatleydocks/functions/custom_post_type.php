<?php
add_action( 'init', 'create_post_type' );

function create_post_type()
{	
    include 'custom_post_type/latest-news/latest-news.php';   
}
?>