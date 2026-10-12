<?php
/* Template Name: Bundles Page */
get_header(); ?>
<section class="relative pt-24 pb-16 overflow-hidden" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="absolute inset-0" style="background:radial-gradient(ellipse at top,rgba(196,154,45,.08),transparent 70%)"></div>
<div class="shams-container relative z-10"><div class="text-center pt-12 pb-16" data-animate>
<p class="flex items-center justify-center gap-3 text-primary text-sm tracking-[.25em] uppercase font-medium mb-6"><span class="h-px w-12 bg-primary/50"></span>Tour Packages<span class="h-px w-12 bg-primary/50"></span></p>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight" style="color:hsl(var(--background))">Curated Tour Bundles</h1>
<p class="mt-5 text-lg max-w-2xl mx-auto" style="color:hsl(var(--background)/.6)">All-inclusive packages combining accommodation, car rental, and guided tours for the ultimate Bosnian experience</p>
</div></div></section>
<section class="py-16"><div class="shams-container"><div class="text-center py-20">
<div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-8 w-8 text-primary"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.29 7 12 12 20.71 7"/><line x1="12" x2="12" y1="22" y2="12"/></svg></div>
<h3 class="text-xl font-semibold mb-2">Bundles coming soon</h3>
<p class="mb-6" style="color:hsl(var(--muted-foreground))">We are curating the perfect tour packages for you. Check back soon!</p>
<a href="<?php echo home_url('/contact'); ?>"><button class="btn-primary px-8">Contact Us</button></a>
</div></div></section>
<?php get_footer(); ?>
