(function($){
var string_hash = window.location.hash;
var token = string_hash.substring(14);

var id=token.split(".");
var user_id=id[0];
var client_id='44a5744739304a48af362318108030bc';
//console.log(user_id);

// set the access token to their respective inputs.
$(function () {
    var eif_access_token=  $('#eif_access_token');
    var eif_user_id= $('#eif_user_id');
    if(!eif_access_token.val() || !eif_user_id.val() ){
		if(eif_access_token.val()!=token || eif_user_id.val()!=user_id){
		eif_access_token.val(token);
		eif_user_id.val(user_id);
		}
	}
});



})(jQuery);