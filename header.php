<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <title>   
            <?php bloginfo('name'); ?>
            &raquo; 
            <?php is_front_page() 
                ? bloginfo('description')
                : wp_title(''); 
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
           <h1>Hola mundo soy miapp</h1>
        </header>