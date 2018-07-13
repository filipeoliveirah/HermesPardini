<?php $wp_query = new WP_Query(); ?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <div class="visible-lg">
    <ol class="carousel-indicators">
    <?php
        $inc_slide = 0;
        $args_slider = array( 
          'category_name' => 'destaque',
          'posts_per_page'=> 3
        );
        $wpquery = new WP_Query($args_slider);
        while ($wpquery->have_posts()) : $wpquery->the_post();
      ?>  
      <li data-target="#myCarousel" data-slide-to="<?php echo $inc_slide; ?>" class="<?php if($inc_slide == 0): echo 'active';  endif;?>"></li>
      <?php
        $inc_slide++;
        endwhile; wp_reset_postdata();
      ?>
    </ol>
  </div>
  <div class="carousel-inner" role="listbox">
    <?php 
      $inc = 0;
      $array_slider = array( 
        'category_name' => 'destaque',
        'posts_per_page'=> 3
      );
      $wp_slider = new WP_Query($array_slider);
      while ($wp_slider->have_posts()) : $wp_slider->the_post();
    ?>
    <div class="item <?php if($inc == 0): echo 'active'; endif; ?>">
      <?php the_post_thumbnail('full'); ?>
      <div class="container">
        <div class="carousel-caption">
          <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
        </div>
      </div>
    </div>
    <?php
    $inc++;
    endwhile; wp_reset_postdata();
    ?> 
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Voltar</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div><!-- /.carousel -->