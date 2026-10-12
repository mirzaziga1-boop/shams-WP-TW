<?php
/* Template Name: Apartments Page */
get_header(); ?>
<section class="relative pt-24 pb-16 overflow-hidden" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="absolute inset-0" style="background:radial-gradient(ellipse at top,rgba(196,154,45,.08),transparent 70%)"></div>
<div class="shams-container relative z-10">
<div class="text-center pt-12 pb-10" data-animate>
<p class="flex items-center justify-center gap-3 text-primary text-sm tracking-[.25em] uppercase font-medium mb-6"><span class="h-px w-12 bg-primary/50"></span>Premium Accommodations<span class="h-px w-12 bg-primary/50"></span></p>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight" style="color:hsl(var(--background))">Premium Apartments in Bosnia</h1>
<p class="mt-5 text-lg max-w-2xl mx-auto" style="color:hsl(var(--background)/.6)">Experience comfort and luxury in fully furnished apartments across Bosnia's most beautiful locations</p>
</div>
<div class="flex justify-center gap-3 pb-8" data-animate>
<button class="px-6 py-2.5 rounded-full text-sm font-medium bg-primary text-primary-foreground">Hotels</button>
<button class="px-6 py-2.5 rounded-full text-sm font-medium border text-primary-foreground/80" style="border-color:hsl(var(--background)/.3)">Villas</button>
<button class="px-6 py-2.5 rounded-full text-sm font-medium border text-primary-foreground/80" style="border-color:hsl(var(--background)/.3)">Apartments</button>
</div></div></section>
<section class="py-12"><div class="shams-container"><div class="flex flex-col lg:flex-row gap-8">
<aside class="lg:w-64 shrink-0"><div class="glass-card rounded-xl p-5 sticky top-24">
<div class="flex items-center justify-between mb-5"><h3 class="font-semibold text-sm">Filters</h3><button class="text-xs text-primary hover:underline">Reset filters</button></div>
<div class="mb-5"><label class="text-xs font-medium mb-2 block" style="color:hsl(var(--muted-foreground))">Accommodation Type</label><select class="w-full rounded-md border px-3 py-2 text-sm" style="border-color:hsl(var(--input));background:hsl(var(--background))"><option>All Types</option><option>Hotels</option><option>Apartments</option><option>Villas</option></select></div>
<div class="mb-5"><label class="text-xs font-medium mb-2 block" style="color:hsl(var(--muted-foreground))">Location</label><select class="w-full rounded-md border px-3 py-2 text-sm" style="border-color:hsl(var(--input));background:hsl(var(--background))"><option>All Locations</option><option>Sarajevo</option><option>Mostar</option><option>Konjic</option><option>Travnik</option><option>Jajce</option><option>Bihac</option><option>Vlasic</option></select></div>
<div><label class="text-xs font-medium mb-2 block" style="color:hsl(var(--muted-foreground))">Number of people</label><div class="flex items-center justify-between rounded-md border px-3 py-2 text-sm" style="border-color:hsl(var(--input))"><span>2+ guests</span><span style="color:hsl(var(--muted-foreground))">1 – 6+ guests</span></div></div>
</div></aside>
<div class="flex-1"><div class="text-center py-20">
<div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 mb-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-8 w-8 text-primary"><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/></svg></div>
<h3 class="text-xl font-semibold mb-2">No accommodations found</h3>
<p style="color:hsl(var(--muted-foreground))">There are no accommodations available with the current filters. Try adjusting your filters or selecting different options.</p>
</div></div></div></div></section>
<section class="py-16" style="background:hsl(var(--card))"><div class="shams-container">
<div class="text-center mb-12" data-animate><h2 class="text-3xl md:text-4xl font-bold tracking-tight">Explore Bosnia's Beauty</h2><p class="mt-4 text-lg" style="color:hsl(var(--muted-foreground))">Discover the stunning natural and cultural sites across Bosnia and Herzegovina</p></div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<?php foreach(array(array('Mostar','Old Bridge in Mostar','One of Bosnia\'s most recognizable landmarks, the Old Bridge (Stari Most) is a 16th-century Ottoman bridge that crosses the river Neretva. The bridge was destroyed in 1993 during the Bosnian War but was later rebuilt and opened in 2004.'),array('Sarajevo','Baščaršija','The historical and cultural center of Sarajevo, Baščaršija was built in the 15th century when Isa-Beg Isaković founded the town. The word Baščaršija derives from the Turkish language and means main market.'),array('Jajce','Jajce Waterfall','A beautiful 17-meter high waterfall where the Pliva River meets the Vrbas in the heart of the historic town of Jajce. It\'s one of the only waterfalls in the world located in the center of a town.'),array('Bjelašnica','Mountain Landscapes','Bosnia and Herzegovina features stunning mountain landscapes with pristine nature and excellent opportunities for hiking, skiing, and outdoor adventures.'),array('Una National Park','Una River','The Una River is known for its crystal clear emerald waters and breathtaking waterfalls, offering exceptional rafting and nature experiences.')) as $p): ?>
<div class="glass-card rounded-xl overflow-hidden group" data-animate>
<div class="h-48 flex items-center justify-center" style="background:linear-gradient(135deg,hsl(var(--primary)/.2),hsl(var(--primary)/.05))"><span class="text-4xl">🏔️</span></div>
<div class="p-5"><span class="text-xs font-medium text-primary uppercase tracking-wider"><?php echo $p[0]; ?></span><h3 class="text-lg font-semibold mt-1 mb-2"><?php echo $p[1]; ?></h3><p class="text-sm font-light leading-relaxed" style="color:hsl(var(--muted-foreground))"><?php echo $p[2]; ?></p></div>
</div>
<?php endforeach; ?>
</div></div></section>
<?php get_footer(); ?>
