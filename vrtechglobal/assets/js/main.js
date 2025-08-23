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
        loadScript('assets/js/components/hero-slider.js');
        loadScript('assets/js/components/stats-counter.js');
        
        // Initialize mobile navigation
        initMobileNav();
        
        // Initialize AOS animations
        initAOS();
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
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
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
    
    // Initialize additional features when DOM is ready
    ready(function() {
        initSmoothScroll();
        initLazyLoading();
        initForms();
    });
    
})();