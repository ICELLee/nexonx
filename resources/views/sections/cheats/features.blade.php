<div class="py-16 bg-gradient-to-br from-indigo-600 via-purple-600 to-indigo-800 dark:from-indigo-800 dark:via-purple-800 dark:to-indigo-900 text-white transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-3xl font-bold mb-6 animate-pulse-slow">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-white via-purple-200 to-white animate-text-gradient">
                    {{ __('Why Choose Our Cheats?') }}
                </span>
            </h2>
            <p class="max-w-2xl mx-auto text-indigo-100 hover:text-white transition-colors duration-300">
                {{ __('We provide the best gaming experience with our premium undetectable cheats.') }}
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="feature-card group relative bg-white/10 backdrop-blur-sm rounded-xl p-8 hover:bg-white/20 transition-all duration-500 overflow-hidden">
                <!-- Constant Glow Border -->
                <div class="absolute inset-0 rounded-xl overflow-hidden">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 opacity-20 animate-gradient-flow rounded-xl"></div>
                </div>

                <!-- Pulsing Circle -->
                <div class="absolute top-4 right-4 w-3 h-3 bg-purple-400 rounded-full animate-pulse-fast"></div>

                <div class="flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6 mx-auto group-hover:bg-white/30 transition-colors duration-300 relative">
                    <div class="absolute inset-0 rounded-full border-2 border-purple-400 opacity-0 group-hover:opacity-100 animate-pulse-border"></div>
                    <i class="fas fa-shield-alt text-2xl text-white group-hover:animate-bounce"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-3 group-hover:text-purple-200 transition-colors duration-300">{{ __('Undetectable') }}</h3>
                <p class="text-indigo-100 text-center group-hover:text-white transition-colors duration-300">
                    {{ __('Our cheats use advanced techniques to stay undetected by anti-cheat systems.') }}
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card group relative bg-white/10 backdrop-blur-sm rounded-xl p-8 hover:bg-white/20 transition-all duration-500 overflow-hidden">
                <!-- Constant Glow Border -->
                <div class="absolute inset-0 rounded-xl overflow-hidden">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 opacity-20 animate-gradient-flow rounded-xl"></div>
                </div>

                <!-- Pulsing Circle -->
                <div class="absolute top-4 right-4 w-3 h-3 bg-purple-400 rounded-full animate-pulse-fast"></div>

                <div class="flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6 mx-auto group-hover:bg-white/30 transition-colors duration-300 relative">
                    <div class="absolute inset-0 rounded-full border-2 border-purple-400 opacity-0 group-hover:opacity-100 animate-pulse-border"></div>
                    <i class="fas fa-sync-alt text-2xl text-white group-hover:animate-spin-slow"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-3 group-hover:text-purple-200 transition-colors duration-300">{{ __('Frequent Updates') }}</h3>
                <p class="text-indigo-100 text-center group-hover:text-white transition-colors duration-300">
                    {{ __('We update our cheats regularly to ensure they work with the latest game versions.') }}
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card group relative bg-white/10 backdrop-blur-sm rounded-xl p-8 hover:bg-white/20 transition-all duration-500 overflow-hidden">
                <!-- Constant Glow Border -->
                <div class="absolute inset-0 rounded-xl overflow-hidden">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 opacity-20 animate-gradient-flow rounded-xl"></div>
                </div>

                <!-- Pulsing Circle -->
                <div class="absolute top-4 right-4 w-3 h-3 bg-purple-400 rounded-full animate-pulse-fast"></div>

                <div class="flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-6 mx-auto group-hover:bg-white/30 transition-colors duration-300 relative">
                    <div class="absolute inset-0 rounded-full border-2 border-purple-400 opacity-0 group-hover:opacity-100 animate-pulse-border"></div>
                    <i class="fas fa-headset text-2xl text-white group-hover:animate-pulse"></i>
                </div>
                <h3 class="text-xl font-bold text-center mb-3 group-hover:text-purple-200 transition-colors duration-300">{{ __('24/7 Support') }}</h3>
                <p class="text-indigo-100 text-center group-hover:text-white transition-colors duration-300">
                    {{ __('Our support team is available around the clock to assist you with any issues.') }}
                </p>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="#" class="btn-glow inline-flex items-center px-8 py-4 border border-transparent text-lg font-bold rounded-xl shadow-xl text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 transition-all duration-500 transform hover:-translate-y-1 hover:shadow-2xl">
                <span class="relative z-10 flex items-center">
                    <i class="fas fa-headset mr-3 animate-pulse-slow"></i>
                    <span class="hover:tracking-wide transition-all duration-300">
                        {{ __('Need Help? Contact Support 24/7') }}
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>

<style>
    /* Animations */
    @keyframes gradient-flow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    @keyframes text-gradient {
        0% { background-position: 0% 50%; }
        100% { background-position: 100% 50%; }
    }

    @keyframes pulse-slow {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(1.02); }
    }

    @keyframes pulse-fast {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(1.2); }
    }

    @keyframes pulse-border {
        0%, 100% { opacity: 0.7; box-shadow: 0 0 10px rgba(139, 92, 246, 0.5); }
        50% { opacity: 1; box-shadow: 0 0 20px rgba(236, 72, 153, 0.8); }
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* Applied Animations */
    .animate-gradient-flow {
        background-size: 200% 200%;
        animation: gradient-flow 6s ease infinite;
    }

    .animate-text-gradient {
        background-size: 200% auto;
        animation: text-gradient 3s linear infinite;
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s ease infinite;
    }

    .animate-pulse-fast {
        animation: pulse-fast 1.5s ease infinite;
    }

    .animate-pulse-border {
        animation: pulse-border 2s ease infinite;
    }

    .animate-bounce {
        animation: bounce 1s ease infinite;
    }

    .animate-spin-slow {
        animation: spin-slow 3s linear infinite;
    }

    /* Card Effects */
    .feature-card {
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        position: relative;
    }

    .feature-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(124, 58, 237, 0.3);
    }

    /* Glow Button Effect */
    .btn-glow {
        position: relative;
        overflow: hidden;
    }

    .btn-glow::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(255, 255, 255, 0.2),
            transparent
        );
        transition: all 0.7s ease;
    }

    .btn-glow:hover::before {
        left: 100%;
    }

    .btn-glow::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: inherit;
        padding: 2px;
        background: linear-gradient(45deg, #8b5cf6, #ec4899, #8b5cf6);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        pointer-events: none;
        animation: borderGlow 3s linear infinite;
        background-size: 200% 200%;
    }

    @keyframes borderGlow {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>
