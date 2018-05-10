<?php get_header(); ?>

<div class="container conteudo-categoria">
  <div class="row">
    <div class="row">
      <h4><?php single_cat_title(' Navegando na categoria '); ?></h4>
    </div>
    <div class="col-md-8">
    <div class="areas-de-destaque"><span>Pesquisa</span></div>    
      <!--search-->
      <?php $c=1; if(have_posts()) : while(have_posts()) : the_post(); ?>  
        <div class="col-sm-6 col-md-6" style="<?php if($c%2 == 0): echo "min-height: 440px"; endif;?>">
          <div class="thumbnail">
          <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?> 
            <div class="caption">
              <h3><?php the_title(); ?></h3>
              <p><a href="<?php the_permalink(); ?>" class="btn btn-primary" role="button">Leia mais</a></p>
            </div>
          </div>
        </div>
    <?php $c++; endwhile; else: ?>
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