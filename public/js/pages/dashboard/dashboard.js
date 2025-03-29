// Dashboard page specific JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Background animation for hero section
    const heroBg = document.getElementById('dashboard-bg-animation');
    if (heroBg) {
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            heroBg.style.background = `
                radial-gradient(circle at ${x * 100}% ${y * 100}%,
                rgba(99, 102, 241, 0.8) 0%,
                rgba(79, 70, 229, 0.9) 50%,
                rgba(67, 56, 202, 1) 100%)
            `;
        });
    }

    // Initialize tooltips
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    tooltipElements.forEach(el => {
        new bootstrap.Tooltip(el);
    });

    // Animate stats cards on scroll
    const animateStats = () => {
        const stats = document.querySelectorAll('.stat-card');

        stats.forEach((stat, index) => {
            const statPosition = stat.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (statPosition < windowHeight - 100) {
                stat.style.transitionDelay = `${index * 0.1}s`;
                stat.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    };

    window.addEventListener('scroll', animateStats);
    animateStats(); // Run once on load

    // Simulate loading data
    setTimeout(() => {
        const loadingElements = document.querySelectorAll('.loading-skeleton');
        loadingElements.forEach(el => {
            el.classList.remove('loading-skeleton');
        });
    }, 1500);
});
