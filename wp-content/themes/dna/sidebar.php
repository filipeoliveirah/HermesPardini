<div class="col-md-4 sidebar-posts">
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
      <div class="areas-de-destaque"><span class="<?php echo $perfilCliente; ?>">Postagens Recentes</span></div>      
      <?php
     
      $array_sidebar = array(            
            'posts_per_page' => 5,      
            'category_name' => $perfilCliente
      );
      $sidebar = new WP_Query($array_sidebar);
      while($sidebar->have_posts()) : $sidebar->the_post();
      ?>      
            <div class="col-md-5">
                  <div class="informacoes-img informacoes-img-small">
                        <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail('medium', ['class' => 'img-responsive responsive--full']); ?>
                        </a>
                  </div>
            </div>
            <div class="col-md-7">
            <a href="<?php the_permalink(); ?>"> <h4><?php the_title(); ?></h4> </a>
                  <span><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></span>            
            </div>
            <div class="col-md-12">      
                  <hr>
            </div>
      <?php
      endwhile; wp_reset_postdata();
      ?>

      
</div>

<div class="col-md-4 sidebar-posts">
      <div class="areas-de-destaque"><span class="<?php echo $perfilCliente; ?>">Acesse aqui</span></div>      
            <div class="col-md-12 img-responsive align-center">
                  <?php if ( dynamic_sidebar('banner') ) : else : endif; ?>
            </div>
      </div>
</div>
