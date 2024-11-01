=== the-law ===
Contributors: kennethrapp
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=92XWZSS88YF9C
Tags: xss protection, code whitelist, htmlawed
Requires at least: 3.0.1
Tested up to: 3.6
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sanitize post markup and provide xss protection with [htmLawed](http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed/)

== Description ==

HTMLawed is an html sanitizer and validator by PHP Labware, dual licenced with LGPL3 and GPL2+. 

This plugin will run HTMLawed (current version 1.1.16) as a filter on post and title content. Using
the default settings embed tags, script tags, inline stylesheets and iframes will be removed from the html.

== Installation ==

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. that's it.  

== Config ==

Refer to the htmlawed documentation for config options for htmlawed. The .htmlawedconfig file
included with the plugin follows the .ini file syntax and by default strips content for xss-unsafe
elements. This file will not show up in the wordpress plugin editor. 

== Frequently Asked Questions ==

= Is it safe? =

Maybe.

= What if i want javascript and inline styles and iframes in my post content? =

Don't use this plugin.  

== Changelog ==

= 1.0 =

* No changes.

