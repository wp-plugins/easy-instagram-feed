<?php 

   $eif_token_url = "https://instagram.com/oauth/authorize/?client_id=";
    $eif_token_url .= '44a5744739304a48af362318108030bc';
    $eif_token_url .= "&redirect_uri=http://webriti.com/easy-instagram-feed/eiflite/";
   $eif_token_url .= "?return_uri=".admin_url('admin.php?page=easy-instagram-feed');
    $eif_token_url .= "&response_type=token";

?>

<?php if(isset($_POST['submit'])){
    $eif_settings = array();
    
    // create array of multiple ids
    $eif_userids = explode(",",$_POST['eif_user_id']);
    
    $eif_settings = array(
                    'eif_access_token' => $_POST['eif_access_token'],
                    'eif_user_id' => $eif_userids,
        );
       
        // update options
        update_option('eif_settings',$eif_settings);

}?>
<form  name="eif_form" method="post"><?php $eif_settings = get_option('eif_settings'); ?>
<h3>Authorize this app</h3>
<div class="eif_auth_button">
    <a href="<?php echo $eif_token_url;?>" class="button button-primary">Login to your account and authorize the app.</a>
</div>
<table class="form-table">
        <tr valign="top">
        <th scope="row"><label>Your Access Token </label></th>
        <td><input type="text" id="eif_access_token"  name="eif_access_token" value="<?php esc_attr_e($eif_settings['eif_access_token']); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row"><label>User Id</label></th>
        <td><input type="text" id="eif_user_id" name="eif_user_id" value="<?php esc_attr_e(implode(',',$eif_settings['eif_user_id'])); ?>" /><span style="font-style:Italic;"> Seperate multiple Ids using commas </span></td>
        </tr>
       
    </table>
    
 
    <input type="submit" name="submit" value="Submit" class="button button-primary"/>
</form> 
