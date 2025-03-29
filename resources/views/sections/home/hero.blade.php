<div class="relative overflow-hidden">
    <!-- Background Animation -->
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-900 to-blue-800 dark:from-indigo-950 dark:to-blue-900 opacity-90 z-0" id="hero-bg-animation"></div>

    <!-- Slider -->
    <div class="relative z-10">
        <div class="fancy-slider h-screen max-h-[800px] w-full">
            <!-- Slide 1 -->
            <div data-fancybox="hero-slider" data-src="{{ asset('images/hero1.jpg') }}" class="h-full w-full bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/hero1.jpg') }}');">
                <div class="text-center px-4 py-16 sm:px-6 lg:px-8">
                    <h1 class="text-4xl md:text-6xl font-bold text-white animate__animated animate__fadeInDown">NexonX</h1>
                    <p class="mt-4 text-xl text-white max-w-2xl mx-auto animate__animated animate__fadeInUp">{{ __('Your ultimate gaming companion') }}</p>
                    <div class="mt-8 flex justify-center space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="#tools" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors duration-300 flex items-center">
                            <i class="fas fa-tools mr-2"></i> {{ __('Our Tools') }}
                        </a>
                        <a href="#cheats" class="px-6 py-3 bg-transparent border-2 border-white hover:bg-white hover:text-indigo-600 text-white font-medium rounded-lg transition-colors duration-300 flex items-center">
                            <i class="fas fa-code mr-2"></i> {{ __('Our Cheats') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div data-fancybox="hero-slider" data-src="{{ asset('images/hero2.jpg') }}" class="h-full w-full bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('images/hero2.jpg') }}');">
                <div class="text-center px-4 py-16 sm:px-6 lg:px-8">
                    <h1 class="text-4xl md:text-6xl font-bold text-white animate__animated animate__fadeInDown">{{ __('Premium Services') }}</h1>
                    <p class="mt-4 text-xl text-white max-w-2xl mx-auto animate__animated animate__fadeInUp">{{ __('Get access to exclusive features and tools') }}</p>
                    <div class="mt-8 flex justify-center space-x-4 animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="#services" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-colors duration-300 flex items-center">
                            <i class="fas fa-crown mr-2"></i> {{ __('VIP Features') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize fancybox slider
            Fancybox.bind('[data-fancybox="hero-slider"]', {
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
            const bgAnimation = document.getElementById('hero-bg-animation');
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
