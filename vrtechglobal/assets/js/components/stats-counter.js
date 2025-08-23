/**
 * Stats Counter Component
 * 
 * @package vrtechglobal
 */

class StatsCounter {
    constructor() {
        this.statElements = document.querySelectorAll('.stat-value[data-count]');
        this.animationSpeed = 200; // The lower the slower
        this.hasAnimated = false;
        
        this.init();
    }
    
    init() {
        if (this.statElements.length === 0) return;
        
        // Check if element is in viewport
        this.checkIntersection();
    }
    
    checkIntersection() {
        const options = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !this.hasAnimated) {
                    this.animateStats();
                    this.hasAnimated = true;
                    observer.disconnect();
                }
            });
        }, options);
        
        // Observe the stats section
        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }
    }
    
    animateStats() {
        this.statElements.forEach((element, index) => {
            const target = parseInt(element.getAttribute('data-count'));
            const delay = index * 100; // Stagger animation
            
            setTimeout(() => {
                this.animateSingleStat(element, target);
            }, delay);
        });
    }
    
    animateSingleStat(element, target) {
        const duration = 2000; // 2 seconds
        const startTime = performance.now();
        const startValue = 0;
        
        const animate = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Easing function for smooth animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);
            
            element.textContent = currentValue;
            
            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {
                element.textContent = target;
            }
        };
        
        requestAnimationFrame(animate);
    }
    
    // Alternative simple counter animation
    animateSimple(element, target) {
        const increment = Math.ceil(target / this.animationSpeed);
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = current;
            }
        }, 10);
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new StatsCounter();
});
