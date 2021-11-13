
<?php
  /**
   *
   * - Bloque donación-> block_donation
        * -Imagen block_donation__image
        * -Titulo -> block_donation__title
        * -Texto -> block_donation__text
        * -Bloque donación mosaico (repeater)
          * -Bloque donación mosaico imagen -> block_donation_mosaic__image
          * -Bloque donación mosaico texto -> block_donation_mosaic__text

  */

  $block_donation = get_field('block_donation');
  if ($block_donation) : ?>
  <section class=" container-fluid no-gutters">
    <?php
    while(have_rows('block_donation')): the_row();
        $ms_image = get_sub_field('block_donation__image');
        $ms_title = get_sub_field('block_donation__title');
        $ms_text = get_sub_field('block_donation__text');
        $ms_mosaico = get_sub_field('block_donation_mosaic');

     ?>
      <div class="">
        
        <div class="col-lg-6">
          <div class="block-donation__text">
            <?php if ($ms_text) : ?>
              <h2>
                <?php echo $ms_title; ?>
              </h2>
              <p><?php echo $ms_text; ?></p>
            <?php endif; ?> 
            <?php if ($ms_mosaico) : ?>  
                    <?php while(have_rows('block_donation_mosaic')): the_row();
                      $text = get_sub_field('block_donation_mosaic__text');
                      $thumbnail = get_sub_field('block_donation_mosaic__image');
                    ?>
                    <div class="col-lg-6">
                      <article>
                        <figure class="block-donation__image img-responsive">
                          <?php if ($thumbnail) : ?>
                            <img src="<?php echo esc_url($thumbnail['url']); ?>"
                              alt="<?php echo esc_attr($thumbnail['alt']); ?>"/>
                          <?php endif; ?>
                        </figure>
                        <div class="block-donation__caption">
                        <p class="__title"><?php echo $text; ?></p>
                      </article>
                      </div>
                      <?php endwhile; ?>
                    
                 
              <?php endif; ?> 
          </div>
        </div>
        <div  class="col-lg-6 block-donation__mosaic">
          <picture class="img-responsive">          
            <?php if ($ms_image) : ?>
              <img src="<?php echo esc_url($ms_image['url']); ?>" alt="<?php echo esc_attr($ms_image['alt']); ?>"/>
            <?php endif; ?>
          </picture>
        </div>
      </div>
      <?php
    endwhile; ?>
  </section>
<?php
  endif;
