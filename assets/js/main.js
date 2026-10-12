document.addEventListener("DOMContentLoaded",function(){
  var h=document.getElementById("site-header");
  function s(){if(window.scrollY>50)h.classList.add("scrolled");else h.classList.remove("scrolled")}
  window.addEventListener("scroll",s);s();

  var b=document.getElementById("mobile-menu-btn"),m=document.getElementById("mobile-menu"),c=document.getElementById("mobile-menu-close");
  if(b&&m)b.addEventListener("click",function(){m.classList.add("active");document.body.style.overflow="hidden"});
  if(c&&m)c.addEventListener("click",function(){m.classList.remove("active");document.body.style.overflow=""});

  /* LANGUAGE DROPDOWN */
  document.querySelectorAll(".lang-switcher").forEach(function(sw){
    var btn=sw.querySelector(".lang-switcher-btn");
    var dd=sw.querySelector(".lang-dropdown");
    if(!btn||!dd)return;
    btn.addEventListener("click",function(e){
      e.stopPropagation();
      var isOpen=sw.classList.contains("open");
      document.querySelectorAll(".lang-switcher.open").forEach(function(o){
        o.classList.remove("open");
        o.querySelector(".lang-dropdown").style.cssText="opacity:0;visibility:hidden;transform:translateY(-8px)";
      });
      if(!isOpen){
        sw.classList.add("open");
        dd.style.cssText="opacity:1;visibility:visible;transform:translateY(0)";
      }
    });
  });
  document.addEventListener("click",function(){
    document.querySelectorAll(".lang-switcher.open").forEach(function(o){
      o.classList.remove("open");
      o.querySelector(".lang-dropdown").style.cssText="opacity:0;visibility:hidden;transform:translateY(-8px)";
    });
  });

  /* SCROLL ANIMATIONS */
  var els=document.querySelectorAll("[data-animate]");
  var obs=new IntersectionObserver(function(en){en.forEach(function(e){if(e.isIntersecting){e.target.classList.add("animated");obs.unobserve(e.target)}})},{threshold:.1,rootMargin:"0px 0px -50px 0px"});
  els.forEach(function(el){obs.observe(el)});
});
function closeMobileMenu(){var m=document.getElementById("mobile-menu");if(m){m.classList.remove("active");document.body.style.overflow=""}}
