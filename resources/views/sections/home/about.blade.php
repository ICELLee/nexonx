<div id="about" class="py-16 relative overflow-hidden">
    <!-- Floating background elements -->
    <div class="absolute -top-32 left-0 w-64 h-64 bg-purple-500/10 rounded-full filter blur-3xl animate-float-slow"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-600/10 rounded-full filter blur-3xl animate-float-slower animation-delay-3000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
            <!-- Text Content -->
            <div class="mb-12 lg:mb-0 animate__animated animate__fadeInLeft">
                <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-500 group/title">
          <span class="relative inline-block">
            <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-purple-400 transform scale-x-0 group-hover/title:scale-x-100 transition-transform duration-500 origin-left"></span>
            {{ __('About NexonX') }}
          </span>
                </h2>

                <div class="space-y-4 text-gray-600 dark:text-gray-300">
                    <p class="hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-300 flex items-start">
                        <i class="fas fa-rocket text-purple-400 mr-3 mt-1 animate-pulse-slow"></i>
                        {{ __('Founded in 2015, NexonX has grown to become one of the most trusted names in gaming services. Our team consists of passionate gamers and developers who understand what players need.') }}
                    </p>

                    <p class="hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-300 flex items-start">
                        <i class="fas fa-shield-alt text-purple-400 mr-3 mt-1 animate-bounce-slow"></i>
                        {{ __('We pride ourselves on delivering high-quality, undetectable tools that enhance your gaming experience without compromising your account security.') }}
                    </p>

                    <p class="hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-300 flex items-start">
                        <i class="fas fa-trophy text-purple-400 mr-3 mt-1 animate-spin-slow"></i>
                        {{ __('Our commitment to excellence and customer satisfaction sets us apart from the competition.') }}
                    </p>
                </div>

                <div class="mt-8">
                    <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 transition-all duration-500 transform hover:-translate-y-1 hover:shadow-lg active:scale-95 group/button">
                        <i class="fas fa-book-open mr-2 group-hover/button:animate-bounce"></i>
                        {{ __('Read Our Story') }}
                        <i class="fas fa-arrow-right ml-2 opacity-0 group-hover/button:opacity-100 group-hover/button:translate-x-1 transition-all duration-300"></i>
                    </a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="relative animate__animated animate__fadeInRight group/image">
                <div class="relative w-full h-64 sm:h-96 lg:h-full overflow-hidden rounded-xl shadow-2xl transition-all duration-700 hover:shadow-purple-500/20">
                    <img src="{{ asset('images/home/about.jpg') }}" alt="About NexonX" class="w-full h-full object-cover transition-transform duration-700 group-hover/image:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                </div>

                <!-- Animated Years Badge -->
                <div class="absolute -bottom-6 -right-6 bg-gradient-to-br from-purple-600 to-indigo-600 w-32 h-32 rounded-full flex items-center justify-center shadow-xl hover:shadow-purple-500/30 transition-all duration-500 transform hover:scale-110 hover:rotate-6">
                    <div class="text-white text-center">
                        <div class="text-3xl font-bold animate-count-up" data-target="5">0</div>
                        <div class="text-sm">{{ __('Years') }}</div>
                    </div>
                    <div class="absolute inset-0 rounded-full border-2 border-transparent hover:border-purple-300/50 transition-all duration-500 pointer-events-none"></div>
                </div>

                <!-- Floating Icons -->
                <div class="absolute -top-4 -left-4 w-12 h-12 bg-purple-500/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover/image:animate-float-fast transition-all duration-500">
                    <i class="fas fa-gamepad text-purple-300"></i>
                </div>
                <div class="absolute -bottom-4 left-1/4 w-10 h-10 bg-indigo-500/20 backdrop-blur-sm rounded-full flex items-center justify-center group-hover/image:animate-float-slow animation-delay-200 transition-all duration-500">
                    <i class="fas fa-code text-indigo-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Custom Animations */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(2deg); }
    }

    @keyframes float-slower {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(10px) rotate(-2deg); }
    }

    @keyframes float-fast {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    @keyframes pulse-slow {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.05); opacity: 0.8; }
    }

    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .animate-float-slow {
        animation: float-slow 8s ease-in-out infinite;
    }

    .animate-float-slower {
        animation: float-slower 10s ease-in-out infinite;
    }

    .animate-float-fast {
        animation: float-fast 3s ease-in-out infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounce-slow 2s ease-in-out infinite;
    }

    .animate-spin-slow {
        animation: spin-slow 8s linear infinite;
    }

    .animation-delay-200 {
        animation-delay: 0.2s;
    }

    .animation-delay-3000 {
        animation-delay: 3s;
    }

    /* Count Up Animation */
    .animate-count-up {
        transition: all 1s ease-out;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate years counter
        const yearsElement = document.querySelector('.animate-count-up');
        if (yearsElement) {
            const target = parseInt(yearsElement.getAttribute('data-target'));
            let current = 0;
            const increment = target / 20;

            const interval = setInterval(() => {
                current += increment;
                if (current >= target) {
                    clearInterval(interval);
                    current = target;
                }
                yearsElement.textContent = Math.floor(current) + '+';
            }, 50);
        }

        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__fadeInLeft', 'animate__fadeInRight');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('#about [class*="animate__"]').forEach(el => {
            observer.observe(el);
        });
    });
</script>
