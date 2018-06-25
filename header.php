<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curry</title>
    <?php wp_head(); ?>
  </head>

  <?php
    // Check if front page, set variable array of classes
    if(is_front_page()):
      $curry_classes = array('curry-class', 'my-class');
    else:
      $curry_classes = array('no-curry-class');
    endif;
  ?>

  <!-- Set body_class to curry_classes declared up above in if statement -->
  <body <?php body_class($curry_classes); ?>>

    <?php
    // Gets 'primary' menu created in appearance > menu. Also check functions.php where we are grabbing 'primary'
    wp_nav_menu(array('theme_location'=>'primary'));
    ?>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
