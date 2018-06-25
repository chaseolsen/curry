<?php get_header(); ?>

  <?php
  // Check if we have posts
  if (have_posts()):
    while(have_posts()) : the_post(); ?>


    <!-- Pulls from the declared 'content' from content.php ('content') is name of file, it can be called whatever as long as it matches filename your referencing -->
    <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile;

  endif;

  ?>

<?php get_footer(); ?>
