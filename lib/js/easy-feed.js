jQuery(document).ready(function($){
    var token = eifsettings.eif_access_token;
    var user_ids = eifsettings.eif_user_id;
    

    //var page_feed_url = 'https://api.instagram.com/v1/users/self/feed?access_token=' + token;
    
    //var page_feed_url = 'https://api.instagram.com/v1/media/3?access_token=ACCESS-TOKEN';
    $.each(user_ids,function(i,val){
        $.ajax({
        method: "GET",
        url: 'https://api.instagram.com/v1/users/'+ val +'/media/recent/?access_token='+ token +'&count=2000',
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
    });// end of ajax request
});


});