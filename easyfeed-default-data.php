<?php $eif_settings = array();

$eif_settings = array(
    'eif_user_id' => '',
    'eif_access_token' => '1591885187.44a5744.385971946cc341fa9f84967c9ba1b9db',
    'eif_feed_width' => '100',
    'eif_feed_width_unit' => '%',
    'eif_feed_height' => '100',
    'eif_feed_height_unit' => '%',
    'eif_feed_background_color' => '#fff',
    );


// add the default settings value to the databsae
add_option('eif_settings',$eif_settings);
?>