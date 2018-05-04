<?php get_header();?>

<?php include_once("inc/slider-home.php");?>
<div class="container">
    <div class="col-md-8">
        <div class="areas-de-destaque"><span class="clientes">Clientes</span><span class="btn btn-defatult pull-right">Ver mais</span></div>
        <?php
            $posts_slides = new WP_Query(array(
            'category_name' => 'destaque',
            'posts_per_page' => 2
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
        ?>
        <div class="col-md-6">
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full thumbnail']); ?></a>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer();?>