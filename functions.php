<?php
if(!defined('ABSPATH'))exit;
require_once get_template_directory().'/inc/translations.php';
require_once get_template_directory().'/inc/custom-post-types.php';
require_once get_template_directory().'/inc/theme-options.php';

function shams_theme_setup(){
  add_theme_support('title-tag');add_theme_support('post-thumbnails');add_theme_support('custom-logo');
  add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));
  register_nav_menus(array('primary'=>'Primary Menu'));
}
add_action('after_setup_theme','shams_theme_setup');

function shams_enqueue_assets(){
  wp_enqueue_style('shams-fonts','https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',array(),null);
  wp_enqueue_script('tailwind-cdn','https://cdn.tailwindcss.com',array(),null,false);
  wp_add_inline_script('tailwind-cdn',"tailwind.config={theme:{extend:{colors:{border:'hsl(var(--border))',input:'hsl(var(--input))',ring:'hsl(var(--ring))',background:'hsl(var(--background))',foreground:'hsl(var(--foreground))',primary:{DEFAULT:'hsl(var(--primary))',foreground:'hsl(var(--primary-foreground))'},muted:{DEFAULT:'hsl(var(--muted))',foreground:'hsl(var(--muted-foreground))'},accent:{DEFAULT:'hsl(var(--accent))',foreground:'hsl(var(--accent-foreground))'},card:{DEFAULT:'hsl(var(--card))',foreground:'hsl(var(--card-foreground))'}},fontFamily:{sans:['Tajawal','sans-serif'],display:['Playfair Display','serif']}}}}");
  wp_enqueue_style('shams-style',get_stylesheet_uri(),array(),'1.0.0');
  wp_enqueue_script('shams-main',get_template_directory_uri().'/assets/js/main.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','shams_enqueue_assets');

function shams_css_variables(){
  echo '<style>:root{--background:40 25% 92%;--foreground:30 10% 12%;--card:40 20% 96%;--primary:42 55% 50%;--primary-foreground:40 25% 96%;--muted:40 15% 85%;--muted-foreground:40 10% 45%;--border:40 15% 82%;--input:40 15% 82%;--radius:.5rem}</style>';
}
add_action('wp_head','shams_css_variables',1);

function shams_body_classes($classes){
  if(shams_get_current_language()==='ar')$classes[]='rtl';
  return $classes;
}
add_filter('body_class','shams_body_classes');

function shams_default_image($type){
  $d=array('hero_car'=>get_template_directory_uri().'/assets/images/hero-car.png','hero_hotel'=>get_template_directory_uri().'/assets/images/hero-hotel.jpg','hero_apartment'=>get_template_directory_uri().'/assets/images/hero-apartment.jpg','luxury_car'=>get_template_directory_uri().'/assets/images/luxury-car.jpg');
  return isset($d[$type])?$d[$type]:'';
}
function shams_get_option($key,$default=''){
  $v=get_option('shams_'.$key,$default);return $v?$v:$default;
}
function shams_get_image($type){
  $c=get_option('shams_'.$type.'_image','');return $c?$c:shams_default_image($type);
}
add_filter('excerpt_length',function($l){return 20;});
add_filter('excerpt_more',function($m){return '...';});
