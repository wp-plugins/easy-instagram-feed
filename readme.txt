=== Custom Instagram Feed ===
Contributors: priyanshu.mittal,a.ankit
Donate link: http://www.webriti.com/
Tags: instagram, instagram page, instagram feed, instagram photos,custom instagram feed,mobile instagram,wordpress instagram
Requires at least: 3.3+
Tested up to: 4.1
Stable tag: 1.5.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin allows you to display customizable and responsive instagram photos. 

== Description ==

Custom Instagram Feed plugin allows to display instagram photos on your WordPress site. Just add the shortcode *[easyinstagramfeed]* in the normal WordPress page/post inorder to get the feeds.


= Features =
* Completely *Responsive* on any device like ipads, mobiles etc etc. Looks good in all devices.
* Very *easy set up* process.
* Display photos from *multiple instagram accounts* in a single feed.
* Options for configuring width, height and background color of the section where you will get the instagram photos.
* *Layout Options* - You can configure the gallery/feed layout ie 2 column, 3 column and so on.
* Photo Count - Option for *selecting the number of photos* to display ie if you select 20 photos to display first time, than, after 20 th one, you will be get a nice piece of load more button and when you click this button you will get the next set of photos.
* Easily select the *order of photos* ie you can randomise the order of photos as well as set the order from new to old.
* Easily *add padding* around each photo. 
* Feature for *configuring load more button* as per the theme's color schemes so that the button looks more like the theme button itself.
* *Follow us* on instagram button.
* Most Important adding *shortcode attributes* so that you can *display multiple feeds* on the same page as well as on different pages by just adding [easyinstagramfeed id="xyz"]
* Support for *Instagram Embed*


Here is the link to [Documentation](http://webriti.com/documentation-for-easy-instagram-feed-plugin-lite-version/)

[youtube https://www.youtube.com/watch?v=BBbg3etugX8]

In case you face any problem, contact us via the [Forums](http://wordpress.org/support/plugin/easy-instagram-feed). 

= What you get in premium version? =
* *Video Media Support:* In the pro verison you can show video type items in the instagram feed. You can also watch the video directly on your website in the form of lightbox pop up.
* *Hashtag Support:* Filter your feeds with the help of hashtags. You can also add multiple hashtags. Say if you set adidas and sports as the tags than you will recieves those media items in feed which have these two tags only.
* *Lightbox Support:* By default the lightbox is active that if you click on any of the image / video , than you get the nice piece of lighobox fashion overlay. In this overlay window you can watch video, navigate to other images, share the items etc etc. You can also disable it if you dint want to use lightbox.
* *Socialise Feeds:* Share the feed items on instagram as well as other social services like facebook, twitter, google plus, linkedin, pinterest, reddit and stumbleupon.
* *Configure Caption:* Easy control over the media caption. You can hide, style, specify the limit of text to show by default.
* *Configure Like and Comment icon:* You can hide the like and comment icons by selecting the checkbox. You can also change the icon colors.
* *Header Support:* Show you instagram profile picture along with the name. You can also change the text color in the header.
* [Upgrade to the Custom Instagram Feed Pro version &raquo;](http://webriti.com/instagram-feed/)
* [View Custom Instagram Feed Pro Live Demo &raquo;](http://webriti.com/easy-instagram-feed-demo/)

== Installation ==

1. Download Easy Instagram Feed plugin.
2. Upload the easy-instagram-feed folder to the /wp-content/plugins/ directory.
3. Activate the plugin through the 'Plugins' menu in WordPress and Enjoy.

Lots more to come, will update the change log accordingly.
Give **Custom Instagram Feed** a try. We are sure you will like it. 


== FAQ ==

= 1. How to display instagram feed on post / page? =

After plugin activation  Go to "Easy Instagram feed" option panel, configure it and add the shortcode **[easyinstagramfeed]** in the WordPress Post / Pages.


= 2. How to display multiple feeds on pages? =

I am assuming that you have authorize the app with your instagram account ie you have the access token. Add the shortcode **[easyinstagramfeed userid="1591885187,1631861081"]** to wordpress page.

= 3. What is the minimum requirement to run the shortcode?. =

User id and access token are mandatory. Note, you can use single accesstoken for multiple user ids.

= 4. How to display different feeds on different pages. =

Add different shortcodes on different pages ie if you want to show 2 user feeds on different pages than add **[easyinstagramfeed userid="1591885187"]** to one page and add **[easyinstagramfeed userid="1631861081"]** to another page.

= 5. How to get 4 column layout of feed? =

For this use the attribute *cols* . Add this shortcode **[easyinstagramfeed userid="your user id" cols=4]**. Similarly you can play around with the other attributes.

= 6. What type of configuration is possible?. =

Feed width, height, background color, image resolution, padding , load moer button configurations etc etc.

= 7. What do you mean by image resolution. =

Instagram has three type resolutions thumbnail, low_resolution and standard_resolution.If you set the thumbnail size than instagram will return you the image of size 15
px by 150px. Simialry for low_resolution size is 306 by 306 and for standard_resolution image of size 640 * 640 is returned.

= 8. How to get user id? =

Go to general settings and get the user from there or use the this third party <a href="http://jelled.com/instagram/lookup-user-id" target="_blank">tool</a> 

= 9. How to display particular feed on WordPress Page?
You just need to paste the instagram image / video url and you will get the desired output. No need to add shortcode for this on the page. For example directly using something like this https://instagram.com/p/y9ietTkOrg/ will do.

== Screenshots ==

1. Create instagram feed page like this
2. Instagram Image Embed page. Just add the image url in the WordPress Page and will get the similar layout as shown in the snapshot below.
3. Instagram Video Embed page. Just add the video url and you will the video iframe automatically gets created on the WordPress page.

== Changelog ==

= 1.5.5 =
1. Added corrected security issue.
= 1.5.4 =
1. Add Youtube link in the description
= 1.5.3 =
1. mention FAQ tab
= 1.5.2 =
1. resolve issue plugin style scope.
2. resolve issue feed responsive.
= 1.5.1 =
1. Added extra tab in the option panel.
= 1.5 =
1. Added image border setting.
2. Added image shadow setting.
3. Added image overlay setting.
4. resolve  instagram Embed image size issue

= 1.4 =
1. Added support for instagram Embed.
2. Update read me file.
= 1.3 =
Updated Readme file
Small bug fixes.
= 1.2 =
Added feature to add custom css and js that apply only in instagram feed shortcode page .
= 1.1 =
Remove load more bug on some specific number of objects.
= 1.0 =
Added beta version link.
= 0.7 =
1. Added subscription form for beta testers.
2. Improoved some styling issues.
= 0.6 =
1.Improove Load More button logic. Now after each button click the ajax request will be send to fetch the next set of media items.
 
= 0.5 =
1. Image padding.
2. Locad more button configurations.
3. Follow Us Instagram button configurations.

= 0.4 =
1. Added feature to select order of the photos ie from new to old or random.
2. You can select photo count.
3. Feature for adding padding.
4. Select number of columns.

= 0.3 =
1. Feature to configure feed section ie width , height and background color.

= 0.2 =
1. Added support for adding multiple user id's.

= 0.1 =
This version provides basic functionality to authorize an app with the instagram and fetch instagram feeds with the help of shortcode [easyinstagramfeed] on pages.