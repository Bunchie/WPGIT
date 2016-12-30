<?php

wp_enqueue_script('jquery-3.1.1.min', get_template_directory_uri() . '/js/jquery-3.1.1.min.js');
wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap/bootstrap.min.css');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

add_action('wp_enqueue_script', 'wp_enqueue_style');

add_theme_support('post-thumbnails');

register_nav_menu('menu', 'Menu');
register_nav_menu('menu-ask', 'Menu-Ask');


function helloWorld()
{
    echo('<details><h1>hello world!</h1></details>');
}

add_shortcode('helloWorld', 'helloWorld');

register_sidebar(array(
    'name' => "Sidebar",
    'id' => 'sidebar',
    'description' => 'My sidebar',
    'before_widget' => '<div class = "vidget" >',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'));

?>