<?php


  /*  
  ** Custom stuff...
  */  
  
  
  if (class_exists('MultiPostThumbnails')) {
      new MultiPostThumbnails(
          array(
              'label' => 'Secondary Image',
              'id' => 'secondary-image',
              'post_type' => 'page'
          )
      );
  }

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';

?>


