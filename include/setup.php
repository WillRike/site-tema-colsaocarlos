<?php

function wc_theme_styles()
{
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    // wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('template_css', get_template_directory_uri() . '/assets/css/template.css');
    wp_enqueue_style('single_css', get_template_directory_uri() . '/assets/css/single.css');
    wp_enqueue_style('sidebar_css', get_template_directory_uri() . '/assets/css/sidebar.css');
    wp_enqueue_style('page_css', get_template_directory_uri() . '/assets/css/page.css');

    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    // wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script('script_js', get_template_directory_uri() . '/assets/js/script.js');
}

function wc_after_setup()
{

    add_theme_support('post-thumbnails');
    add_theme_support("title-tag");
    add_theme_support("custom-logo");

    register_nav_menu("primary", "Menu Principal");
    register_nav_menu("top", "Menu Superior");
}

function wc_widgets()
{
    register_sidebar(array(
        'name' => __('Sidebar lateral', 'colsaocarlos'),
        'id' => 'wp_sidebar',
        'description' => __('Sidebar para o tema CSC', 'colsaocarlos'),

        'before_title' => '<h4 class="widget_title" >',
        'after_title' => '</h4>',

        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ));
}
