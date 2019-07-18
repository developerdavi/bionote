<?php


function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
} 


function endsWith($string, $endString) 
{ 
    $len = strlen($endString); 
    if ($len == 0) { 
        return true; 
    } 
    return (substr($string, -$len) === $endString); 
} 

function base_url() {
    // echo '/bionote';
}

add_theme_support( 'post-thumbnails' ); 

function custom_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'custom_excerpt_length');

$uri = $_SERVER['REQUEST_URI'];
if (!endsWith($uri, '/'))
    $uri.='/';
$page = explode('/', $uri);
end($page);
$page = prev($page);

define('page',$page);

function is($str) {
    return $str == page;
}

function wpb_search_filter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','wpb_search_filter');