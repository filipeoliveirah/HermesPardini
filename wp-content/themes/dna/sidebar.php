<div class="col-md-4 sidebar-posts">
      <div class="titulos"><span>Posts recentes</span></div>
      <?php
      $posts_slides = new WP_Query(array(            
      'posts_per_page' => 5
      ));
      while($posts_slides->have_posts()) : $posts_slides->the_post();
      ?>
      <a href="<?php the_permalink(); ?>">
      <div class="col-md-4">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full']); ?></a>
      </div>
      <div class="col-md-8">
            <h3><?php the_title(); ?></h3>
            <p><?php the_date('d/m/Y'); ?></p>            
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
</div>

<?php
if ( is_active_sidebar('sidebar-internas') ) {
      dynamic_sidebar('sidebar-internas');
}
?>
