<?php

// Imagens dos posts
add_theme_support( 'post-thumbnails' );

// pegar o arquivo marca header
require get_template_directory() . '/inc/marca.php';

// pegar o arquivo metabox.php
require get_template_directory() . '/inc/metabox.php';

// Registrar Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'dna' ),
) );

// Links úteis rodape
register_nav_menus( array(
    'clientes' => __( 'Clientes', 'dna' ),
) );
register_nav_menus( array(
    'apoio-a-parceiros' => __( 'Apoio a parceiros', 'dna' ),
) );
register_nav_menus( array(
    'medicos' => __( 'Médicos', 'dna' ),
) );
// Links úteis rodape
register_nav_menus( array(
    'links-uteis' => __( 'Links Úteis', 'movaVideo' ),
) );
register_nav_menus( array(
    'institucional' => __( 'Institucional', 'dna' ),
) );

// Registro de sidebar
if ( function_exists('register_sidebar') )
{
  register_sidebar(array(
      'name' => __( 'Sidebar'),
      'id' => 'sidebar-internas',
      'description' => __( 'Elementos da sidebar single e page'),
      'before_title' => '<h2>',
      'after_title' => '</h2>',
  ) );                    
}

function banner_widgets_init() {
  register_sidebar( array(
      'name'          => __( 'Banner', 'dna' ),
      'id'            => 'banner',
      'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<p class="blog-widget-subtitle">',
      'after_title'   => '</p>',
  ) );
}
add_action( 'widgets_init', 'banner_widgets_init' );

// GALERIA DE IMAGENS
/**
* Add title back to images
*/
function pexeto_add_title_to_attachment( $markup, $id ){
    $att = get_post( $id );
    return str_replace('<a ', '<a title="'.$att->post_title.'" ', $markup);
}
add_filter('wp_get_attachment_link', 'pexeto_add_title_to_attachment', 10, 5);

/* PAGINAÇÃO WORDPRESS */
function wordpress_pagination() {
  global $wp_query;

  $big = 999999999;

  echo paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages
  ) );
}


function wp_custom_breadcrumbs() {
 
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '&raquo;'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
   
    global $post;
    $homeLink = get_bloginfo('url');
   
    if (is_home() || is_front_page()) {
   
      if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
   
    } else {
   
      echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
   
      if ( is_category() ) {
        $thisCat = get_category(get_query_var('cat'), false);
        if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
        echo $before . 'categoria "' . single_cat_title('', false) . '"' . $after;
   
      } elseif ( is_search() ) {
        echo $before . 'Search results for "' . get_search_query() . '"' . $after;
   
      } elseif ( is_day() ) {
        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
   
      } elseif ( is_month() ) {
        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
   
      } elseif ( is_year() ) {
        echo $before . get_the_time('Y') . $after;
   
      } elseif ( is_single() && !is_attachment() ) {
        if ( get_post_type() != 'post' ) {
          $post_type = get_post_type_object(get_post_type());
          $slug = $post_type->rewrite;
          echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
          if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
        } else {
          $cat = get_the_category(); $cat = $cat[0];
          $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
          if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
          echo $cats;
          if ($showCurrent == 1) echo $before . get_the_title() . $after;
        }
   
      } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;
   
      } elseif ( is_attachment() ) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
   
      } elseif ( is_page() && !$post->post_parent ) {
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
   
      } elseif ( is_page() && $post->post_parent ) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
          $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
        }
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
   
      } elseif ( is_tag() ) {
        echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
   
      } elseif ( is_author() ) {
         global $author;
        $userdata = get_userdata($author);
        echo $before . 'Articles posted by ' . $userdata->display_name . $after;
   
      } elseif ( is_404() ) {
        echo $before . 'Error 404' . $after;
      }
   
      if ( get_query_var('paged') ) {
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
        echo __('Page') . ' ' . get_query_var('paged');
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
      }
   
      echo '</div>';
   
    }
  } // end wp_custom_breadcrumbs() 
  
?>


