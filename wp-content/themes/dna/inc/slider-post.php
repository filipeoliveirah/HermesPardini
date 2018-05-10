<?php
  if(have_posts()) : while(have_posts()) : the_post();
?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <?php the_post_thumbnail('full', ['class' => 'img-responsive responsive--full']); ?>
      <div class="container">
        <div class="carousel-caption">
          <span class="btn btn-default"><?php the_category(", "); ?></span>
          <h1><?php the_title(); ?></h1>          
        </div>
      </div>
    </div>
  </div>
</div><!-- /.carousel -->
<?php endwhile; endif; ?>