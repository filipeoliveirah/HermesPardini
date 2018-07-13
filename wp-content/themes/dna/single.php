<?php
  get_header();
  include_once("inc/slider-post.php");
?>
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
        <div class="areas-de-destaque">
          <span class="<?php echo $perfilCliente; ?>">
            <?php the_category( ', ' ); ?>
          </span>
        </div>        
        <?php
          if ( have_posts() ) :
                    
          while ( have_posts() ) : the_post();
        ?>
         <div class="col-md-12 conteudo-page">
          <?php the_content(); ?>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>        
        <?php wordpress_pagination(); ?>
    </div>
    
    <?php get_sidebar(); ?>
    
</div>

<?php get_footer();?>