<div class="area-de-destaque">
    <div class="container">        
        <!--Post Clientes-->
        <?php
        $inc_slide = 0;
        $clientes = array( 
          'category_name' => 'clientes',
          'posts_per_page'=> 1
        );
        $wp_query->query($clientes);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="col-md-4 col-lg-4">
            
            <div class="informacoes">
                <span style="background: #b91f2e"><?php the_category(', '); ?></span>
                <h2><?php the_title(); ?></h2>
                <p><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></p>
            </div>
            <div class="informacoes-img">
                <?php the_post_thumbnail(array(400, 400), ['class' => 'img-responsive']); ?>
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
        $wp_query->query($medicos);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="col-md-4 col-lg-4">
            
            <div class="informacoes">
                <span style="background:#01595b"><?php the_category(', '); ?></span>
                <h2><?php the_title(); ?></h2>
                <p><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></p>
            </div>
            <div class="informacoes-img">
                <?php the_post_thumbnail('medium', ['class' => 'img-responsive']); ?>
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
        $wp_query->query($parceiros);
        while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
        <div class="col-md-4 col-lg-4">
            <div class="informacoes">
                <span style="background: #7c438a"><?php the_category(', '); ?></span>
                <h2><?php the_title(); ?></h2>
                <p><i class="far fa-clock"></i> <?php the_date('d/m/Y'); ?></p>
            </div>
            <div class="informacoes-img">
                <?php the_post_thumbnail('medium', ['class' => 'img-responsive']); ?>
            </div>
        </div>
        <?php
        endwhile; wp_reset_postdata();
        ?>
    </div>    
</div>
