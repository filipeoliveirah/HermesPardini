<div class="col-md-4 sidebar-posts">
      <?php       
            $perfilCliente = single_cat_title("", false);
            if($perfilCliente == "Médicos"){
                  $perfilCliente = "medicos";      
            }
            
            elseif($perfilCliente == "Parceiros"){
                  $perfilCliente = "parceiros";
            }            
                  
            elseif($perfilCliente == "Clientes"){
                  $perfilCliente = "clientes";
            }
            
            else{
                  $perfilCliente = "clientes";                  
            }
            
      ?>     
      <div class="areas-de-destaque"><span class="<?php echo $perfilCliente; ?>">Postagens Recentes <?php echo $perfilCliente; ?></span></div>      
      <?php
      $sidebar = new WP_Query(array(            
      'posts_per_page' => 5,      
      'category_name' => $perfilCliente
      ));
      while($sidebar->have_posts()) : $sidebar->the_post();
      ?>      
            <div class="col-md-5">
                  <div class="informacoes-img informacoes-img-small">
                        <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail('medium', ['class' => 'img-responsive responsive--full thumbnail']); ?>
                        </a>
                  </div>
            </div>
            <div class="col-md-7">
                  <h5><?php the_title(); ?></h5>
                  <p><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></p>            
            </div>
            <div class="col-md-12">      
                  <hr>
            </div>
      <?php
      endwhile; wp_reset_postdata();
      ?>
</div>
