<?php

/*
Plugin Name: Easy Instagram Feed
Description: This plugin allows to fetch the instagram feeds in your wordpress site. Just add the shortcode [easyinstagramfeed] in the normal wordpress page inorder to get the feeds.
Version: 1.5.5
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
	
	 wp_enqueue_style( 'bootstrap-style' , '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');  
		wp_register_style ('wff_custom_wp_admin_css', plugins_url('lib/wff-admin.css', __FILE__));
        wp_enqueue_style( 'wff_custom_wp_admin_css' );	
	 }
	 
	 
	 
	 


function eif_menu_pages(){
    
    
    add_menu_page(__('Easy Instagram Feed','eif'), __('Easy Instagram Feed','eif'), 'manage_options', 'easy-instagram-feed', 'eif_menu_output' );
    //add_submenu_page('my-menu', 'Settings', 'Whatever You Want', 'manage_options', 'my-menu' );
    //add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}



function eif_menu_output () {
     $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'general';
	 
	 if($_POST)
	 {
			$checkone = wp_verify_nonce($_POST['eif_easy_instagram_media_security_check'], 'easy_instagram_media_security_check');
			$checktwo = wp_verify_nonce($_POST['eif_easy_instagram_media_security_check_custom_settings'], 'easy_instagram_media_security_check');
			$checkthree  = wp_verify_nonce($_POST['eif_easy_instagram_media_security_check_custom_css&js'], 'easy_instagram_media_security_check');
			if($checkone == 1 || $checktwo == 1 || $checkthree == 1 )
			{
				
			}
			else
			{
				echo " Sorry given field are not correct";
				exit;
			}
	 }
	 
	 
?>

  <div class="wrap settings-wrap" id="page-settings">
    <h2>Settings</h2>
    <div id="option-tree-header-wrap">
        <ul id="option-tree-header">
            <li id=""><a href="" target="_blank"></a>
            </li>
            <li id="option-tree-version"><span>Instagram Feed Plugin </span>
            </li>
        </ul>
    </div>
    <div id="option-tree-settings-api">
        <div id="option-tree-sub-header"></div>
        <div class = "ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul >
                <li id="tab_create_setting"><a href="#section_general">General Settings</a>
                </li>
                <li id="tab_import"><a href="#section_design" >Design Customization</a>
                </li>
				<li id="tab_custom_css_and_js"><a href="#section_custome_css_and_js">Custom Css and js</a>
				</li>
				<li id="tab_feed_config"><a href="#display_your_feeds">Display Your Feeds</a>
				</li>
				<li id="tab_get_beeta"><a href="#display_get_beeta">Get The Premium Version</a>
				</li>
				<li id="tab_show_love"><a href="#display_show_love">Show some love</a>
				</li>
				<li id="tab_faq_doc"><a href="#display_FAQ_doc">FAQ</a>
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
												
											}?><p><strong>INSTAGRAM EMBED:</strong> If you want to display particular image / video from instagram, than, in that case you don't need to use shortcode. Directly add the photo / video url in the post / page. This will work same as youtube embed, ie, if one paste youtube url than the WordPress page automatically embed the code and you will see the video on the same page. You don't need to paste the instagram embed code provided by the instagram.com, infact, adding the link url will do the same. For example directly use something like this https://instagram.com/p/y9ietTkOrg/  </p><p>
	
									
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
						
						 <div id="section_custome_css_and_js" class = "postbox">
                            <div class="inside">
                                <div id="design_customization_settings" class="format-settings">
                                   
                                    
                                    
                                    
                                        <div class="format-setting-wrap">
                                       
                                          <div class = "format-setting type-textarea has-desc">
                                          
                                          
                                          <div class = "format-setting-inner">
                                              
												</p><?php 
														{ 
														require_once(EIF__PLUGIN_DIR.'lib/optionpanel/custome_css_and_js.php');
														} 
													?><p>
                                              
                                              </div>
                                          
                                          
                                          
                                      </div>
                                        
                                             
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
              
						 <div id="display_your_feeds" class = "postbox" >
                            <div class="inside">
                                <div id="setting_export_settings_file_text" class="format-settings">
                                    <div class="format-setting-wrap">
                                        
                                            <p><?php
											require_once(EIF__PLUGIN_DIR.'lib/optionpanel/display-feeds.php');
											?></p>
                                      

                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
                   <div id="display_get_beeta" class = "postbox" >
                            <div class="inside">
                                <div id="setting_export_settings_file_text" class="format-settings">
                                    <div class="format-setting-wrap">
                                        <h3>Launched Pro Version</h3>
                                            <p>First of all thanks to all who tested the beta version and helping us in adding some of the pro features.</p>
                                            
                                            <h3>What you get in pro version</h3>
                                            <ol>
                                                <li>
                                                    <h4>Video Media Support:</h4>
                                                    <p>In the pro verison you can show video type items in the instagram feed. You can also watch the video directly on your website in the form of lightbox pop up.</p>
                                                </li>
                                                <li>
                                                    <h4>Hashtag Support:</h4>
                                                    <p>Filter your feeds with the help of hashtags. You can also add multiple hashtags. Say if you set adidas and sports as the tags than you will recieves those media items in feed which have these two tags only.  </p>
                                                </li>
                                                <li>
                                                    <h4>Lightbox Support:</h4>
                                                    <p>By default the lightbox is active that if you click on any of the image / video , than you get the nice piece of lighobox fashion overlay. In this overlay window you can watch video, navigate to other images, share the items etc etc. You can also disable it if you dint want to use lightbox.    </p>
                                                </li>
                                                <li>
                                                    <h4>Socialise Feeds:</h4>
                                                    <p>Share the feed items on instagram as well as other social services like facebook, twitter, google plus, linkedin, pinterest, reddit and stumbleupon.</p>
                                                </li>
                                                <li>
                                                    <h4>Configure Caption:</h4>
                                                    <p>Easy control over the media caption. You can hide, style, specify the limit of text to show by default.</p>
                                                </li>
                                                <li>
                                                    <h4>Configure Like and share icon:</h4>
                                                    <p>You can add the like and share icons by selecting the checkbox. You can also change the icon colors.</p>
                                                </li>
												<li>
                                                    <h4>Header Support:</h4>
                                                    <p>Show you instagram profile picture along with the name. You can also change the text color in the header.  </p>
                                                </li>
												
												</ol>
												
												<h3>Pricing</h3>
												<p>The pro version is priced at very reasonable 19 USD and entitles you to receive support and updates for 1 year.</p>
                                                <p>If you need updates and support after one year, then simply renew the license. If not, then you may keep using the plugin.</p>
                                                <p>You may use the plugin on any number of websites you want</p>
                                                <h3>How To Purchase</h3>
                                                <p>If you are interested then you can buy the plugin <a href="http://webriti.com/instagram-feed/" target="_blank">here</a>.
                                                I hope you will also enjoy working with us.
                                                </p>
                                                
                                                <h3>Cheers</h3>
<h3>Priyanshu</h3>
<h3>Co-Founder, Webriti Themes and Plugins<p></p></h3>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
						
						 <div id="display_show_love" class = "postbox" >
                            <div>
                                <div id="setting_export_settings_file_text" class="format-settings">
                                    <div class="format-setting-wrap">
                                        
                                            <p><div class="postbox like-postbox">
                                    <div class="handlediv" ><br></div>
                                    <h3 class="hndle"><span>Show some love</span></h3>
                                    <div >
                                        <div>
                                            <p>Like this plugin? Support us by:</p>
                                            
                                                <a class="buy-button" target="_blank" href="http://webriti.com/instagram-feed/" 14px;"><i class="fa fa-usd"></i>Buy It</a>

                                                <a  class="buy-button gray-btn" target="_blank" href="https://wordpress.org/support/view/plugin-reviews/easy-instagram-feed"><i class="fa fa-star"></i>Rate It</a>
                                                <a class="buy-button blue-btn" target="_blank" href="http://twitter.com/share?url=https%3A%2F%2Fwordpress.org%2Fplugins%2Feasy-instagram-feed%2F&amp;text=Check out this awesome %23WordPress Plugin I'm using, Custom instagram feed by @webriti"><i class="fa fa-twitter"></i>Tweet It</a>
                                            
                                        </div>
                                    </div>
                                </div></p>
                                      

                                    </div>
                                </div>
                                
                                
                                
                            </div>
                        </div>
						
						<div id="display_FAQ_doc" class = "postbox" >
                            <div class="inside">
                                <div id="setting_export_settings_file_text" class="format-settings">
                                    <div class="format-setting-wrap">
                                        <h1>Common Issues</h1>
                                            <br>
                                            
                                           <ul style="padding-left:15px;"> 
                                           <li style="list-style:disc;">
                                                <h3 style="padding-left:0px;">Feeds not displaying</h3>
                                                <p>
    											The heart of this plugin is javascript, so, its a very good chance that the plugin will face javascript conflicts with others themes and plugins.
    											In this case always check for the errors in the console, try deactivate the plugin ony by one and see weither you are still facing the same issue.
    											Sometimes it has seen that the plugin dint work with the theme itself, again, the main issue is of javascript conflict, So in this case try with the others themes like twentyfouteen, twentytwelve etc etc .
    											If nothing works than do let us know about the issue.
    											</p>
    											<p>After taking all measures mentioned above, if you are still facing the issue, than check weither you access token is correct or not by using this link <b>https://api.instagram.com/v1/users/self/feed?access_token=ACCESS-TOKEN</b>.
    											Replace  ACCESS-TOKEN in the url with your access token . If you get the output as "The access_token provided is invalid" than definatelty you are using the wrong access token. Get the correct access token by reauthenticating the plugin as shown in general settings.
    											</p>
											</li>
											
											<li style="list-style:disc;">
                                                <h3 style="padding-left:0px;">How to display instagram feed on post / page?</h3>
                                                <p>
    											After plugin activation Go to "Easy Instagram feed" option panel, configure it and add the shortcode <b>[easyinstagramfeed]</b> in the WordPress Post / Pages.
    											</p>
											</li>
											
											
											
											<li style="list-style:disc;">
                                                <h3 style="padding-left:0px;">What is the minimum requirement to run the shortcode?</h3>
                                                <p>
    											User id and access token are mandatory. Note, you can use single accesstoken for multiple user ids.
    											</p>
											</li>
											
											
											
											<li style="list-style:disc;">
                                                <h3 style="padding-left:0px;">How to display different feeds on different pages.</h3>
                                                <p>
    											Add different shortcodes on different pages ie if you want to show 2 user feeds on different pages than add <b><i>[easyinstagramfeed userid="1591885187"]</b></i> to one page and add <b><i>[easyinstagramfeed userid="1631861081"]</b></i> to another page.
    											</p>
											</li>
											
											
											<li style="list-style:disc;">
                                                <h3 style="padding-left:0px;">How to get user id?</h3>
                                                <p>
    											Go to general settings and get the user from there or use the this third party <a target ="_blank" href="http://jelled.com/instagram/lookup-user-id">tool</a></p>
											</li>
											
											
											
											
											<li style="list-style:disc;">
                                                <h3 style="padding-left:0px;">How to display multiple account feeds on pages?</h3>
                                                <p>
    											I am assuming that you have authorize the app with your instagram account ie you have the access token. Add the shortcode <b><i>[easyinstagramfeed userid="1591885187,1631861081"]</i></b> to wordpress page.
    											</p>
											</li>
											
											<li style="list-style:disc;">
                                                <h3 style="padding-left:0px;">Facing other issues.</h3>
                                                <p>
    											<a target="_blank" href="https://wordpress.org/support/plugin/easy-instagram-feed">click here</a></p>
											</li>
											
                                          </ul>

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

wp_embed_register_handler( 'eif_instagram', '/https?\:\/\/instagram.com\/p\/(.+)/', 'eif_instagram_embed_function' );

function eif_instagram_embed_function( $matches, $attr, $url, $rawattr ) {
 wp_enqueue_script('eif_insta_responcive_iframe',EIF__PLUGIN_URL.'lib/js/res/jquery.responsiveinstagram.js');
    $image_id = str_replace('/','',$matches[1]);

    $embed = sprintf(
            '<iframe src="//instagram.com/p/%1$s/embed/" width="612" height="712" scrolling="no" allowtransparency="true" style="border-radius: 5px; border: 1px solid #d6d6d6;" ></iframe>',
            esc_attr($image_id)
            );
			?>
			<script type="text/javascript">
			jQuery(document).ready( function () {
 jQuery('iframe[src*="instagram.com"]').responsiveInstagram();
});
</script>
<?php

    return apply_filters( 'embed_eif_instagram', $embed, $matches, $attr, $url, $rawattr );
}


add_filter('widget_text', 'do_shortcode');

?>