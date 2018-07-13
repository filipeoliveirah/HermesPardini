<?php get_header();?>
<div class="container">
    <div class="col-md-12">
        
        <div class="areas-de-destaque"><span class="clientes">Materiais</span></div>        
        <?php
          $c = 1;
          while (have_posts()) : the_post(); 
        ?>
        <div class="col-sm-4 col-md-4" style="<?php if($c%3 == 0): echo "min-height: 250px"; endif;?>">
          <div class="thumbnail">
          <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>"> <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?> </a>
            <div class="caption">
            <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>"> <h4><?php the_title(); ?></h4> </a>
            </div>
          </div>
        </div>
        <?php $c++; endwhile; wp_reset_postdata(); ?>        
        <?php wordpress_pagination(); ?>
    </div>
    
    <?php //get_sidebar(); ?>
    
</div>

<?php get_footer();?>