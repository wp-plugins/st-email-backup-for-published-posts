=== Plugin Name ===
Contributors: sahaskatta
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CCV28J8ZQ5FAW
Tags: backup, email
Requires at least: 2.0.2
Tested up to: 3.1
Stable tag: trunk

This plugin emails the admin email account a copy of each post as it gets published.

== Description ==

When enabled, the admin email address gets a message including the title, author, time stamp, category, tags, and content of each post as it gets published. Edits to published posts are also emailed.

Why use this?

*   Keeps the admins aware of all new content
*   Notifications when published posts are modified
*   Enable with just one-click, no hassle
*   No bloat, uses a simple PHP Mail command
*   An extra layer of backup if backups are lost

Notice: This isn't by any means an alternative or replacement for regular database and file backups.

== Installation ==

1. Upload `st-email-backup-for-published-posts.php` to `/wp-content/plugins/`
1. Activate the plugin through the 'Plugins' menu in WordPress
1. That's it, you are done!

== Frequently Asked Questions ==

= How do I know this plugin is working? =

It should email the address listed in the `General Settings` section in the WordPress Dashboard. An email will only be sent out when a new post is published. If you want to perform a quick test, feel free to open an existing post and hit `Update`. A backup email should appear in your inbox shortly.

= What's next for this plugin? How do I suggest a feature? =

This is my first plugin and I made it in about an hour. I'll eventually add new features. However if you have any suggestions, feel free to post them to the [WordPress Support Forum](http://wordpress.org/support "WordPress Support Forum") with the name of this plugin as a tag.

= Where do I report bugs? =

Please publish them to the [WordPress Support Forum](http://wordpress.org/support "WordPress Support Forum"), I'll try to respond to issues as fast as I can.

== Changelog ==

= 0.2 =
* Emails include author name
* Emails include post categories
* Emails include post tags
* Sent to Admin Email by default
* Source includes comments

= 0.1 =
* First release
* Sends email to a specified email address
* Emails title and content of an article

== Upgrade Notice ==

= 0.2 =
This is the latest and the only stable release.
