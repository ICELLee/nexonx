<div class="relative overflow-hidden">
    <!-- Background Animation -->
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-blue-800 dark:from-indigo-950 dark:to-blue-900 opacity-90 z-0" id="reports-bg-animation"></div>

    <!-- Slider -->
    <div class="relative z-10">
        <div class="fancy-slider h-screen max-h-[800px] w-full">
            <!-- Slide 1 -->
            <div data-fancybox="reports-slider" data-src="{{ asset('images/reports1.jpg') }}" class="h-full w-full bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/reports1.jpg') }}');">
                <div class="text-center px-4 py-16 sm:px-6 lg:px-8">
                    <h1 class="text-4xl md:text-6xl font-bold text-white animate__animated animate__fadeInDown">{{ __('Report a Player') }}</h1>
                    <p class="mt-4 text-xl text-white max-w-2xl mx-auto animate__animated animate__fadeInUp">{{ __('Help keep the community safe by reporting scammers') }}</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div data-fancybox="reports-slider" data-src="{{ asset('images/reports2.jpg') }}" class="h-full w-full bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/reports2.jpg') }}');">
                <div class="text-center px-4 py-16 sm:px-6 lg:px-8">
                    <h1 class="text-4xl md:text-6xl font-bold text-white animate__animated animate__fadeInDown">{{ __('Successful Trades') }}</h1>
                    <p class="mt-4 text-xl text-white max-w-2xl mx-auto animate__animated animate__fadeInUp">{{ __('Report your successful trades to help others') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize fancybox slider
            Fancybox.bind('[data-fancybox="reports-slider"]', {
                Thumbs: false,
                Toolbar: false,
                closeButton: false,
                arrows: false,
                infinite: true,
                autoFocus: false,
                dragToClose: false,
                Carousel: {
                    infinite: true,
                    transition: 'fade',
                    autoplay: true,
                    interval: 5000,
                },
            });

            // Background animation
            const bgAnimation = document.getElementById('reports-bg-animation');
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
