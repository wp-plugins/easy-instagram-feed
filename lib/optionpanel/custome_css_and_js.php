<?php
if(isset($_POST[submit])){
		$eif_settings = array();
		$eif_settings = get_option('eif_settings');
		$eif_settings['eif_instagram_custom_css'] = $_POST['eif_instagram_custom_css'];
			$eif_settings['eif_instagram_custom_js'] = $_POST['eif_instagram_custom_js'];
			update_option('eif_settings',$eif_settings);
		
}
?>

<form  name="eif_form" method="post"><?php $eif_settings = get_option('eif_settings'); ?>

		<table class="form-table">
			<tbody>
				<tr valign="top">
					<td style="padding-bottom: 0;">
						<strong style="font-size: 15px;">Custom CSS</strong><br><strong style="font-size: 12px;">Note: </strong> Please Enter only css without css script tag  </td>
				</tr>
				<tr valign="top">
					<td>
						<textarea name="eif_instagram_custom_css" id="eif_instagram_custom_css"   style="width: 70%;" rows="7"><?php  esc_attr_e(stripslashes( $eif_settings['eif_instagram_custom_css'])); ?></textarea>
					</td>
				</tr>
				<tr valign="top">
					<td style="padding-bottom: 0;">
						<strong style="font-size: 15px;">Custom JavaScript</strong><br><strong style="font-size: 12px;">Note: </strong> Please Enter only js without js script tag </td>
				</tr>
				<tr valign="top">
					<td>
						<textarea name="eif_instagram_custom_js" id="eif_instagram_custom_js"  style="width: 70%;" rows="7"><?php esc_attr_e(stripslashes( $eif_settings['eif_instagram_custom_js'])); ?></textarea>
					</td>
				</tr>
			</tbody>
		</table>
	
 

    <input type="submit" name="submit" value="Submit" class="button button-primary"/>
	<?php wp_nonce_field('easy_instagram_media_security_check','eif_easy_instagram_media_security_check_custom_css&js'); ?>
	
	
</form> 



 
