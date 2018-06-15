<div class="area-de-destaque">
    <div class="container">        
        <!--Post Clientes-->
        <?php
        $inc_slide = 0;
        $clientes = array( 
          'category_name' => 'clientes',
          'posts_per_page'=> 1
        );
        $wp_query_clientes = new WP_Query($clientes);
        while ($wp_query_clientes->have_posts()) : $wp_query_clientes->the_post();
        ?>
        <div class="col-md-4 col-lg-4">            
            <div class="informacoes">
                <span style="background: #b91f2e"><?php the_category(', '); ?></span>
                <h2><?php the_title(); ?></h2>
                <p><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></p>
            </div>
            <div class="informacoes-img">
                <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
            </div>
        </div>
        <?php
        endwhile; wp_reset_postdata();
        ?>
        <!--Post Médicos-->
        <?php
        $inc_slide = 0;
        $medicos = array( 
          'category_name' => 'medicos',
          'posts_per_page'=> 1
        );
        $wp_query_medicos = new WP_Query($medicos);
        while ($wp_query_medicos->have_posts()) : $wp_query_medicos->the_post();
        ?>
        <div class="col-md-4 col-lg-4">
            
            <div class="informacoes">
                <span style="background:#01595b"><?php the_category(', '); ?></span>
                <h2><?php the_title(); ?></h2>
                <p><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></p>
            </div>
            <div class="informacoes-img">
                <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
            </div>
        </div>
        <?php
        endwhile; wp_reset_postdata();
        ?>
        <!--Post Clientes-->
        <?php
        $inc_slide = 0;
        $parceiros = array( 
          'category_name' => 'parceiros',
          'posts_per_page'=> 1
        );
        $wp_query_parceiros = new WP_Query($parceiros);
        while ($wp_query_parceiros->have_posts()) : $wp_query_parceiros->the_post();
        ?>
        <div class="col-md-4 col-lg-4">
            <div class="informacoes">
                <span style="background: #7c438a"><?php the_category(', '); ?></span>
                <h2><?php the_title(); ?></h2>
                <p><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></p>
            </div>
            <div class="informacoes-img">
                <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
            </div>
        </div>
        <?php
        endwhile; wp_reset_postdata();
        ?>
    </div>    
</div>
