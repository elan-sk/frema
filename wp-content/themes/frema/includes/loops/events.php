<?php

/**
 * Related News
 */

$args = array(
  'post_type' => 'eventos',
  'posts_per_page' => 2
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="events">
  <header class="section__headline">
    <h2>
         <span>
          Eventos
         </span>
    </h2>
  </header>
  <div class="container-fluid padding-contendor-elemetos">
    <div class="row eventos">
    <?php
    while($query->have_posts()):$query->the_post();
    $category = get_the_category();
        ?>
      <div class="eventos__item">
         <div class="eventos__caption">
            <div class="categoria">
                <p> <?php echo $category[0]->category_name; ?></p>  <!-- no sirve -->
            </div>
            <h4 class="headline headline--4">
                <?php the_title(); ?>
            </h4>
            <p>
            <?php the_content() ?>
            </p>
            <div class="fecha">
                <h4>
                    Fecha: <?php the_field('fecha') ?>

                </h4>
            </div>
         </div>
        <picture class="eventos__image image-ar image-ar--32">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </pictute>

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