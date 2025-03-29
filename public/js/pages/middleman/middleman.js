// Middleman page specific JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Background animation for hero section
    const heroBg = document.getElementById('middleman-bg-animation');
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

    // Toggle partner registered checkbox
    const partnerRegisteredCheckbox = document.getElementById('partner-registered');
    if (partnerRegisteredCheckbox) {
        partnerRegisteredCheckbox.addEventListener('change', function() {
            const partnerEmailField = document.getElementById('partner-email');
            if (this.checked) {
                partnerEmailField.disabled = true;
                partnerEmailField.placeholder = "{{ __('Will be filled automatically') }}";
            } else {
                partnerEmailField.disabled = false;
                partnerEmailField.placeholder = "{{ __('Enter partner\'s email') }}";
            }
        });
    }

    // Animate steps on scroll
    const animateSteps = () => {
        const steps = document.querySelectorAll('.step-card');

        steps.forEach((step, index) => {
            const stepPosition = step.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (stepPosition < windowHeight - 100) {
                step.style.transitionDelay = `${index * 0.2}s`;
                step.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    };

    window.addEventListener('scroll', animateSteps);
    animateSteps(); // Run once on load
});
