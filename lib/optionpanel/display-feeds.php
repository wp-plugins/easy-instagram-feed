<h3><?php _e('Display your Feed') ?></h3>
<p>
<?php _e("To show instagram feeds on the pages/posts add the shortcode highlighted below in the editor. But for this configure the details in the option panel.");?>
</p>
<input type="text" value="[easyinstagramfeed]" size="17" readonly="readonly" style="text-align: center;" onclick="this.focus();this.select()">
 <p><?php _e("Plugins comes with number of attributes so that you can configure your feeds by just assigning the appropriate value to it .For example if you'd like to display instagram feed in the fashion of 4 columns than all you need to do is just assign the value 4 to the cols attribute as shown below."); ?>
<code>[easyinstagramfeed cols=4]</code></p>
        <p>You can display as many different feeds as you like, on either the same page or on different pages, by just using the shortcode attributes below. For example:<br />
        <code>[easyinstagramfeed]</code><br />
        <code>[easyinstagramfeed userid="1591885187"]</code><br />
        <code>[easyinstagramfeed userid="1591885187,1631861081"]</code>
        </p>
<p><?php _e("See the table below for a full list of available shortcode attributes:"); ?></p>
<table border="1" class="att_table">
<tbody>
	<tr valign="top">
		<th scope="row"><?php _e('Shortcode option');?></th>
		<th scope="row"><?php _e('Description');?></th>
		<th scope="row"><?php _e('Example');?></th>
	</tr>
	<tr class="att_table_header">
		<td colspan=3>
		<?php _e('General settings');?>
		</td>
	</tr>
	<tr>
		<td>userid</td>
		<td><?php _e('An Instagram User ID. Want to fetch feeds from multiple user accounts than specify their IDs and seperate them by commas. Use this tool to know your <a href="http://jelled.com/instagram/lookup-user-id" target="_blank">userid</a> . You can also get your id by authorizing this app in the General Settings of the Option Panel.'); ?></td>
		<td><code>[easyinstagramfeed userid="1591885187"]</code></td>
	</tr>
	<tr>
		<td>accesstoken</td>
		<td><?php _e('An Instagram User accesstoken. Again you can get the token  by authorizing this app from the general settings'); ?></td>
		<td><code>[easyinstagramfeed accesstoken="0000000000.000000000"]</code></td>
	</tr>
	<tr class="att_table_header">
		<td colspan=3>
		<?php _e('Customize Feed Area');?>
		</td>
	</tr>
	<tr>
		<td>width</td>
		<td><?php _e('The width of your feed in number. No need to add px or %. Default value is 100');?></td>
		<td><code>[easyinstagramfeed width=100]</code></td>
	</tr>
	<tr>
		<td>widthunit</td>
		<td><?php _e('The width unit of the feed. Allowed units are px or %. Default value if not specified is %');?></td>
		<td><code>[easyinstagramfeed widthunit="%"]</code></td>
	</tr>
	<tr>
		<td>height</td>
		<td><?php _e('The height of the feed. Just specify a number. Default value is 100.') ?></td>
		<td><code>[easyinstagramfeed height=100]</code></td>
	</tr>
	<tr>
		<td>heightunit</td>
		<td><?php _e('The height unit of  feed. Use px or %.');?></td>
		<td><code>[easyinstagramfeed heightunit="%"]</code></td>
	</tr>
	<tr>
		<td>backgroundcolor</td>
		<td><?php _e('The backgroundcolor color of your feed area. Default value #fff');?></td>
		<td><code>[easyinstagramfeed backgroundcolor="#595e4d"]</code></td>
	</tr>
	
	<tr class="att_table_header">
	<td colspan=3><?php _e('Photos')?></td>
	</tr>
	
	<tr>
	<td>orderby</td>
	<td><?php _e('Sort Photos by order. It has two values <b>"newertoolder"</b> and <b>"random"</b>. Default order is <strong>newertoolder</strong> if not specified.');?></td>
	<td><code>[easyinstagramfeed orderby="random"]</code></td>
	</tr>
	
	<tr>
	<td>num</td>
	<td><?php _e('Limit number of images to show.');?></td>
	<td><code>[easyinstagramfeed num=5]</code></td>
	</tr>
	
	<tr>
	<td>cols</td>
	<td><?php _e('Number of Column of feed. Default value is 4');?></td>
	<td><code>[easyinstagramfeed cols=4]</code></td>
	</tr>
	
	<tr>
	<td>resolution</td>
	<td><?php _e('Resolution of images, has three values <b>thumbnail</b> , <b>low_resolution</b> and <b>standard_resolution</b>. Default resolution is low_resolution if not specified. Thumbnail will render image of size 150 * 150, low resolution 306 * 306 and standard 640px * 640px ');?></td>
	<td><code>[easyinstagramfeed resolution="low_resolution"]</code></td>
	</tr>
	
	<tr>
	<td>imagepadding</td>
	<td><?php _e('The image padding size in number.Default is 5');?></td>
	<td><code>[easyinstagramfeed imagepadding=5]</code></td>
	</tr>
	
	<tr>
	<td>imagepaddingunit</td>
	<td><?php _e('The image padding unit in % or px. Default is px');?></td>
	<td><code>[easyinstagramfeed imagepaddingunit="px"]</code></td>
	</tr>
	
	
	<tr class="att_table_header">
	<td colspan=3><?php _e('Load More Button Settings');?></td>
	</tr>
	
	<tr>
	<td>loadmorebuttondisplay</td>
	<td><?php _e("Whether to show the 'Load More' button. 'yes' or 'no'. Default is no");?></td>
	<td><code>[easyinstagramfeed loadmorebuttondisplay="yes"]</code></td>
	</tr>
	
	<tr>
	<td>loadmorebuttoncolor</td>
	<td><?php _e('The Load More button color. Default is #000');?></td>
	<td><code>[easyinstagramfeed loadmorebuttoncolor="#000000"]</code></td>
	</tr>
	
	<tr>
	<td>loadmorebuttontextcolor</td>
	<td><?php _e('The Load More button Text color. Default is #fff');?></td>
	<td><code>[easyinstagramfeed loadmorebuttontextcolor="#fff"]</code></td>
	</tr>
	
	<tr>
	<td>loadmorebuttontext</td>
	<td><?php _e('The Load More button display text.');?></td>
	<td><code>[easyinstagramfeed loadmorebuttontext="Load More.."]</code></td>
	</tr>

	<tr class="att_table_header">
		<td colspan=3><?php _e('Follow on Instagram Button Configuration'); ?></td>
	</tr>
	
	
	<tr>
	<td>followbuttondisplay</td>
	<td><?php _e("Whether to show the 'Follow on Instagram' button. 'yes' or 'no'. Defaut value is no");?></td>
	<td><code>[easyinstagramfeed followbuttondisplay="Yes"]</code></td>
	</tr>
	
	<tr>
	<td>followbuttoncolor</td>
	<td><?php _e('the Follow on Instagram button color. Dafault color is #000');?></td>
	<td><code>[easyinstagramfeed followbuttoncolor="#000000"]</code></td>
	</tr>
	
	<tr>
	<td>followbuttontextcolor</td>
	<td><?php _e('The Follow on Instagram button text color. Default is #fff');?></td>
	<td><code>[easyinstagramfeed followbuttontextcolor="#fff"]</code></td>
	</tr>
	
	<tr>
	<td>followbuttontext</td>
	<td><?php _e('The Follow on Instagram button dispaly text');?></td>
	<td><code>[easyinstagramfeed followbuttontext="Follo on Instagram.."]</code></td>
	</tr>
	</tbody>
</table>
