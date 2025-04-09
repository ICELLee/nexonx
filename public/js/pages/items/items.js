// Items page specific JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Background animation for hero section
    const heroBg = document.getElementById('items-bg-animation');
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

    // Filter functionality
    const applyFiltersBtn = document.getElementById('apply-filters');
    const resetFiltersBtn = document.getElementById('reset-filters');

    if (resetFiltersBtn) {
        resetFiltersBtn.addEventListener('click', function() {
            // Reset all filter inputs
            document.getElementById('item-search').value = '';
            document.getElementById('vip-filter').value = 'all';
            document.getElementById('gender-filter').value = 'all';
            document.querySelector('input[name="msp-version"][value="all"]').checked = true;
            document.getElementById('sort-by').value = 'newest-first';

            alert('Filters reset! (This would reload items without filters in a real implementation)');
        });
    }

    // Animate items on scroll
    const animateItems = () => {
        const items = document.querySelectorAll('.item-card');

        items.forEach((item, index) => {
            const itemPosition = item.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (itemPosition < windowHeight - 100) {
                item.style.transitionDelay = `${index * 0.05}s`;
                item.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    };

    window.addEventListener('scroll', animateItems);
    animateItems(); // Run once on load
});
document.getElementById('reset-filters').addEventListener('click', () => {
    window.location.href = '{{ route('items') }}';
});
