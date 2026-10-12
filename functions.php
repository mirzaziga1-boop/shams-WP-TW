<?php
if(!defined('ABSPATH'))exit;
function shams_setup(){add_theme_support('title-tag');add_theme_support('post-thumbnails');add_theme_support('custom-logo');add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));register_nav_menus(array('primary'=>'Primary Menu'));}
add_action('after_setup_theme','shams_setup');
function shams_enqueue(){
wp_enqueue_style('shams-fonts','https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',array(),null);
wp_enqueue_script('tailwind-cdn','https://cdn.tailwindcss.com',array(),null,false);
wp_add_inline_script('tailwind-cdn',"tailwind.config={theme:{extend:{colors:{border:'hsl(var(--border))',input:'hsl(var(--input))',ring:'hsl(var(--ring))',background:'hsl(var(--background))',foreground:'hsl(var(--foreground))',primary:{DEFAULT:'hsl(var(--primary))',foreground:'hsl(var(--primary-foreground))'},secondary:{DEFAULT:'hsl(var(--secondary))',foreground:'hsl(var(--secondary-foreground))'},muted:{DEFAULT:'hsl(var(--muted))',foreground:'hsl(var(--muted-foreground))'},accent:{DEFAULT:'hsl(var(--accent))',foreground:'hsl(var(--accent-foreground))'},card:{DEFAULT:'hsl(var(--card))',foreground:'hsl(var(--card-foreground))'}},borderRadius:{lg:'var(--radius)',md:'calc(var(--radius) - 2px)',sm:'calc(var(--radius) - 4px)'},fontFamily:{sans:['Tajawal','sans-serif'],display:['Playfair Display','serif']}}}}");
wp_enqueue_style('shams-style',get_stylesheet_uri(),array(),'1.0.0');
wp_enqueue_script('shams-main',get_template_directory_uri().'/assets/js/main.js',array(),'1.0.0',true);}
add_action('wp_enqueue_scripts','shams_enqueue');
function shams_head_vars(){echo '<style>:root{--background:40 25% 92%;--foreground:30 10% 12%;--card:40 20% 96%;--card-foreground:30 10% 12%;--primary:42 55% 50%;--primary-foreground:40 25% 96%;--secondary:45 20% 28%;--secondary-foreground:40 25% 92%;--accent:42 45% 62%;--accent-foreground:30 10% 12%;--muted:40 15% 85%;--muted-foreground:40 10% 45%;--border:40 15% 82%;--input:40 15% 82%;--ring:42 55% 50%;--radius:.5rem}</style>';}
add_action('wp_head','shams_head_vars',1);
