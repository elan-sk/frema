<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 2
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="news news--related">
  <header class="section__headline">
    <h2>
         Blog
    </h2>
  </header>
  <div class="container-fluid padding-contendor-elemetos">
    <div class="row posts-home">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">  
        <div class="news__caption">
          <h4 class="headline headline--4">
            <?php the_title(); ?>
          </h4>
          <p>
          <?php the_excerpt() ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="body body--bd">Saber más</a>
        </div>
      </div>
        <?php
    endwhile;
    ?>

    </div>
  </div>
</section>
    <?php
endif;
wp_reset_postdata();