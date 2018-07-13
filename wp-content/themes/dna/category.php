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
      <?php
          global $post;
          $postcat = get_the_category( $post->ID );
          if(esc_html( $postcat[0]->name ) == 'Destaque'){
            $perfilCliente = esc_html( $postcat[1]->name );
            $postcat = $perfilCliente;
          }else{
            $perfilCliente = esc_html( $postcat[0]->name );
            $postcat = $perfilCliente;
          }          
          
          //$perfilCliente = single_cat_title("", false);
          if($perfilCliente == 'Médicos'){
            $perfilCliente = "medicos";      
          }          
          elseif($perfilCliente == 'Parceiros'){
            $perfilCliente = "parceiros";
          }                            
          elseif($perfilCliente == 'Clientes'){
            $perfilCliente = "clientes";
          }          
          else{
            $perfilCliente = "clientes";                
          }              
        ?>   
        <div class="areas-de-destaque"><span class="<?php echo $perfilCliente; ?>"><?php echo $postcat; ?></span></div>        
        <?php
            $c = 1;
            $posts_slides = new WP_Query(array(
            'posts_per_page' => 4,
            'category_name' => $perfilCliente
            ));
            while($posts_slides->have_posts()) : $posts_slides->the_post();
        ?>
        <div class="col-sm-6 col-md-6" style="<?php if($c%2 == 0): echo "min-height: 520px"; endif;?>">
          <div class="thumbnail">
          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?> </a>
            <div class="caption">
            <a href="<?php the_permalink(); ?>"> <h4><?php the_title(); ?></h4> </a>
              <p> <a href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?> </a></p>
                <!--<a href="<?php the_permalink(); ?>" class="btn btn-primary clientes" role="button">Leia mais</a>-->
            </div>
          </div>
        </div>
        <?php $c++; endwhile; wp_reset_postdata(); ?>        
        <?php wordpress_pagination(); ?>
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer();?>