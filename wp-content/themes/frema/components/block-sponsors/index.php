<?php
/*
  Video -> single__video
*/

$block_sponsor = get_field('block_sponsor');

if ($block_sponsor) : ?>
    

<section class="">
<div class="container">
    <div class="row">
      <?php while(have_rows('block_sponsor')): the_row();
          $title = get_sub_field('block_sponsor__title');
          $source = get_sub_field('block_sponsor__video');
        ?>
    <div class="block-donation__text">
            <?php if ($title) : ?>
              <h2>
                <?php echo $title; ?>
              </h2>
            <?php endif; ?> 

            <?php if ($source) : ?>
        
          <div class="block-donation__image">
            
                <iframe width="100%" height="500" class="block-video__iframe"
                    src="https://www.youtube.com/embed/<?php echo $source; ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write;
                    encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
              <?php endif; ?> 
        
      </div>
     
    </div>
  </div>
  <?php
    endwhile; ?>
</section>
<?php
endif;