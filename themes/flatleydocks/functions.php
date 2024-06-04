<?php

/* include theme commun codes */
include("functions/theme_commun_code.php");
/* end of include theme commun codes */

/* include theme widget area */
include("functions/theme_widget_areas.php");
/* end of include theme widget area */

/* include the Menu Registration page */
include("functions/register_menus.php");
/* end of include the Menu Registration page */

/* include the option page */
include("functions/theme_option_page.php");
/* end of include the option page */

/* Include the theme's custom functions */
include("functions/theme_custom_functions.php");
/*end of theme's custom functions */

include("functions/theme_scripts.php");
/* end of theme's custom script */

//include("functions/products.php");
/* end of theme's custom script */



/*

function copyright_fix($content){
	
	$needles = ['®'];
	$replace = "<span classs='copyright'>®</span>";
	
	$new_content = str_replace($needles, $replace, $content);
	
	return "";
	//return $new_content;
	
	
}

add_filter( 'symbol_filter', 'copyright_fix', 99, 1);


apply_filters('symbol_filter', $content);




function wpb_hook_javascript_footer() {
    ?>
        <script>
          // your javscript code goes
		  $(function(){
			  
			  //alert();
		  })
        </script>
    <?php
}
add_action('wp_footer', 'wpb_hook_javascript_footer');
*/