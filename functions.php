<?php
function mytheme_setup(){
    
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    
    add_theme_support('editor-styles');
    add_editor_style('editor-style.css');
    
    add_theme_support('title-tag');
    add_theme_support('html5',array(
        'style',
        'scripts'
    ));
    
    add_theme_support('post-thumbnails');
    
    add_theme_support('align-wide');

    register_nav_menus( array(
        'primary'=>'ナビゲーション'
    ) );
    
}
add_action('after_setup_theme','mytheme_setup');

function mytheme_enqueue(){
    
    wp_enqueue_style(
        'dashicons'
    );
    
    wp_enqueue_style(
        'mytheme_style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_theme_file_path('style.css'))
    );
    
    
    wp_enqueue_style(
        'myfonts',
        "https://fonts.googleapis.com/css?family=Poiret+One&display=swap",
        array(),
        null
    );
    
    wp_enqueue_style(
        'myfonts2',
        "https://fonts.googleapis.com/css?family=Montserrat&display=swap",
        array(),
        null
    );
    
    
    
    
}

add_action('wp_enqueue_scripts','mytheme_enqueue');

function mytheme_widgets(){
    register_sidebar(array(
         'id'=>'sidebar-1',
    'name'=>'フッターメニュー',
    'before_widget'=>
    '<section id="%1$s" class="widget %2$s">',
    'after_widget'=>
    '</section>'
    ));
}

add_action('widgets_init','mytheme_widgets');

