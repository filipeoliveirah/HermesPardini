<form class="navbar-form navbar-left" role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" class="form-control" placeholder="Digite a pesquisa" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input type="submit" class="btn btn-danger" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
    </div>
</form>