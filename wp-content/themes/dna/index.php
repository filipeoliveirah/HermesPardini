
<?php
    get_header();
    include_once("inc/slider-home.php"); 
    include_once("inc/area-de-destaque.php");
?>

<a href="https://hermespardini.com.br/chatmg/" target="_blank">
    <img src="<?php bloginfo('url'); ?>/wp-content/themes/dna/images/chat_hermespardinibtn.png" style="position:fixed; float:right; right: 0; top: 400px; z-index: 9">
</a>

<div class="container">
    <div class="col-md-8 col-sm-12">
        <div class="areas-de-destaque"><span class="clientes">Clientes</span></div>
        <?php
            $post_list = array(
                'posts_per_page' => 4
            );
            $posts_slides = new WP_Query($post_list);
            while($posts_slides->have_posts()): $posts_slides->the_post();
        ?>
        <div class="col-sm-6 col-md-6 card" style="min-height: 500px">
            <div class="informacoes-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?> </a>
            </div>
            <div class="caption">
                <a href="<?php the_permalink(); ?>"> <h4><?php the_title(); ?></h4> </a>
                <span><i class="far fa-clock"></i> <?php the_time("d/m/Y"); ?></span>
                <p> <a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a> </p>
                <!--<a href="<?php the_permalink(); ?>"> class="btn btn-primary clientes" role="button">Leia mais</a>-->
            </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>    
    <?php get_sidebar(); ?>    
</div>

<?php
get_footer();
?>