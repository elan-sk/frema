<?php
/*
* Main Banner -> main_banner
  - Imagen de fondo -> main_banner__image
  - Imagen de fondo en mobile (opcional) -> main_banner__image_mobile
  - Texto -> main_banner__body
  - Vinculo -> main_banner__cta
*/

$main_banner = get_field('main_banner');

if ($main_banner) : ?>
<section class="main-slider">
  <?php
    while(have_rows('main_banner')): the_row();
      $mb_image = get_sub_field('main_banner__image');
      $mb_image_mobile = get_sub_field('main_banner__image_mobile');
      $mb_text = get_sub_field('main_banner__title');      
    ?>    
    <picture class="main-banner__image">
      <?php if ($mb_image_mobile) : ?>
        <source media="(max-width: 799px)" srcset="<?php echo esc_url($mb_image_mobile['url']); ?>">
      <?php endif;?>
      <?php if ($mb_image) : ?>
        <img src="<?php echo esc_url($mb_image['url']); ?>" alt="<?php echo esc_attr($mb_image['alt']); ?>"/>
      <?php endif; ?>
    </picture>
    <?php if ($mb_text) : ?>
      <div class="main-slider__caption container">
        <h1 class="main-slider__title">
        <span><?php echo $mb_text; ?></span>  
        </h1>
      </div>
    <?php endif; ?>
  <?php
  endwhile;
  ?>
</section>
<?php
endif;

