<div class="relative overflow-hidden">
    <!-- Background Animation -->
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-blue-800 dark:from-indigo-950 dark:to-blue-900 opacity-90 z-0" id="dashboard-bg-animation"></div>

    <div class="relative z-10">
        <div class="max-w-7xl mx-auto px-4 py-24 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white animate__animated animate__fadeInDown">{{ __('Admin Dashboard') }}</h1>
            <p class="mt-4 text-xl text-white max-w-2xl mx-auto animate__animated animate__fadeInUp">
                {{ __('Manage your website and users') }}
            </p>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Background animation
            const bgAnimation = document.getElementById('dashboard-bg-animation');
            if (bgAnimation) {
                bgAnimation.addEventListener('mousemove', (e) => {
                    const x = e.clientX / window.innerWidth;
                    const y = e.clientY / window.innerHeight;

                    bgAnimation.style.background = `
                    radial-gradient(circle at ${x * 100}% ${y * 100}%,
                    rgba(99, 102, 241, 0.8) 0%,
                    rgba(79, 70, 229, 0.9) 50%,
                    rgba(67, 56, 202, 1) 100%)
                `;
                });
            }
        });
    </script>
@endpush
