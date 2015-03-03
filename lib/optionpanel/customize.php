<?php 
if(isset($_POST['rest']))
{
$eif_settings = array();
$eif_settings = array(
    'eif_user_id' => '',
    'eif_access_token' => '1591885187.44a5744.385971946cc341fa9f84967c9ba1b9db',
    'eif_feed_width' => '100',
    'eif_feed_width_unit' => '%',
    'eif_feed_height' => '100',
    'eif_feed_height_unit' => '%',
    'eif_feed_background_color' => '#fff',
	'eif_feed_image_padding_unit'=> 'px',
	'eif_feed_image_padding_size' => '5',
	'eif_feed_column_numbers'=> '4',
	'eif_feed_number_of_images' => '20',
	'eif_feed_image_resolution' => 'low_resolution',
	'eif_feed_image_sorting' => 'newer',
	'eif_feed_show_button_status'=>'no',
	'eif_feed_button_background_color' => '#000000',
	'eif_feed_button_text_color'=> '#fff',
	'eif_feed_follow_button_text' => 'Follow on Instagram',
	'eif_feed_load_more_button_status'=> 'no',
	'eif_feed_load_more_button_back_color'=> '#000000',
	'eif_feed_load_more_button_text_color' => '#fff',
	'eif_feed_load_more_button_text' => 'Load More'
    );


// add the default settings value to the databsae
update_option('eif_settings',$eif_settings);
}


if(isset($_POST['submit2'])){
  
if($_POST['eif_feed_load_more_button_status'])
{
$val = "yes";
}
else
{
$val = "no";
}
if($_POST['eif_feed_show_button_status'])
{
$load_val = "yes";
}
else
{
$load_val = "no";
}
    $eif_settings = array();
    $eif_settings = get_option('eif_settings');
    // update feeds section configuration settings.
    
    $eif_settings['eif_feed_width'] = $_POST['eif_feed_width'];
    $eif_settings['eif_feed_width_unit'] = $_POST['eif_feed_width_unit'];
    $eif_settings['eif_feed_height'] = $_POST['eif_feed_height'];
    $eif_settings['eif_feed_height_unit'] = $_POST['eif_feed_height_unit'];
    $eif_settings['eif_feed_background_color'] = $_POST['eif_feed_background_color'];
	$eif_settings['eif_feed_image_sorting'] = $_POST['eif_feed_image_sorting'];
	$eif_settings['eif_feed_number_of_images'] = $_POST['eif_feed_number_of_images'];
	$eif_settings['eif_feed_column_numbers'] = $_POST['eif_feed_column_numbers'];
	$eif_settings['eif_feed_image_resolution'] =$_POST['eif_feed_image_resolution'];
	$eif_settings['eif_feed_image_padding_unit'] = $_POST['eif_feed_image_padding_unit'];
	$eif_settings['eif_feed_image_padding_size']= $_POST['eif_feed_image_padding_size'];
    $eif_settings['eif_feed_show_button_status'] = $load_val;
	$eif_settings['eif_feed_button_background_color'] = $_POST['eif_feed_button_background_color'];
	$eif_settings['eif_feed_button_text_color'] = $_POST['eif_feed_button_text_color'];
    $eif_settings['eif_feed_follow_button_text'] = $_POST['eif_feed_follow_button_text'];
	$eif_settings['eif_feed_load_more_button_status'] = $val;
	$eif_settings['eif_feed_load_more_button_back_color'] = $_POST['eif_feed_load_more_button_back_color'];
	$eif_settings['eif_feed_load_more_button_text_color'] = $_POST['eif_feed_load_more_button_text_color'];
	$eif_settings['eif_feed_load_more_button_text'] = $_POST['eif_feed_load_more_button_text'];
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
	<table class="form-table">
    <hr />
        <h3>Photos</h3>
		<tr valign="top">
			<th scope="row"><label>Order by:</label></th>
				<td>
					<select name="eif_feed_image_sorting">
						<option value="newer" <?php if($eif_settings['eif_feed_image_sorting'] == "newer") echo 'selected="selected"' ?> ><?php _e('Newest to oldest'); ?></option>
						<option value="random" <?php if($eif_settings['eif_feed_image_sorting'] == "random") echo 'selected="selected"' ?> ><?php _e('Random'); ?></option>
					</select>
				</td>	
		</tr>
		<tr>
			<th scope="row"><label>Number of Photos:</label></th>
			<td>
				<input type="text" id="eif_feed_number_of_images" name="eif_feed_number_of_images" value="<?php esc_attr_e($eif_settings['eif_feed_number_of_images']);?>">
			Number of photos to show initially. Maximum of 32.
			</td>
		</tr>
		<tr>
			<th scope="row"><label>Number of Columns:</label></th>
			<td>
				<select name="eif_feed_column_numbers">
					<option value="1"<?php  if($eif_settings['eif_feed_column_numbers']=="1") echo 'selected="selected"' ; ?>><?php _e('1'); ?></option>
					<option value="2"<?php  if($eif_settings['eif_feed_column_numbers']=="2") echo 'selected="selected"' ; ?>><?php _e('2'); ?></option>
					<option value="3"<?php  if($eif_settings['eif_feed_column_numbers']=="3") echo 'selected="selected"' ; ?>><?php _e('3'); ?></option>
					<option value="4"<?php  if($eif_settings['eif_feed_column_numbers']=="4") echo 'selected="selected"' ; ?>><?php _e('4'); ?></option>
					<option value="5"<?php  if($eif_settings['eif_feed_column_numbers']=="5") echo 'selected="selected"' ; ?>><?php _e('5'); ?></option>
					<option value="6"<?php  if($eif_settings['eif_feed_column_numbers']=="6") echo 'selected="selected"' ; ?>><?php _e('6'); ?></option>
					<option value="7"<?php  if($eif_settings['eif_feed_column_numbers']=="7") echo 'selected="selected"' ; ?>><?php _e('7'); ?></option>
					<option value="8"<?php  if($eif_settings['eif_feed_column_numbers']=="8") echo 'selected="selected"' ; ?>><?php _e('8'); ?></option>
					<option value="9"<?php  if($eif_settings['eif_feed_column_numbers']=="9") echo 'selected="selected"' ; ?>><?php _e('9'); ?></option>
					<option value="10"<?php if($eif_settings['eif_feed_column_numbers']=="10") echo 'selected="selected"' ; ?>><?php _e('10'); ?></option>
				</select>
			</td>
		</tr>
		
		<tr>
		<th scope="row"><label>Image Resolution:</label></th>
		<td>
			<select name="eif_feed_image_resolution">
				<option value="thumbnail"<?php if($eif_settings['eif_feed_image_resolution']=="thumbnail'") echo 'selected="selected"'; ?>><?php _e('Thumbnail(150*150)');?></option>
				<option value="low_resolution"<?php if($eif_settings['eif_feed_image_resolution']=="low_resolution") echo 'selected="selected"'; ?>><?php _e('Medium(306*306)');?></option>
				<option value="standard_resolution"<?php if($eif_settings['eif_feed_image_resolution']=='standard_resolution') echo 'selected="selected"'; ?>><?php _e('Full Size(640*640)');?></option>
			</select>
		</td>
		</tr>
		
		<tr>
		<th scope="row"><label>Padding around Images:<label></th>
		<td>
			<input type="text" id="eif_feed_image_padding_size" name="eif_feed_image_padding_size" value="<?php esc_attr_e($eif_settings['eif_feed_image_padding_size']); ?>">
			<select name="eif_feed_image_padding_unit">
				<option value="px"<?php if($eif_settings['eif_feed_image_padding']=='px') echo 'selected="selected"';?>><?php _e('PX');?></option>
				<option value="%"<?php if($eif_settings['eif_feed_image_padding']=='%') echo 'selected="selected"';?>><?php _e('%');?></option>
			</select>
		</td>
		</tr>
		
 </table>
 <table class="form-table">
	 <hr/>
	 <h3>'Load More' Button </h3>
	 <tr valign="top">
		<th scope="row"><label>Show the 'Load More' button:</label></th>
		<td>
			<input type="checkbox" name="eif_feed_load_more_button_status" value="yes" <?php if($eif_settings['eif_feed_load_more_button_status']=='yes'){echo 'checked';}?>>
		</td>
	 </tr>
	<tr valign="top">
		 <th scope="row"><label>Button Background Color:</label></th>
		 <td>
			<input type="text" name="eif_feed_load_more_button_back_color" value="<?php if(esc_attr_e($eif_settings['eif_feed_load_more_button_back_color']));?>" class="eif-color-field"/>
		 </td>
	</tr>
	<tr valign="top">
		 <th scope="row"><label>Button Text Color:</label></th>
		 <td>
			<input type="text" name="eif_feed_load_more_button_text_color" value="<?php if(esc_attr_e($eif_settings['eif_feed_load_more_button_text_color']));?>" class="eif-color-field"/>
		 </td>
	</tr>
	<tr valign ="top">
		<th scope="row"><label>Button Text:</label></th>
		<td>
			<input type="text" name="eif_feed_load_more_button_text" value="<?php if(esc_attr_e($eif_settings['eif_feed_load_more_button_text']));?>" size="60">
		</td>
	</tr>
 </table>
 
 <table class="form-table">
	<hr/>
	<h3>'Follow on Instagram' Button</h3>
	<tr valign="top">
		<th scope="row"><label>Show the follow button:</label></th>
		<td>
			<input type="checkbox" name="eif_feed_show_button_status" value="yes"<?php if($eif_settings['eif_feed_show_button_status']=='yes'){echo 'checked';} ?>>
		
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><label>Button Background Color:</label></th>
		<td>
			<input type="text" name="eif_feed_button_background_color" value="<?php if(esc_attr_e($eif_settings['eif_feed_button_background_color'])); ?>" class="eif-color-field">
		</td>
	</tr>
	<tr valign="top">
		<th scope="row"><label>Button Text Color:</label></th>
		<td>
			<input type="text" name="eif_feed_button_text_color" value="<?php if(esc_attr_e($eif_settings['eif_feed_button_text_color']));?>" class="eif-color-field"/>
		</td>
	</tr>
	<tr valign ="top">
		<th scope="row"><label>Button Text:</label></th>
		<td>
			<input type="text" name="eif_feed_follow_button_text" value="<?php if(esc_attr_e($eif_settings['eif_feed_follow_button_text']));?>" size="60">
		</td>
	</tr>
	
 </table>
    <input type="submit" name="submit2" value="Submit" class="button button-primary"/>
	<input type="submit" name="rest" value="Reset" class="button button-primary"/>
</form> 
