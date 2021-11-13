<?php 	get_template_part('includes/header');?>

<div class="container-malinkes">
  <?php 
  $mb_image_mobile=get_field('banner_mobile');
  $mb_image=get_field('banner');
  ?>
    <section class="main-banner">
      <picture class="main-banner__image">
        <?php if ($mb_image_mobile) : ?>
          <source media="(max-width: 799px)" srcset="<?php echo esc_url($mb_image_mobile['url']); ?>">
        <?php endif;?>
        <?php if ($mb_image) : ?>
          <img src="<?php echo esc_url($mb_image['url']); ?>" alt="<?php echo esc_attr($mb_image['alt']); ?>"/>
        <?php endif; ?>
      </picture>
   
        <div class="main-banner__caption container">
          <h3 class="main-banner__title"><?php the_title(); ?></h3>
        </div>

  </section>
  <section id="banner5050">
  <div class="col-md-12 text-right">
    <a href="/blog"> < Volver</a>
  </div>
    <div class="container-fluid banner5050">
    <?php

     while( have_rows('banner_5050') ): the_row();
    ?>
        <div class="row">
            <div class="col-md-6 img">
                <figure>
                    <img src="<?php the_sub_field('foto') ?>" alt="">
                </figure>
               
            </div>
            <div class="col-md-6 info">
               <?php the_sub_field('informacion') ?>        
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</section>
<section class="slider">
<div class="row slider-malinkes">
    <?php
     while( have_rows('slider') ): the_row();
        ?>
      <div class="slider__item">
        <picture class="imagen">
            <img src="<?php the_sub_field('imagen'); ?>" alt="">
        </pictute>
      </div>
        <?php
    endwhile;
    ?>

    </div>
</section>


</div><!-- /.container -malinkes-->


<?php	get_template_part('includes/footer'); ?>