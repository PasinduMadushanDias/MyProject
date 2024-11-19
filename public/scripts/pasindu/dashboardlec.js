document.addEventListener('DOMContentLoaded', () => {
    // Animate numbers
    const stats = document.querySelectorAll('.stat-number');
    
    stats.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-target'));
        const duration = 1000; // Animation duration in milliseconds
        const steps = 20; // Number of steps in animation
        const stepValue = target / steps;
        let current = 0;
        
        const updateNumber = () => {
            if (current < target) {
                current += stepValue;
                if (current > target) current = target;
                stat.textContent = Math.round(current);
                requestAnimationFrame(updateNumber);
            }
        };
        
        // Start animation when element is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    updateNumber();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(stat);
    });
});