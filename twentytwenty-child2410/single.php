<?php
  $post = $wp_query->post;
  if ( in_category('cast') ) {
	  include(STYLESHEETPATH.'/single-cast.php');
  } elseif ( in_category('discography') ) {
	  include(STYLESHEETPATH.'/single-discography.php');
  } else {
	  include(STYLESHEETPATH.'/single-default.php');
  }
?>