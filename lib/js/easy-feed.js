var all_posts='';
var img_sort='';
var image_limit='';
var image_resolution='';
array_index = 0;

jQuery(document).ready(function($){
    var token = eifsettings.eif_access_token;
    var user_ids = eifsettings.eif_user_id;
	img_sort = eifsettings.eif_feed_image_sorting;
	image_limit = eifsettings.eif_feed_number_of_images;
	image_resolution = eifsettings.eif_feed_image_resolution
	//alert(image_resolution);
	
    //var page_feed_url = 'https://api.instagram.com/v1/users/self/feed?access_token=' + token;
    
    //var page_feed_url = 'https://api.instagram.com/v1/media/3?access_token=ACCESS-TOKEN';
    $.each(user_ids,function(i,val){
        $.ajax({
        method: "GET",
        url: 'https://api.instagram.com/v1/users/'+ val +'/media/recent/?access_token='+ token +'&count=2000',
        dataType: "jsonp",
        success: function(data){
        var posts = data.data;
		var posts_length = posts.length;
	console.log(posts);
		var btn = document.createElement("BUTTON"); 
		var t = document.createTextNode("Load More");
		btn.appendChild(t); 
		btn.setAttribute('id','Load_update');
		btn.setAttribute('name','Load_update');
		btn.setAttribute('onclick','load_more()');
		btn.setAttribute('class','btn_clsss');
		
		$("#eif_feed").append(btn);  
			
			// check random condition and call function for random images 
					if(img_sort=='random')
					{
					shuffle(posts);
					}
					all_posts=posts;
		
			$.each(posts, function(index){ 
			if(image_resolution== 'low_resolution')
			{
            var post_image_src = this.images.low_resolution.url;
			}
			else if(image_resolution== 'thumbnail')
			{
            var post_image_src = this.images.thumbnail.url;
			}
			else if(image_resolution== 'standard_resolution')
			{
            var post_image_src = this.images.standard_resolution.url;
			}
            var post_image_link = this.link;
			var post_image_created_time = this.created_time;
            post_image_src = post_image_src.replace(/.*?:\/\//g, "//");
            // create protocol relative instagram page link url
            post_image_link = post_image_link.replace(/.*?:\/\//g, "//");
            //alert(post_image_link);
			
            var wrapper='<div id="'+ this.id +'" class="eif_item"><a href="'+ post_image_link +'" target="_blank"><img src="' + post_image_src + '"/></a>';
            
			wrapper += '</div>';
			
            $('#eif_images').append(wrapper);
			
			if(index==posts_length-1)
			{
			//alert("All images Here");
			document.getElementById('Load_update').style.display = 'none';
			}
			
			if(index==image_limit-1)
			{
				array_index = image_limit;
				return false;
			}
			
           });
			
           //$('.eif_item:nth-child(4n)').after('<div class="clearfix"></div>'); 
        },
		
    });// end of ajax request
});

});

function load_more()
{
	
	var posts_length = all_posts.length;	
	var start_index=array_index;
	array_index=+array_index+ +image_limit;
	
	jQuery.each( all_posts, function( key, value ) {
	
	if(key >= start_index && key < array_index)
	{
		if(image_resolution== 'low_resolution')
			{
            var post_image_src = this.images.low_resolution.url;
			}
			else if(image_resolution== 'thumbnail')
			{
            var post_image_src = this.images.thumbnail.url;
			}
			else if(image_resolution== 'standard_resolution')
			{
            var post_image_src = this.images.standard_resolution.url;
			}
		var post_image_link = this.link;
		var post_image_created_time = this.created_time;
		post_image_src = post_image_src.replace(/.*?:\/\//g, "//");
		// create protocol relative instagram page link url
		post_image_link = post_image_link.replace(/.*?:\/\//g, "//");
		var wrapper='<div id="'+ this.id +'" class="eif_item"><a href="'+ post_image_link +'" target="_blank"><img src="' + post_image_src + '"/></a>';
		
		wrapper += '</div>';
		
		jQuery('#eif_images').append(wrapper);
	}
   });
	
	if(all_posts.length<=array_index)
	{
		document.getElementById('Load_update').style.display = 'none';
	}
}
function shuffle(array) 
{
	  var currentIndex = array.length, temporaryValue, randomIndex ;
	  while (0 !== currentIndex) {
		// Pick a remaining element...
		randomIndex = Math.floor(Math.random() * currentIndex);
		currentIndex -= 1;
		// And swap it with the current element.
		temporaryValue = array[currentIndex];
		array[currentIndex] = array[randomIndex];
		array[randomIndex] = temporaryValue;
	  }
	return array;
}