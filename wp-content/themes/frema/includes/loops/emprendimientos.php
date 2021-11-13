<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'emprendimientos',
  'posts_per_page' => 3
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="emprendimientos">
  <header class="section__headline">
    <h2>
         Nuestros emprendimientos
    </h2>
  </header>
  <div class="container-fluid padding-contendor-elemetos">
    <div class="row">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item">
      <picture class="news__image image-ar image-ar--32">
        <a taget="_blank" href="https://walink.co/2a5ae7"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a> 
        </pictute>
         <div class="news__caption">
            <h4 class="headline headline--4">
                <?php the_title(); ?>
            </h4>
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