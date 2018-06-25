<h3><?php the_title(); ?></h3>

<!-- By default, the_post_thumbnail(); will place image at full size, you can add the_post_thumbnail('thumbnail') to make image thumbnail size. Or you can do 'large' etc.-->
<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div>

<small>Posted On: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?></small>
<p><?php the_content(); ?></p>
<hr>
