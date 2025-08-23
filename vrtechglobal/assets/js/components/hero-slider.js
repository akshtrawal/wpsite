/**
 * Hero Slider Component
 * 
 * @package vrtechglobal
 */

class HeroSlider {
    constructor() {
        this.slider = document.getElementById('heroSlider');
        this.slides = this.slider ? this.slider.querySelectorAll('.hero-slide') : [];
        this.dots = document.querySelectorAll('.hero-dot');
        this.currentSlide = 0;
        this.autoPlayInterval = null;
        this.autoPlayDelay = 4500; // 4.5 seconds
        
        this.init();
    }
    
    init() {
        if (this.slides.length === 0) return;
        
        this.showSlide(0);
        this.startAutoPlay();
        this.bindEvents();
    }
    
    showSlide(index) {
        // Hide all slides
        this.slides.forEach(slide => {
            slide.classList.remove('active');
        });
        
        // Remove active class from all dots
        this.dots.forEach(dot => {
            dot.classList.remove('active');
        });
        
        // Show current slide
        if (this.slides[index]) {
            this.slides[index].classList.add('active');
        }
        
        // Activate current dot
        if (this.dots[index]) {
            this.dots[index].classList.add('active');
        }
        
        this.currentSlide = index;
    }
    
    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.slides.length;
        this.showSlide(nextIndex);
    }
    
    goToSlide(index) {
        if (index >= 0 && index < this.slides.length) {
            this.showSlide(index);
        }
    }
    
    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => {
            this.nextSlide();
        }, this.autoPlayDelay);
    }
    
    stopAutoPlay() {
        if (this.autoPlayInterval) {
            clearInterval(this.autoPlayInterval);
            this.autoPlayInterval = null;
        }
    }
    
    bindEvents() {
        // Dot navigation
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                this.goToSlide(index);
                this.restartAutoPlay();
            });
        });
        
        // Pause auto-play on hover
        if (this.slider) {
            this.slider.addEventListener('mouseenter', () => {
                this.stopAutoPlay();
            });
            
            this.slider.addEventListener('mouseleave', () => {
                this.startAutoPlay();
            });
        }
        
        // Touch/swipe support for mobile
        this.addTouchSupport();
    }
    
    addTouchSupport() {
        if (!this.slider) return;
        
        let startX = 0;
        let endX = 0;
        
        this.slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });
        
        this.slider.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            this.handleSwipe(startX, endX);
        });
    }
    
    handleSwipe(startX, endX) {
        const threshold = 50; // Minimum swipe distance
        const diff = startX - endX;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                // Swipe left - next slide
                this.nextSlide();
            } else {
                // Swipe right - previous slide
                const prevIndex = this.currentSlide === 0 ? this.slides.length - 1 : this.currentSlide - 1;
                this.goToSlide(prevIndex);
            }
            this.restartAutoPlay();
        }
    }
    
    restartAutoPlay() {
        this.stopAutoPlay();
        this.startAutoPlay();
    }
    
    destroy() {
        this.stopAutoPlay();
        // Remove event listeners if needed
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new HeroSlider();
});
