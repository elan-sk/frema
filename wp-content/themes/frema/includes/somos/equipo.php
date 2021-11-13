<section id="equipo">
  <header class="text-center">
     <h2>
       <span><?php the_field('titulo') ?></span>
     </h2>
  </header>
    <div class="container-team">
    <?php
      while(have_rows('equipo')): the_row();

        ?>
        <div class="item">
          <figure>
            <img src="<?php the_sub_field('foto') ?>" alt="">
            
          </figure>
          <div class="caption">
           <?php the_sub_field('informacion') ?>
          </div>
        </div>
        <?php
        endwhile;
        ?>
    </div>
</section>