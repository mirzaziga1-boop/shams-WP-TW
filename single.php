<?php get_header(); ?>
<section class="relative pt-24 pb-12 overflow-hidden" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="shams-container relative z-10"><div class="text-center pt-12 pb-8 max-w-3xl mx-auto">
<?php while(have_posts()): the_post(); ?>
<p class="text-primary text-sm tracking-[.25em] uppercase font-medium mb-4"><?php $cats=get_the_category(); echo $cats?$cats[0]->name:'Blog'; ?></p>
<h1 class="text-3xl md:text-5xl font-bold tracking-tight" style="color:hsl(var(--background))"><?php the_title(); ?></h1>
<p class="mt-4 text-sm" style="color:hsl(var(--background)/.6)"><?php echo get_the_date(); ?> &bull; <?php echo get_the_author(); ?></p>
<?php endwhile; ?>
</div></div></section>
<section class="py-16"><div class="shams-container"><article class="max-w-3xl mx-auto">
<?php while(have_posts()): the_post(); ?>
<?php if(has_post_thumbnail()): ?>
<div class="rounded-2xl overflow-hidden mb-10"><?php the_post_thumbnail('large',array('class'=>'w-full h-auto')); ?></div>
<?php endif; ?>
<div class="max-w-none" style="color:hsl(var(--foreground));line-height:1.8"><?php the_content(); ?></div>
<?php endwhile; ?>
<div class="mt-12 pt-8" style="border-top:1px solid hsl(var(--border))">
<a href="<?php echo home_url('/blog'); ?>" class="inline-flex items-center gap-2 text-sm text-primary hover:gap-3 transition-all"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>Back to Blog</a>
</div></article></div></section>
<?php get_footer(); ?>
