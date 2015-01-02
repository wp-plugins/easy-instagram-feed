<?php 

if(isset($_POST['submit'])){
    $eif_settings = array();
    $eif_settings = get_option('eif_settings');
    // update feeds section configuration settings.
    
    $eif_settings['eif_feed_width'] = $_POST['eif_feed_width'];
    $eif_settings['eif_feed_width_unit'] = $_POST['eif_feed_width_unit'];
    $eif_settings['eif_feed_height'] = $_POST['eif_feed_height'];
    $eif_settings['eif_feed_height_unit'] = $_POST['eif_feed_height_unit'];
    $eif_settings['eif_feed_background_color'] = $_POST['eif_feed_background_color'];
    
    //wp_die(print_r($eif_settings['eif_feed_background_color']));
       
        // update options
        update_option('eif_settings',$eif_settings);
        

}?>
<form  name="eif_form" method="post"><?php $eif_settings = get_option('eif_settings');  //wp_die(print_r(get_option('eif_settings'))); ?>
<h3>Customize Feed Area</h3>

<table class="form-table">
        <tr valign="top">
        <th scope="row"><label>Width of feed area:</label></th>
            <td>
                <input type="text" id="eif_feed_width"  name="eif_feed_width" value="<?php esc_attr_e($eif_settings['eif_feed_width']); ?>" size="5" />
                <select name="eif_feed_width_unit">
                    <option value="px" <?php if($eif_settings['eif_feed_width_unit'] == "px") echo 'selected="selected"' ?> ><?php _e('px'); ?></option>
                    <option value="%" <?php if($eif_settings['eif_feed_width_unit'] == "%") echo 'selected="selected"' ?> ><?php _e('%'); ?></option>
                </select>
            </td>
        </tr>
         
        <tr valign="top">
        <th scope="row"><label>Height of feed area:</label></th>
            <td>
                <input type="text" id="eif_feed_height"  name="eif_feed_height" value="<?php esc_attr_e($eif_settings['eif_feed_height']); ?>" size="5" />
                <select name="eif_feed_height_unit">
                    <option value="px" <?php if($eif_settings['eif_feed_height_unit'] == "px") echo 'selected="selected"' ?> ><?php _e('px'); ?></option>
                    <option value="%" <?php if($eif_settings['eif_feed_height_unit'] == "%") echo 'selected="selected"' ?> ><?php _e('%'); ?></option>
                </select>
            </td>
        </tr>
        
        <tr valign="top">
        <th scope="row"><label>Background color of feed section:</label></th>
            <td>
                <input type="text" name="eif_feed_background_color" value="<?php esc_attr_e($eif_settings['eif_feed_background_color']);?>" class="eif-color-field" />
            </td>
        </tr>
       
    </table>
    
 
    <input type="submit" name="submit" value="Submit" class="button button-primary"/>
</form> 
