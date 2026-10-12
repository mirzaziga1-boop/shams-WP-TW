<?php get_header(); ?>
<section class="relative pt-24 pb-16 overflow-hidden" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="absolute inset-0" style="background:radial-gradient(ellipse at top,rgba(196,154,45,.08),transparent 70%)"></div>
<div class="shams-container relative z-10"><div class="text-center pt-12 pb-8" data-animate>
<p class="flex items-center justify-center gap-3 text-primary text-sm tracking-[.25em] uppercase font-medium mb-6"><span class="h-px w-12 bg-primary/50"></span>Our Blog<span class="h-px w-12 bg-primary/50"></span></p>
<h1 class="text-4xl md:text-5xl font-bold tracking-tight" style="color:hsl(var(--background))">Stories from Bosnia</h1>
<p class="mt-5 text-lg max-w-2xl mx-auto" style="color:hsl(var(--background)/.6)">Discover the beauty, culture, and hidden gems of Bosnia and Herzegovina</p>
</div></div></section>
<section class="py-16"><div class="shams-container">
<?php if(have_posts()): ?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<?php while(have_posts()): the_post(); ?>
<article class="glass-card rounded-xl overflow-hidden group" data-animate>
<?php if(has_post_thumbnail()): ?>
<div class="overflow-hidden h-48"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large',array('class'=>'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110')); ?></a></div>
<?php else: ?>
<div class="h-48 flex items-center justify-center" style="background:linear-gradient(135deg,hsl(var(--primary)/.2),hsl(var(--primary)/.05))"><span class="text-4xl">📝</span></div>
<?php endif; ?>
<div class="p-5">
<div class="flex items-center gap-2 mb-2">
<span class="text-xs text-primary font-medium"><?php $cats=get_the_category(); echo $cats?$cats[0]->name:'Blog'; ?></span>
<span class="text-xs" style="color:hsl(var(--muted-foreground))"><?php echo get_the_date(); ?></span>
</div>
<h2 class="text-lg font-semibold mb-2 group-hover:text-primary transition-colors"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="text-sm font-light leading-relaxed" style="color:hsl(var(--muted-foreground))"><?php echo wp_trim_words(get_the_excerpt(),20); ?></p>
<a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1 text-sm text-primary mt-3 hover:gap-2 transition-all">Read More<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></a>
</div></article>
<?php endwhile; ?>
</div>
<div class="mt-12 flex justify-center"><?php the_posts_pagination(array('mid_size'=>2)); ?></div>
<?php else: ?>
<div class="text-center py-20"><h3 class="text-xl font-semibold mb-2">No posts yet</h3><p style="color:hsl(var(--muted-foreground))">Check back soon for stories from Bosnia and Herzegovina.</p></div>
<?php endif; ?>
</div></section>
<?php get_footer(); ?>
