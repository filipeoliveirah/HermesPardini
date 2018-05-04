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

?>