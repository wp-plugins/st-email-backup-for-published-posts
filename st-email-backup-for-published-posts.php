<?php
/*
Plugin Name: ST Email Backup For Published Posts
Plugin URI: http://skattertech.com
Description: This plugin emails the admin email account a copy of each post as it gets published. Any edits to published posts will also be emailed. The title, author, time stamp, category, tag, and content is included with each email.
Author: Sahas Katta (Skatter Tech)
Author URI: http://sahaskatta.com
Version: 0.2
License: Copyright © 2005-2010 Skatter Tech. Feel free to share (copy or distribute) and to remix (modify). However, you may not misrepresent the origin of this plugin. You must attribute the original work to the author. If you choose to redistribute this work, you must use the same license.
*/

function skatter_tech_email_backup($content) {
	global $post;

	// Grab the author's name
	$author = get_the_author_meta( 'user_nicename', $post->post_author );

	// Get a comma separated string of categories
	$category_list = 'Category: ';
	foreach((get_the_category()) as $category) { $category_list .= $category->cat_name . ', '; }

	// Get a comma separated string of tags
	$tag_list = 'Tag: ';
	foreach((get_the_tags()) as $tag) { $tag_list .=  $tag->name . ', '; }

	$email = get_bloginfo('admin_email');
	$subject = 'Published Post Backup: ' . $post->post_title;
	$body = "Title: $post->post_title \n\n" .
		"Author: $author \n\n" .
		"Date: $post->post_date \n\n" .
		"$category_list \n\n" .
		"$tag_list \n\n" .
		"Content:\n $post->post_content";
	$headers = 'From: '.get_bloginfo('name').' Email Backup <'.$email.'>';
  
	mail($email, $subject, $body, $headers);
}
add_action('publish_post', 'skatter_tech_email_backup');

?>
