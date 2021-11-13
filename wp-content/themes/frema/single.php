<?php 	get_template_part('includes/header');?>
<div class="col-md-12 text-left">
    <a href="/blog"> < Volver</a>
  </div>
<div class="container">

  <div class="row">
    <div class="col-md-12">

    <div class="container-single-content text-center">
    <picture class="news__image image-ar image-ar--32">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </pictute>
    </div>
      <div id="content" role="main" class="col-md-12 col-sm-12">
        <div class="caption ">
          <h2 class="headline headline--4">
            <?php the_title(); ?>
          </h2>
          <?php the_content(); ?>
        </div>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->

</div><!-- /.container -->


<?php
get_template_part('includes/loops/news-related');
get_template_part('includes/footer'); ?>
