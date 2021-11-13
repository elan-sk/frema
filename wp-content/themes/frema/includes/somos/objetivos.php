<section id="objetivos">
    <div class="container-objetivos">
         <header>
            <h2>
              <?php the_field('titulo_objetivos') ?>
            </h2>
        </header>
        <div class="objetivos">
        <?php
      while(have_rows('objetivos')): the_row();

        ?>
        <div class="item">
            <figure>
              <img src="<?php the_sub_field('icono') ?>" alt="">
               
            </figure>
            <div class="caption">
               <?php the_sub_field('informacion') ?>
            </div>
        </div>
        <?php
        endwhile;
        ?>
        </div>
    </div>
</section>