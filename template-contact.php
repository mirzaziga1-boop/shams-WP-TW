<?php
/* Template Name: Contact Page */
get_header(); ?>
<section class="relative pt-24 pb-16 overflow-hidden" style="background:linear-gradient(to bottom,hsl(var(--foreground)),hsl(var(--foreground)/.95),hsl(var(--background)))">
<div class="absolute inset-0" style="background:radial-gradient(ellipse at top,rgba(196,154,45,.08),transparent 70%)"></div>
<div class="shams-container relative z-10"><div class="text-center pt-12 pb-8" data-animate>
<p class="flex items-center justify-center gap-3 text-primary text-sm tracking-[.25em] uppercase font-medium mb-6"><span class="h-px w-12 bg-primary/50"></span>Get In Touch<span class="h-px w-12 bg-primary/50"></span></p>
<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight" style="color:hsl(var(--background))">Contact Us</h1>
<p class="mt-5 text-lg max-w-2xl mx-auto" style="color:hsl(var(--background)/.6)">We would love to hear from you. Reach out and our team will respond promptly.</p>
</div></div></section>
<section class="py-16"><div class="shams-container"><div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-5xl mx-auto">
<div data-animate><h2 class="text-2xl font-bold mb-8">Get in Touch</h2><div class="space-y-6">
<div class="flex items-start gap-4"><div class="trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div><div><h4 class="font-semibold text-sm mb-1">Phone</h4><p class="text-sm" style="color:hsl(var(--muted-foreground))">+387 61 228 100</p></div></div>
<div class="flex items-start gap-4"><div class="trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg></div><div><h4 class="font-semibold text-sm mb-1">Email</h4><p class="text-sm" style="color:hsl(var(--muted-foreground))">info@shamsalbosnia.com</p></div></div>
<div class="flex items-start gap-4"><div class="trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg></div><div><h4 class="font-semibold text-sm mb-1">Address</h4><p class="text-sm" style="color:hsl(var(--muted-foreground))">Milana Perloga 14a, Sarajevo 71000, Bosnia &amp; Herzegovina</p></div></div>
<div class="flex items-start gap-4"><div class="trust-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div><div><h4 class="font-semibold text-sm mb-1">Working Hours</h4><p class="text-sm" style="color:hsl(var(--muted-foreground))">Monday – Sunday: 08:00 – 20:00</p></div></div>
</div></div>
<div data-animate><div class="glass-card rounded-2xl p-8"><h2 class="text-2xl font-bold mb-6">Send a Message</h2>
<form class="space-y-5">
<div><label class="text-sm font-medium mb-1.5 block">Full Name</label><input type="text" class="w-full rounded-md border px-3 py-2.5 text-sm" style="border-color:hsl(var(--input));background:hsl(var(--background))" placeholder="Your name"/></div>
<div><label class="text-sm font-medium mb-1.5 block">Email</label><input type="email" class="w-full rounded-md border px-3 py-2.5 text-sm" style="border-color:hsl(var(--input));background:hsl(var(--background))" placeholder="your@email.com"/></div>
<div><label class="text-sm font-medium mb-1.5 block">Subject</label><input type="text" class="w-full rounded-md border px-3 py-2.5 text-sm" style="border-color:hsl(var(--input));background:hsl(var(--background))" placeholder="How can we help?"/></div>
<div><label class="text-sm font-medium mb-1.5 block">Message</label><textarea rows="4" class="w-full rounded-md border px-3 py-2.5 text-sm resize-none" style="border-color:hsl(var(--input));background:hsl(var(--background))" placeholder="Your message..."></textarea></div>
<button type="submit" class="btn-primary w-full h-11">Send Message</button>
</form></div></div>
</div></div></section>
<?php get_footer(); ?>
