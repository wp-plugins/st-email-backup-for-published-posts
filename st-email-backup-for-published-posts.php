<?php
/*
Plugin Name: ST Email Backup For Published Posts
Plugin URI: http://www.skattertech.com
Description: This plugin emails the admin email account a copy of each post as it gets published. Any edits to published posts will also be emailed. The title, time stamp, and content is included with each email.
Author: Sahas Katta (Skatter Tech)
Author URI: http://www.sahaskatta.com
Version: 0.1
License: Copyright © 2005-2010 Skatter Tech
*/

function skatter_tech_email_backup($content) {
  global $post;

  $emailTo = get_bloginfo('admin_email');
  $subject = 'Published Post Backup: ' . $post->post_title;
  $body = "Title: $post->post_title \n\n" .
          "Date: $post->post_date \n\n" .
          "Content:\n $post->post_content";
  $headers = 'From: Skatter Tech Email Backup <'.$emailTo.'>';
  
  mail($emailTo, $subject, $body, $headers);
}
add_action('publish_post', 'skatter_tech_email_backup');

?>
