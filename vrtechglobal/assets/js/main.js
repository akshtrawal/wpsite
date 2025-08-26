/**
 * VRTech Global Theme - Main JavaScript
 * 
 * @package vrtechglobal
 */

(function(){
    function ready(fn){ 
        if(document.readyState !== 'loading'){ 
            fn(); 
        } else { 
            document.addEventListener('DOMContentLoaded', fn); 
        } 
    }

	ready(function(){
        // Import component scripts
        const localizedUri = (window.VRTECH_GLOBAL && window.VRTECH_GLOBAL.themeUri) ? window.VRTECH_GLOBAL.themeUri : '';
        const themeUri = localizedUri || document.documentElement.getAttribute('data-theme-uri') || '';
        // Removed dynamic load for hero-slider; inlined below for reliability
        loadScript((themeUri ? themeUri + '/' : '') + 'assets/js/components/stats-counter.js');
        
        // Initialize mobile navigation
        initMobileNav();
        
        // Initialize AOS animations
        initAOS();

        // Initialize scroll effects
        initScrollEffects();

        // Initialize Hero slider (inline fallback)
        initHeroSlider();

        // Sync header offset CSS variable
        updateHeaderOffsetVar();
    });
    
    /**
     * Load JavaScript component files
     */
    function loadScript(src) {
        const script = document.createElement('script');
        script.src = src;
        script.async = true;
        document.head.appendChild(script);
    }
    
    /**
     * Initialize mobile navigation
     */
    function initMobileNav() {
        const navToggle = document.getElementById('navToggle');
        const nav = document.getElementById('site-navigation');
        
		if (navToggle && nav) {
			navToggle.addEventListener('click', function(){
                const expanded = this.getAttribute('aria-expanded') === 'true';
				this.setAttribute('aria-expanded', String(!expanded));
				nav.classList.toggle('open');
                
                // Animate hamburger menu
                this.classList.toggle('active');
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!nav.contains(e.target) && !navToggle.contains(e.target)) {
                    nav.classList.remove('open');
                    navToggle.classList.remove('active');
                    navToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    }
    
    /**
     * Initialize AOS (Animate On Scroll) library
     */
    function initAOS() {
        if (window.AOS) { 
            AOS.init({ 
                duration: 600, 
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            }); 
        }
    }
    
    /**
     * Smooth scroll for anchor links with header offset
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        const header = document.querySelector('.site-header');
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (!href || href === '#') return;
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    const headerHeight = header ? header.offsetHeight : 0;
                    const targetTop = target.getBoundingClientRect().top + window.scrollY - headerHeight - 8;
                    window.scrollTo({ top: targetTop, behavior: prefersReduced ? 'auto' : 'smooth' });
                }
            });
        });
    }
    
    /**
     * Initialize lazy loading for images
     */
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            const lazyImages = document.querySelectorAll('img[data-src]');
            lazyImages.forEach(img => imageObserver.observe(img));
        }
    }
    
    /**
     * Initialize form enhancements
     */
    function initForms() {
        const forms = document.querySelectorAll('.contact-form');
        
        forms.forEach(form => {
            const inputs = form.querySelectorAll('input, textarea');
            
            inputs.forEach(input => {
                // Add floating label effect
                if (input.value) {
                    input.parentNode.classList.add('has-value');
                }
                
                input.addEventListener('focus', function() {
                    this.parentNode.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentNode.classList.remove('focused');
                    if (this.value) {
                        this.parentNode.classList.add('has-value');
                    } else {
                        this.parentNode.classList.remove('has-value');
                    }
                });
            });
        });
    }

    /**
     * Initialize scroll-linked effects: header shrink, progress bar, hero parallax
     */
    function initScrollEffects() {
        const header = document.querySelector('.site-header');
        const progress = document.getElementById('scrollProgress');
        const heroImages = document.querySelectorAll('.hero .hero-media img');
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        let lastKnownScrollY = 0;
        let ticking = false;

        function onScroll() {
            lastKnownScrollY = window.scrollY || window.pageYOffset;
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    updateHeader(lastKnownScrollY);
                    updateProgress(lastKnownScrollY);
                    if (!prefersReduced) {
                        updateHeroParallax(lastKnownScrollY);
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }

        function updateHeader(scrollY) {
            if (!header) return;
            if (scrollY > 12) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        }

        function updateProgress(scrollY) {
            if (!progress) return;
            const docHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
            const viewport = window.innerHeight;
            const maxScrollable = docHeight - viewport;
            const pct = maxScrollable > 0 ? Math.min(100, Math.max(0, (scrollY / maxScrollable) * 100)) : 0;
            progress.style.width = pct + '%';
        }

        function updateHeroParallax(scrollY) {
            if (!heroImages || heroImages.length === 0) return;
            const maxShift = 24; // px
            const shift = Math.max(0, Math.min(maxShift, scrollY * 0.15));
            heroImages.forEach(img => img.style.setProperty('--parallax-y', shift + 'px'));
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll(); // initial
    }
    
    /**
     * Inline, robust Hero Slider with swipe/drag support
     */
    function initHeroSlider() {
        const slider = document.getElementById('heroSlider');
        if (!slider) return;
        const slides = Array.prototype.slice.call(slider.querySelectorAll('.hero-slide'));
        if (!slides.length) return;

        let currentIndex = 0;
        let intervalId = null;
        const delayMs = 4500;
        const swipeThreshold = 50;
        let startX = 0;
        let isMouseDown = false;

        function show(index) {
            slides.forEach((s, i) => {
                if (i === index) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        }

        function next() {
            currentIndex = (currentIndex + 1) % slides.length;
            show(currentIndex);
        }

        function prev() {
            currentIndex = currentIndex === 0 ? slides.length - 1 : currentIndex - 1;
            show(currentIndex);
        }

        function start() {
            if (intervalId) return;
            intervalId = setInterval(next, delayMs);
        }

        function stop() {
            if (!intervalId) return;
            clearInterval(intervalId);
            intervalId = null;
        }

        function handleSwipe(start, end) {
            const diff = start - end;
            if (Math.abs(diff) < swipeThreshold) return;
            if (diff > 0) {
                next();
            } else {
                prev();
            }
        }

        // Touch swipe
        slider.addEventListener('touchstart', function(e){
            if (!e.touches || !e.touches[0]) return;
            startX = e.touches[0].clientX;
            stop();
        }, { passive: true });
        slider.addEventListener('touchend', function(e){
            if (!e.changedTouches || !e.changedTouches[0]) { start(); return; }
            const endX = e.changedTouches[0].clientX;
            handleSwipe(startX, endX);
            start();
        });

        // Mouse drag (basic)
        slider.addEventListener('mousedown', function(e){
            isMouseDown = true;
            startX = e.clientX;
            stop();
        });
        document.addEventListener('mouseup', function(e){
            if (!isMouseDown) return;
            isMouseDown = false;
            const endX = e.clientX;
            handleSwipe(startX, endX);
            start();
        });

        // Prevent image dragging
        Array.prototype.forEach.call(slider.querySelectorAll('img'), function(img){
            img.addEventListener('dragstart', function(ev){ ev.preventDefault(); });
        });

        // Hover pause
        slider.addEventListener('mouseenter', stop);
        slider.addEventListener('mouseleave', start);

        // Initialize
        show(0);
        start();
    }
    
    /**
     * Keep --header-offset CSS variable in sync with current header height
     */
    function updateHeaderOffsetVar() {
        const header = document.querySelector('.site-header');
        if (!header) return;
        const root = document.documentElement;
        const apply = () => root.style.setProperty('--header-offset', header.offsetHeight + 'px');
        apply();
        // Observe header size changes
        if ('ResizeObserver' in window) {
            const ro = new ResizeObserver(apply);
            ro.observe(header);
        } else {
            window.addEventListener('resize', apply);
        }
    }
    
    // Initialize additional features when DOM is ready
    ready(function() {
        initSmoothScroll();
        initLazyLoading();
        initForms();
    });
    
})();