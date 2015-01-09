<?php
// [bartag foo="foo-value"]
function eif_shortcode( $atts ) {
    $eif_settings = get_option('eif_settings');
	//print_r($eif_settings);
    //add_action('wp_enqueue_scripts','eif_shortcode_script');\
    wp_register_script('eif-shortcode-front-js',EIF__PLUGIN_URL.'lib/js/easy-feed.js',array('jquery'));
    wp_localize_script('eif-shortcode-front-js','eifsettings',get_option('eif_settings'));
    wp_enqueue_script('eif-shortcode-front-js');
    
    wp_enqueue_style('eifstyle',EIF__PLUGIN_URL.'lib/eif_style.css');
  //*******************CONTENT***************
  //print_r($eif_settings['eif_feed_image_sorting']);
  
  $number_of_columns=$eif_settings['eif_feed_column_numbers'];
	if($number_of_columns==1)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-1"';
	}
	else if($number_of_columns==2)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-2"';
	}
	else if($number_of_columns==3)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-3"';
	}
	else if($number_of_columns==4)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-4"';
	}
	else if($number_of_columns==5)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-5"';
	}
	else if($number_of_columns==6)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-6"';
	}
	else if($number_of_columns==7)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-7"';
	}
	else if($number_of_columns==8)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-8"';
	}
	else if($number_of_columns==9)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-9"';
	}
	else if($number_of_columns==10)
	{
	$contentwrapper = '<div id="eif_feed" class="eif eif-col-10"';
	}
	
  if($eif_settings['eif_feed_width_unit'] == 'px') $contentwrapper .= " eif_fixed_width";
  if($eif_settings['eif_feed_height_unit'] == 'px') $contentwrapper .= " eif_fixed_height";
  $contentwrapper .= '" style="width:'.$eif_settings['eif_feed_width'].''.$eif_settings['eif_feed_width_unit'].';';
  $contentwrapper .= 'height:'.$eif_settings['eif_feed_height'].''.$eif_settings['eif_feed_height_unit'].';';
  $contentwrapper .= 'background-color:'.$eif_settings['eif_feed_background_color'].';';
  $contentwrapper .= '"><div id="eif_images" style="padding:'.$eif_settings['eif_feed_image_padding_size'].''.$eif_settings['eif_feed_image_padding_unit'].';"></div></div>';
  
  return $contentwrapper;
}


add_shortcode( 'easyinstagramfeed', 'eif_shortcode' );

//function eif_shortcode_script(){ wp_die();
    // enqueue script for shortcode which display the feed
 //   wp_enqueue_script('eif-shortcode',EIF__PLUGIN_URL.'lib/js/easy-feed.js',array('jquery'));
//}
?>
