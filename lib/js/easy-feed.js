jQuery(document).ready(function($){
    var token = eifsettings.eif_access_token;
    var page_feed_url = 'https://api.instagram.com/v1/users/self/feed?access_token=' + token;
    
    $.ajax({
    method: "GET",
    url: page_feed_url,
    dataType: "jsonp",
    success: function(data){
        var posts = data.data;
        
        $.each(posts, function(){
        var post_image=this.images.low_resolution.url;
        var wrapper='<div id="'+ this.id +'" style="float:left;" class="eif_item"><img src="' + post_image + '"/>';
        wrapper += '</div>';
        $('#eif_feed').append(wrapper);
       });

       $('.eif_item:nth-child(4n)').after('<div class="clearfix"></div>'); 

    },
});



});