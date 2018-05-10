<!--<?php //get_header(); ?>
<div class="container conteudo-categoria">
  <div class="row">
    <div class="row">
      <h4><?php //single_cat_title(' Navegando na categoria: '); ?></h4>
    </div>
    <div class="col-md-8" id="posts-games">
      <?php //if(have_posts()) : while(have_posts()) : the_post(); ?>     
      <div class="media">
        <div class="media-left">
          <a href="<?php //the_permalink(); ?>">
            <?php //the_post_thumbnail('img-games', array('class' => 'media-object img-responsive img-thumbnail')); ?>
          </a>
        </div>
        <div class="media-body">
          <h1 class="media-heading"><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h1>
          <button type="button" class="btn btn-primary btn-xs"><?php //echo rwmb_meta('subtitulo'); ?></button>
          <p class="visible-lg"><?php //echo rwmb_meta('resumo'); ?></p>
        </div>
      </div>
      <?php //endwhile; else: ?>
      <?php //endif; ?>
      <br>
      <?php //wordpress_pagination(); ?>
    </div>
    <?php //get_sidebar(); ?>
  </div>
</div>
<?php //get_footer(); ?>-->

<?php get_header();?>
<div class="container">
    <div class="col-md-8">
        <?php $perfilCliente = single_cat_title("", false);
          if($perfilCliente == "Médicos"){
            $perfilCliente = "medicos";      
          }elseif($perfilCliente == "Parceiros"){
            $perfilCliente = "parceiros";
          }else{
            $perfilCliente = "clientes";
          }
        ?>
        <div class="areas-de-destaque"><span class="<?php echo $perfilCliente; ?>"><?php single_cat_title(""); ?></span></div>        
        <?php
            $c = 1;
            $posts_slides = new WP_Query(array(
            'posts_per_page' => 4
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
        ?>
        <div class="col-sm-6 col-md-6" style="<?php if($c%2 == 0): echo "min-height: 520px"; endif;?>">
          <div class="thumbnail">
          <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?> 
            <div class="caption">
              <h4><?php the_title(); ?></h4>
              <p> <?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary clientes" role="button">Leia mais</a>
            </div>
          </div>
        </div>
        <?php $c++; endwhile; wp_reset_postdata(); ?>        
        <?php wordpress_pagination(); ?>
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer();?>