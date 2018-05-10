<?php get_header();?>

<?php include_once("inc/slider-home.php");?>
<?php include_once("inc/area-de-destaque.php");?>

<div class="container">
    <div class="col-md-8 col-sm-12">
        <div class="areas-de-destaque"><span class="clientes">Clientes</span></div>
        <?php
            $c = 1;
            $posts_slides = new WP_Query(array(
            'posts_per_page' => 4
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
        ?>
        <div class="col-sm-6 col-md-6 card" style="min-height: 600px">
            <div class="informacoes-img">
                <?php the_post_thumbnail('medium', ['class' => 'img-responsive thumbnail']); ?> 
            </div>
            <div class="caption">
              <h4><?php the_title(); ?></h4>
              <p> <?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary clientes" role="button">Leia mais</a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer();?>