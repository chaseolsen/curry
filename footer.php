
  <footer>
    <p>Footer</p>

    <?php
    // Gets 'secondary' menu created in appearance > menu. Also check functions.php where we are grabbing 'secondary'
    wp_nav_menu(array('theme_location'=>'secondary'));
    ?>

  </footer>

  <?php wp_footer(); ?>

  </body>
</html>
