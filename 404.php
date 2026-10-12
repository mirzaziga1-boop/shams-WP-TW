<?php get_header(); ?>
<section class="min-h-screen flex items-center justify-center" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="text-center px-4">
<h1 class="text-8xl font-bold text-primary mb-4">404</h1>
<h2 class="text-2xl font-semibold mb-2" style="color:hsl(var(--background))">Oops! Page not found</h2>
<p class="mb-8" style="color:hsl(var(--background)/.6)">The page you are looking for does not exist.</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<a href="<?php echo home_url('/'); ?>"><button class="btn-primary px-8">Return to Home</button></a>
<a href="<?php echo admin_url(); ?>"><button class="btn-outline w-auto px-8" style="background:transparent;color:hsl(var(--background)/.8);border-color:hsl(var(--background)/.3)">Go to Admin Dashboard</button></a>
</div></div></section>
<?php get_footer(); ?>
