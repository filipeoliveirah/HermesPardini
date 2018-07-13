<?php get_header(); ?>
<?php include_once("inc/slider-post.php") ?>

<div class="container">
  <div class="row">    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="col-md-8 conteudo-single">
      <p><?php wp_custom_breadcrumbs(); ?></p>
      <p><?php the_content(); ?></p>
    </div>
    <?php endwhile; else: ?>
    <?php endif; ?>

    <?php get_sidebar(); ?>
    
  </div>
</div>

<?php get_footer(); ?>