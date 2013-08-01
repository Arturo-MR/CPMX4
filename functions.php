<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar',
'before_title' => '<header class="widget-title">',
'after_title' => '</header><div class="contenedor-widget">',
'before_widget' => '<div class="widget">',
'after_widget' => '</div></div>',
));

?>