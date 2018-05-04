<?php

    add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
    function your_prefix_meta_boxes( $meta_boxes ) {
        $meta_boxes[] = array(
            'title'      => __( 'Informações Adicionais', 'textdomain' ),
            'post_types' => 'post',
            'fields'     => array(
                array(
                    'id'   => 'subtitulo',
                    'name' => __( 'SubTitulo', 'textdomain' ),
                    'type' => 'text',
                ),
                array(
                    'id'   => 'resumo',
                    'name' => __( 'Resumo', 'textdomain' ),
                    'type' => 'textarea',
                ),

                // VÍDEO
                array(
                    'name' => esc_html__( 'Vídeo do Youtube', 'your-prefix' ),
                    'id'   => "{$prefix}oembed",
                    'desc' => esc_html__( 'URL do Vídeo', 'your-prefix' ),
                    'type' => 'oembed',
                ),

            ),
        );
        return $meta_boxes;
    }

?>