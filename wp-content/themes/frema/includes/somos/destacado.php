<?php

while( have_rows('destacado') ): the_row();
?>
<section id="destacado" style="background-image: url('<?php the_sub_field('fondo') ?>')">
    <div class="container">
        <div class="info">
           <?php the_sub_field('informacion') ?>
        </div>
    </div>
    <?php endwhile; ?>
</section>