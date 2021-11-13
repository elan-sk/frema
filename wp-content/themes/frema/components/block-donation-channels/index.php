<?php
/**
 * Canales de donación logos -> block_donation_channels
 *  - Título -> block_donation_channels__title
 *  - block_donation_channels_thumbs
 *    - Título Canales de Donación -> block_donation_channels_thumbs__title
 *    - Logo Canales de Donación -> block_donation_channels_thumbs__image
 *    - URL Canales de Donación -> block_donation_channels_thumbs__link 
 */

$canales = get_field('block_donation_channels');

if ($canales) : ?>
<section class="block-channel">
  <div class="container">
    <div class="row">
      <?php while(have_rows('block_donation_channels')): the_row();
        $title = get_sub_field('block_donation_channels__title');
        $thumbnail = get_sub_field('block_donation_channels_thumbs');
        $url = get_sub_field('block_donation_channels_thumbs__link');
        $logo  = get_sub_field('block_donation_channels_thumbs__image');
        $canal = get_sub_field('block_donation_channels_thumbs__title');
      ?>
      <div class="block-channel__cambio">
      <div class="block-channel__text">
            <?php if ($title) : ?>
              <h2>
                <?php echo $title; ?>
              </h2>
            <?php endif; ?> 
        <div class="col-lg-4">
            <?php if ($thumbnail) : ?>              
                <div class="container">
                  <div class="row">
                    <?php while(have_rows('block_donation_channels_thumbs')): the_row();
                      $canal = get_sub_field('block_donation_channels_thumbs__title');
                      $thumbnail = get_sub_field('block_donation_channels_thumbs__image');
                    ?>
                    <div class="col-lg-4">
                      <article>
                        <figure class="block-channel__image">
                          <?php if ($thumbnail) : ?>
                            <img src="<?php echo esc_url($thumbnail['url']); ?>"
                              alt="<?php echo esc_attr($thumbnail['alt']); ?>"/>
                          <?php endif; ?>
                        </figure>
                        <div class="block-channel__content">
                          <h3 class="block-channel__title"><?php echo $canal; ?></h3>
                          <a data-fancybox="dialog" data-src="#dialog-content" href="<?php echo $url; ?>" class="" target="_blank">
                          <span class="">Donar</span>
                        </a>
                                                  <!-- Dialog Contents -->
                          <div id="dialog-content" style="display:none;max-width:500px;">
                          <h3 class="block-channel__title"><?php echo $canal; ?></h3>
                              <?php the_sub_field('informacion')?>
                          </div>

                          <!-- Dialog Trigger -->

                      </article>
                      </div>
                    <?php endwhile; ?>
                </div>
                </div>   
              <?php endif; ?> 
          </div>
        </div>
        <div class="col-lg-4">
          <picture class="block_donation__image img-responsive">          
            <?php if ($logo) : ?>
              <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>"/>
              
            
            <?php endif; ?>
          </picture>
          
        </div>
        
      </div>
      <?php
    endwhile; ?>
  </section>
  <?php
  endif;




