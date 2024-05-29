<?php 
add_action( 'admin_init', 'register_myheader_settings' );
function register_myheader_settings() 
{
    register_setting( 'my-own-theme-options-for-header', 'my_favicon_icon' );  
    register_setting( 'my-own-theme-options-for-header', 'logo_image' );
	register_setting( 'my-own-theme-options-for-header', 'sticky_logo_image' );
    register_setting( 'my-own-theme-options-for-header', 'menu_icon' );
    register_setting( 'my-own-theme-options-for-header', 'header_option' );
    register_setting( 'my-own-theme-options-for-header', 'top_header_telephone' );
    register_setting( 'my-own-theme-options-for-header', 'top_header_find_us_text' );
    register_setting( 'my-own-theme-options-for-header', 'top_header_find_us_link' );
}
function header_section_options_page() {
?>

<div class="wrap">
    <h2>Header Section</h2>
    <?php settings_errors(); ?> 
    <form method="post" action="options.php">
        <?php settings_fields( 'my-own-theme-options-for-header' ); ?>
        <?php do_settings_sections( 'my-own-theme-options-for-header' ); ?>
        <?php include('bootstrap_theme_includes.php'); ?>
        <br />
        <div class="row">
            
            <div class="col-md-8">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Header Options</h3>
                    </div>
                    
                    <div class="panel-body">
                        <label style="width: 100%;" for="upload_image">Logo Image</label>
                        <?php echo my_image_uploader('logo_image', 'Upload Image'); ?>
                        <br />
                        <br />
						<label style="width: 100%;" for="upload_image">Sticky Logo Image</label>
                        <?php echo my_image_uploader('sticky_logo_image', 'Upload Image'); ?>
                        <br />
                        <br />
                        <label style="width: 100%;" for="upload_image">Favicon Icon</label>                            
                        <?php echo my_image_uploader('my_favicon_icon', 'Upload Image'); ?>
                        <br />
                        <br />
                        <label for="">Header Option</label>
                        <?php
                            $content = get_option('header_option');
                            $editor_id = 'header_option';
                            wp_editor( $content, $editor_id );
                        ?>
                        <br />
                        <br />
                        <label style="width: 100%;" for="upload_image">Menu Icon</label>                            
                        <?php echo my_image_uploader('menu_icon', 'Menu Icon'); ?>
                    </div>
                </div>
            </div>
            
            <?php include 'option_page_sidebar.php'; ?>
           
        </div>
   
        <?php submit_button(); ?>
        
    </form>
</div>
<?php } 
/*My Theme Option*/
?>
