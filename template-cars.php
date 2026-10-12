<?php
/* Template Name: Cars Page */
get_header(); ?>
<section class="relative pt-24 pb-16 overflow-hidden" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="absolute inset-0" style="background:radial-gradient(ellipse at top,rgba(196,154,45,.08),transparent 70%)"></div>
<div class="shams-container relative z-10">
<div class="text-center pt-12 pb-16" data-animate>
<p class="flex items-center justify-center gap-3 text-primary text-sm tracking-[.25em] uppercase font-medium mb-6"><span class="h-px w-12 bg-primary/50"></span>Premium Car Rentals<span class="h-px w-12 bg-primary/50"></span></p>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight" style="color:hsl(var(--background))">Our Premium Car Fleet</h1>
<p class="mt-5 text-lg max-w-2xl mx-auto" style="color:hsl(var(--background)/.6)">Choose from our selection of luxury and performance vehicles for your next adventure</p>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 max-w-5xl mx-auto pb-8" data-animate>
<?php foreach(array(array('Electric','car-type-electric.jpeg'),array('Luxury','car-type-luxury.jpeg'),array('Sports Car','car-type-sports.jpeg'),array('SUV','car-type-suv.jpeg'),array('Sedan','car-type-sedan.jpeg')) as $c): ?>
<button class="car-type-card group">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $c[1]; ?>" alt="<?php echo $c[0]; ?>"/>
<div class="card-overlay"></div>
<div class="absolute bottom-0 left-0 right-0 p-4 text-left"><span class="text-white font-semibold text-base"><?php echo $c[0]; ?></span><div class="h-0.5 w-8 bg-primary mt-2 rounded-full"></div></div>
</button>
<?php endforeach; ?>
</div></div></section>
<div class="search-bar"><div class="shams-container py-3"><div class="flex flex-wrap items-end gap-3">
<div class="flex-1 min-w-[140px]"><label class="text-xs mb-1 block" style="color:hsl(var(--muted-foreground))">Pickup location</label><button class="search-input"><span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3.5 w-3.5 text-primary"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg><span style="color:hsl(var(--muted-foreground))">Select city</span></span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 opacity-50"><path d="m6 9 6 6 6-6"/></svg></button></div>
<button class="flex items-center gap-1.5 text-xs pb-1" style="color:hsl(var(--muted-foreground))"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><rect width="20" height="12" x="2" y="6" rx="6" ry="6"/><circle cx="8" cy="12" r="2"/></svg><span class="hidden sm:inline">Different return</span></button>
<div class="flex-1 min-w-[130px]"><label class="text-xs mb-1 block" style="color:hsl(var(--muted-foreground))">Pickup date</label><button class="search-input" style="justify-content:flex-start;gap:.5rem;color:hsl(var(--muted-foreground))"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>Pick date</button></div>
<div class="flex-1 min-w-[130px]"><label class="text-xs mb-1 block" style="color:hsl(var(--muted-foreground))">Return date</label><button class="search-input" style="justify-content:flex-start;gap:.5rem;color:hsl(var(--muted-foreground))"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>Pick date</button></div>
<div class="flex-1 min-w-[100px]"><label class="text-xs mb-1 block" style="color:hsl(var(--muted-foreground))">Driver age</label><button class="search-input"><span>30+</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4 opacity-50"><path d="m6 9 6 6 6-6"/></svg></button></div>
<button class="btn-primary h-9 px-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>Search Cars</button>
</div></div></div>
<section class="py-16"><div class="shams-container">
<div class="flex items-center justify-between mb-8">
<p class="text-sm" style="color:hsl(var(--muted-foreground))"><span class="font-semibold" style="color:hsl(var(--foreground))">0</span> vehicles</p>
<div class="flex items-center gap-2"><span class="text-sm" style="color:hsl(var(--muted-foreground))">Filters</span><button class="flex items-center gap-1 text-sm rounded-md border px-3 py-1.5" style="border-color:hsl(var(--input))">Price: Low to High<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-3 w-3"><path d="m6 9 6 6 6-6"/></svg></button></div>
</div>
<div class="text-center py-20">
<div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-primary"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg></div>
<h3 class="text-xl font-semibold mb-2">No vehicles match your filters.</h3>
<button class="btn-outline w-auto px-6 mt-4">Clear filters</button>
</div></div></section>
<?php get_footer(); ?>
