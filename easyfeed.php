<?php

/*
Plugin Name: Easy Instagram Feed
Description: This plugin allows to fetch the instagram feeds in your wordpress site. Just add the shortcode [easyinstagramfeed] in the normal wordpress page inorder to get the feeds.
Version: 0.4
Author: priyanshu.mittal,a.ankit
Author URI: http://webriti.com
License: GPLv2 or later
Text Domain: eif
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

// Make sure we don't expose any info if called directly




define( 'EIF__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'EIF__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

add_action('admin_menu', 'eif_menu_pages');
add_action('admin_enqueue_scripts','eif_plugin_scripts');

//call shortcode file
require_once(EIF__PLUGIN_DIR.'/easyfeed-shortcode.php');

//call default data
require_once(EIF__PLUGIN_DIR.'/easyfeed-default-data.php');

function eif_plugin_scripts($hook){ 
    if($hook!='toplevel_page_easy-instagram-feed'){return;}
    
    // otherwise enqueu all the scripts required
    wp_enqueue_script('eif_insta_admin',EIF__PLUGIN_URL.'lib/js/easy-feed-admin.js',array('jquery'));
	
	// jquery ui tab
	wp_enqueue_script('eif_custom_wp_admin_js',EIF__PLUGIN_URL.'lib/js/my-custom.js',array('jquery','jquery-ui-tabs'));
	wp_register_script( 'wff_custom_wp_admin_js', plugin_dir_url( __FILE__ ) . 'lib/js/my-custom.js',array('jquery','jquery-ui-core','jquery-ui-tabs','wp-color-picker'), false, '1.0.0' );
	wp_enqueue_script ('wff_custom_wp_admin_js');
    // color picker script
    wp_enqueue_script('eif_color_picker',EIF__PLUGIN_URL.'lib/js/easy-color-picker.js',array('jquery','wp-color-picker'));
    wp_enqueue_style('eif_style',EIF__PLUGIN_URL.'lib/eif_style.css');
    wp_enqueue_style( 'wp-color-picker' );
	// jquery ui css
	
	 //wp_enqueue_style( 'jquery-ui-datepicker-style' , '//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css');  
		wp_register_style ('wff_custom_wp_admin_css', plugins_url('lib/wff-admin.css', __FILE__));
        wp_enqueue_style( 'wff_custom_wp_admin_css' );	
	 }
	 
	 

function eif_menu_pages(){
    
    
    add_menu_page(__('Easy Instagram Feed','eif'), __('Easy Instagram Feed','eif'), 'manage_options', 'easy-instagram-feed', 'eif_menu_output' );
    //add_submenu_page('my-menu', 'Settings', 'Whatever You Want', 'manage_options', 'my-menu' );
    //add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}

function eif_menu_output () {
     //$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'general';
?>

  <div class="wrap settings-wrap" id="page-settings">
    <h2>Settings</h2>
    <div id="option-tree-header-wrap">
        <ul id="option-tree-header">
            <li id=""><a href="" target="_blank"></a>
            </li>
            <li id="option-tree-version"><span>Easy Instagram Feed Plugin </span>
            </li>
        </ul>
    </div>
    <div id="option-tree-settings-api">
        <div id="option-tree-sub-header"></div>
        <div class = "ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul >
                <li id="tab_create_setting"><a href="#section_general">General Settings</a>
                </li>
                <li id="tab_import"><a href="#section_design" >Customize</a>
                </li>

            </ul>
            <div id="poststuff" class="metabox-holder">
                <div id="post-body">
                    <div id="post-body-content">
                        <div id="section_general" class = "postbox">
                            <div class="inside">
                                <div id="setting_theme_options_ui_text" class="format-settings">
                                    <div class="format-setting-wrap">
									<p><?php  
											{ 
												require_once(EIF__PLUGIN_DIR.'lib/optionpanel/general-settings.php');
												echo "<p>Add the shortcode<strong>  [easyinstagramfeed]  </strong> to display instagram feeds</p>";
												echo "<p>Stay tuned for further updates.</p>";
											}?><p>
	
									
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="section_design" class = "postbox">
                            <div class="inside">
                                <div id="design_customization_settings" class="format-settings">
                                   
                                    
                                    
                                    
                                        <div class="format-setting-wrap">
                                       
                                          <div class = "format-setting type-textarea has-desc">
                                          
                                          
                                          <div class = "format-setting-inner">
                                              
												</p><?php 
														{ 
														require_once(EIF__PLUGIN_DIR.'lib/optionpanel/customize.php');
														} 
													?><p>
                                              
                                              </div>
                                          
                                          
                                          
                                      </div>
                                        
                                             
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
              
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>

 

<?php 

}

?>