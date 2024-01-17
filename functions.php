<?php
    // Incluir Bootstrap css directo del proyecto
    function bootstrap_css() {
        wp_enqueue_style(
            'bootstrap_css',
            get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
            array(),
            '4.1.3'
        );
    }

    add_action( 'wp_enqueue_scripts', 'bootstrap_css');

    // Incluir Bootstrap js directo del proyecto
    function bootstrap_js() {
        wp_enqueue_script(
            'bootstrap_js',
            get_stylesheet_directory_uri() . '/js/bootstrap.min.js',
            array(),
            '4.1.3'
        );
    }

    add_action( 'wp_enqueue_scripts', 'bootstrap_js');
?>