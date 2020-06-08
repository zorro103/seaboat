<?php

// https://developer.wordpress.org/themes/advanced-topics/child-themes/#3-enqueue-stylesheet

// JE CREE UNE FONCTION CALLBACK
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

// ET JE DEMANDE A WORDPRESS D'ACTIVER LA FONCTION QUAND IL ARRIVE SUR L'ETAPE/EVENEMENT wp_enqueue_scripts
// https://developer.wordpress.org/reference/functions/add_action/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*

// EN JS
function mafonctioncallback ()
{
    console.log('TU AS CLICKE');
}

balise.addEventListener('click', mafonctioncallback);


*/