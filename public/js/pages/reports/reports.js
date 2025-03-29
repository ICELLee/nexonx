// Reports page specific JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Background animation for hero section
    const heroBg = document.getElementById('reports-bg-animation');
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

    // Form validation for scammer report
    const scammerForm = document.querySelector('form');
    if (scammerForm) {
        scammerForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Validate form
            const username = document.getElementById('scammer-username').value;
            const level = document.getElementById('scammer-level').value;
            const date = document.getElementById('scam-date').value;
            const reason = document.getElementById('scam-reason').value;

            if (!username || !level || !date || !reason) {
                alert('Please fill in all required fields.');
                return;
            }

            // Simulate form submission
            alert('Scammer report submitted successfully!');
            this.reset();
        });
    }

    // Animate cards on scroll
    const animateCards = () => {
        const cards = document.querySelectorAll('.report-card');

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
