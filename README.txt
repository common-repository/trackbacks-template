==== Trackbacks Template ====
Contributors: dalziel
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=paypal%40slaven.net.au&item_name=Trackbacks+Template+Wordpress+Plugin&no_note=1&tax=0&bn=PP-DonationsBF&submit.x=51&submit.y=9
Tags: trackbacks, template, comments, pingbacks
Tested up to: 2.6 bleeding
Stable tag: 1.0

Adds a template tag to allow you to display only the trackbacks for your posts/pages.  

== Description ==

Adds a template tag 'trackback_template()' that displays the list of trackbacks for a post/page.  This is especially useful for
sites that are displaying the comments using a seperate service (i.e. Disqus).

== Installation ==

1. Download the zip file & extract the contents to /wp-content/plugins
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place the tag `trackback_template()` on your template where you want the trackbacks to appear (probably above or below the normal comments section in the single.php template file) 

== Modifying the template ==

By default the plugin displays the trackbacks as an unordered list inside a div with the id "trackbackslist" with a h3 heading "Trackbacks" above the list
Alternatively if you're comfortable with editing HTML & PHP you can add a file called trackbacks.php into your template folder and the plugin will use that to style this list.  
The file trackbacks.php in the plugin folder contains the default code & is a good starting point for customising your own template.  Copy it into your
template folder and it will be used instead of the default file.
