<section id="banner5050">
    <div class="container-fluid banner5050">
    <?php

     while( have_rows('banner_50-50') ): the_row();
    ?>
        <div class="row">
            <div class="col-md-6 img">
                <figure>
                    <img src="<?php the_sub_field('imagen') ?>" alt="">
                </figure>
               
            </div>
            <div class="col-md-6 info">
               <?php the_sub_field('info') ?>        
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</section>