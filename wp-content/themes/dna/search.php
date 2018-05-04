<?php get_header(); ?>

<div class="container conteudo-categoria">
  <div class="row">
    <div class="row">
      <h4><?php single_cat_title(' Navegando na categoria '); ?></h4>
    </div>
    <div class="col-md-8" id="posts-games">
      
      <!--search-->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>     
      <div class="media">
        <div class="media-left">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('img-games', array('class' => 'media-object img-responsive img-thumbnail')); ?>
          </a>
        </div>
        <div class="media-body">
          <h1 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <button type="button" class="btn btn-primary btn-xs"><?php echo rwmb_meta('subtitulo'); ?></button>
          <p class="visible-lg"><?php echo rwmb_meta('resumo'); ?></p>
        </div>
      </div>
    <?php endwhile; else: ?>
    <p>Desculpe, nenhum post corresponde aos seus critérios.</p>
    <?php endif; ?>
    <!--/fim search-->
    <br>
    <?php wordpress_pagination(); ?>

    </div>

    <?php get_sidebar(); ?>

  </div>
</div>

<?php get_footer(); ?>