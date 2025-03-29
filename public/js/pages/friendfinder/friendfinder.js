// Friendfinder page specific JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Background animation for hero section
    const heroBg = document.getElementById('friendfinder-bg-animation');
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
        new bootstrap.Tooltip(el, {
            placement: 'top',
            trigger: 'hover'
        });
    });

    // Like button functionality
    const likeButtons = document.querySelectorAll('.action-btn:nth-child(1)');
    likeButtons.forEach(button => {
        button.addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-check"></i>';
            this.classList.remove('bg-green-500', 'hover:bg-green-600');
            this.classList.add('bg-indigo-600', 'hover:bg-indigo-700');

            // Update tooltip
            const tooltip = bootstrap.Tooltip.getInstance(this);
            if (tooltip) {
                tooltip.setContent({'.tooltip-inner': 'Liked!'});
            }
        });
    });

    // Animate user cards on scroll
    const animateCards = () => {
        const cards = document.querySelectorAll('.user-card');

        cards.forEach((card, index) => {
            const cardPosition = card.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (cardPosition < windowHeight - 100) {
                card.style.transitionDelay = `${index * 0.1}s`;
                card.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    };

    window.addEventListener('scroll', animateCards);
    animateCards(); // Run once on load
});
