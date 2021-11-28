<?php
function twpp_enqueue_styles(){
wp_enqueue_style('reset-sheet', get_template_directory_uri() . "/css/reset.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

function twpp_enqueue_scripts()
{
wp_enqueue_script(
'main-js-sheet',
get_template_directory_uri() . '/js/main.js',
array(),
false,
true
);
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_scripts');


// function replaceImagePath($arg) {
// $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
// return $content;
// }
// add_action('the_content', 'replaceImagePath');?>