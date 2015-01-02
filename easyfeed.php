<?php

/*
Plugin Name: Easy Instagram Feed
Description: This plugin allows to fetch the instagram feeds in your wordpress site. Just add the shortcode [easyinstagramfeed] in the normal wordpress page inorder to get the feeds.
Version: 0.3
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
    // color picker script
    wp_enqueue_script('eif_color_picker',EIF__PLUGIN_URL.'lib/js/easy-color-picker.js',array('wp-color-picker'));
    wp_enqueue_style('eif_style',EIF__PLUGIN_URL.'lib/eif_style.css');
    wp_enqueue_style( 'wp-color-picker' );
}

function eif_menu_pages(){
    
    
    add_menu_page(__('Easy Instagram Feed','eif'), __('Easy Instagram Feed','eif'), 'manage_options', 'easy-instagram-feed', 'eif_menu_output' );
    //add_submenu_page('my-menu', 'Settings', 'Whatever You Want', 'manage_options', 'my-menu' );
    //add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}

function eif_menu_output () {
     $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'general';
?>

 <h2 class="nav-tab-wrapper">
    <a href="?page=easy-instagram-feed&tab=general" class="nav-tab <?php echo $active_tab == 'general' ? 'nav-tab-active' : ''; ?>"><?php _e('General'); ?></a>
    <a href="?page=easy-instagram-feed&tab=customize" class="nav-tab <?php echo $active_tab == 'customize' ? 'nav-tab-active' : ''; ?>"><?php _e('Customize'); ?></a>
</h2>


<?php if ( $active_tab == 'general' ) { 
    require_once(EIF__PLUGIN_DIR.'lib/optionpanel/general-settings.php');
    echo "<p>Add the shortcode<strong>  [easyinstagramfeed]  </strong> to display instagram feeds</p>";
    echo "<p>In the next update we will provide a feature to select column layout, sorting of photos and number of photos .</p>";
}

if ( $active_tab == 'customize' ) { 
    require_once(EIF__PLUGIN_DIR.'lib/optionpanel/customize.php');
}


}

?>