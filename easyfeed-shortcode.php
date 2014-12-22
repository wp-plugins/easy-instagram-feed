<?php
// [bartag foo="foo-value"]
function eif_shortcode( $atts ) {

    //add_action('wp_enqueue_scripts','eif_shortcode_script');\
    wp_register_script('eif-shortcode-front-js',EIF__PLUGIN_URL.'lib/js/easy-feed.js',array('jquery'));
    wp_localize_script('eif-shortcode-front-js','eifsettings',get_option('eif_settings'));
    wp_enqueue_script('eif-shortcode-front-js');
    
    wp_enqueue_style('eifstyle',EIF__PLUGIN_URL.'lib/eif_style.css');
  //*******************CONTENT***************
  $contentwrapper='<div id="eif_feed" class="eif eif-col-4">';
  $contentwrapper.='</div>';
  
  return $contentwrapper;
}
add_shortcode( 'easyinstagramfeed', 'eif_shortcode' );

//function eif_shortcode_script(){ wp_die();
    // enqueue script for shortcode which display the feed
 //   wp_enqueue_script('eif-shortcode',EIF__PLUGIN_URL.'lib/js/easy-feed.js',array('jquery'));
//}
?>