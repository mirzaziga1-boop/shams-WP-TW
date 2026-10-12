<?php get_header(); ?>

<section class="relative pt-24 pb-16 overflow-hidden" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="absolute inset-0" style="background:radial-gradient(ellipse at top,rgba(196,154,45,.08),transparent 70%)"></div>
<div class="shams-container relative z-10">
<div class="text-center pt-12 pb-8">
<h1 class="text-4xl md:text-5xl font-bold tracking-tight" style="color:hsl(var(--background))"><?php the_title(); ?></h1>
</div></div></section>

<section class="py-16">
<div class="shams-container">
<div class="max-w-4xl mx-auto">
<?php while(have_posts()): the_post(); ?>
<div id="content" style="color:hsl(var(--foreground));line-height:1.8">
<?php the_content(); ?>
</div>
<?php endwhile; ?>
</div></div></section>

<?php get_footer(); ?>
