<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'malinkes',
  'posts_per_page' => 10
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="malinkes news--related">
  <div class="container-fluid padding-contendor-elemetos">
    <div class="row">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item col-md-3 col-xs-6 text-center">
          <a href="<?php the_permalink(); ?>" class="d-block">
            <picture class="news__image image-ar image-ar--32">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </pictute>
          </a>
        <div class="news__caption">
          <a href="<?php the_permalink(); ?>" class="body body--bd"><?php the_title(); ?></a>
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