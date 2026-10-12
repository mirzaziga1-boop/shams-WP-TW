<?php
$shams_langs = array(
  array('label'=>'English','flag'=>'🇬🇧','active'=>true,'url'=>home_url('/')),
  array('label'=>'العربية','flag'=>'🇸🇦','active'=>false,'url'=>home_url('/?lang=ar')),
  array('label'=>'Bosanski','flag'=>'🇧🇦','active'=>false,'url'=>home_url('/?lang=bs')),
);
?><!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="Your refined gateway to the beauty of Bosnia and Herzegovina"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="min-h-screen relative"><div class="relative z-10">

<header id="site-header" class="site-header">
<div class="shams-container"><div class="flex items-center justify-between">

<a class="flex items-center" href="<?php echo home_url('/'); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shams-albosnia-logo.png" alt="Shams Al Bosnia" width="56" height="56" class="h-12 md:h-14 w-auto"/>
</a>

<nav class="desktop-nav hidden md:flex items-center gap-8">
<a class="nav-link <?php echo is_front_page()?'active':''; ?>" href="<?php echo home_url('/'); ?>">Home</a>
<a class="nav-link <?php echo is_page('accommodations')?'active':''; ?>" href="<?php echo home_url('/accommodations'); ?>">Accommodations</a>
<a class="nav-link <?php echo is_page('cars')?'active':''; ?>" href="<?php echo home_url('/cars'); ?>">Cars</a>
<a class="nav-link <?php echo is_page('bundles')?'active':''; ?>" href="<?php echo home_url('/bundles'); ?>">Bundles</a>
<a class="nav-link <?php echo is_page('about-us')?'active':''; ?>" href="<?php echo home_url('/about-us'); ?>">About Us</a>

<button aria-label="Search" class="text-primary-foreground/80 hover:text-primary transition-colors">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
</button>

<!-- LANGUAGE SWITCHER WITH DROPDOWN -->
<div class="lang-switcher" style="position:relative">
<button class="lang-switcher-btn" style="display:flex;align-items:center;gap:.5rem;padding:.375rem .75rem;border-radius:.375rem;border:none;background:transparent;color:hsl(var(--primary-foreground)/.8);font-size:.875rem;font-weight:500;cursor:pointer;transition:all .2s" aria-haspopup="true">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:1rem;height:1rem"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
<span class="hidden sm:inline">English</span>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:.75rem;height:.75rem;opacity:.6"><path d="m6 9 6 6 6-6"/></svg>
</button>
<div class="lang-dropdown" style="position:absolute;top:calc(100% + .5rem);right:0;min-width:180px;background:hsl(var(--card));border:1px solid hsl(var(--border));border-radius:.5rem;box-shadow:0 10px 25px -5px rgb(0 0 0/.15);opacity:0;visibility:hidden;transform:translateY(-8px);transition:all .2s ease;z-index:200;overflow:hidden">
<?php foreach($shams_langs as $l): ?>
<a href="<?php echo esc_url($l['url']); ?>" class="lang-option" style="display:flex;align-items:center;gap:.75rem;width:100%;padding:.625rem 1rem;border:none;background:transparent;color:hsl(var(--foreground));font-size:.875rem;cursor:pointer;transition:background .15s;text-decoration:none">
<span><?php echo $l['flag']; ?></span>
<span style="flex:1"><?php echo $l['label']; ?></span>
<?php if($l['active']): ?><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width:1rem;height:1rem;color:hsl(var(--primary))"><path d="M20 6 9 17l-5-5"/></svg><?php endif; ?>
</a>
<?php endforeach; ?>
</div>
</div>

<a href="<?php echo home_url('/accommodations'); ?>"><button class="btn-primary">Book Now</button></a>
</nav>

<div class="mobile-toggle md:hidden flex items-center gap-2">
<button class="h-9 rounded-md flex items-center gap-2 px-3 text-primary-foreground hover:text-primary">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
</button>
<button id="mobile-menu-btn" class="h-10 w-10 flex items-center justify-center text-primary-foreground hover:bg-accent/20 rounded-md">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
</button>
</div>

</div></div>
</header>

<!-- Mobile Menu -->
<div id="mobile-menu" class="mobile-menu">
<div class="flex items-center justify-between p-6">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shams-albosnia-logo.png" alt="Shams" class="h-12 w-auto"/>
<button id="mobile-menu-close" class="h-10 w-10 flex items-center justify-center text-primary-foreground">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
</button>
</div>
<nav class="flex flex-col items-center gap-8 mt-12">
<a class="text-xl font-medium text-primary-foreground/80 hover:text-primary" href="<?php echo home_url('/'); ?>" onclick="closeMobileMenu()">Home</a>
<a class="text-xl font-medium text-primary-foreground/80 hover:text-primary" href="<?php echo home_url('/accommodations'); ?>" onclick="closeMobileMenu()">Accommodations</a>
<a class="text-xl font-medium text-primary-foreground/80 hover:text-primary" href="<?php echo home_url('/cars'); ?>" onclick="closeMobileMenu()">Cars</a>
<a class="text-xl font-medium text-primary-foreground/80 hover:text-primary" href="<?php echo home_url('/bundles'); ?>" onclick="closeMobileMenu()">Bundles</a>
<a class="text-xl font-medium text-primary-foreground/80 hover:text-primary" href="<?php echo home_url('/about-us'); ?>" onclick="closeMobileMenu()">About Us</a>
<a href="<?php echo home_url('/accommodations'); ?>" class="mt-6" onclick="closeMobileMenu()"><button class="btn-primary px-8 py-3 h-auto text-base">Book Now</button></a>
</nav>
</div>
