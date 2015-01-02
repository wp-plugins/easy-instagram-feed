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
            var post_image_src = this.images.low_resolution.url;
            var post_image_link = this.link;
            // create protocol relative image source url
            post_image_src = post_image_src.replace(/.*?:\/\//g, "//");
            
            // create protocol relative instagram page link url
            post_image_link = post_image_link.replace(/.*?:\/\//g, "//");
            
            var wrapper='<div id="'+ this.id +'" class="eif_item"><a href="'+ post_image_link +'" target="_blank"><img src="' + post_image_src + '"/></a>';
            wrapper += '</div>';
            $('#eif_images').append(wrapper);
           });
    
           //$('.eif_item:nth-child(4n)').after('<div class="clearfix"></div>'); 
    
        },
    });// end of ajax request
});


});