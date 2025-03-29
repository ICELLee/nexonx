<div id="tools" class="py-16 bg-gray-50 dark:bg-gray-800 rounded-xl transition-colors duration-300 relative overflow-hidden">
    <!-- Background floating elements -->
    <div class="absolute -top-20 -right-20 w-64 h-64 bg-purple-400 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob"></div>
    <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-10 animate-blob animation-delay-2000"></div>
    <div class="absolute top-1/3 left-1/4 w-48 h-48 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-5 animate-blob animation-delay-4000"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 animate__animated animate__fadeIn animate__infinite animate__slower animate__pulse">
                {{ __('Our Tools & Cheats') }}
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                {{ __('Discover our collection of premium tools designed to enhance your gaming experience.') }}
            </p>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tool Card 1 -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group relative animate__animated animate__fadeInUp">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/home/tool1.jpg') }}" alt="Tool 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-purple-300 transition-colors duration-300">{{ __('ESP & Aimbot') }}</h3>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-purple-100 dark:group-hover:bg-purple-900 group-hover:text-purple-800 dark:group-hover:text-purple-200 transition-all duration-300">
                            <i class="fas fa-star mr-1 animate-spin-slow"></i> {{ __('Premium') }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 dark:text-gray-300 mb-4 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">{{ __('Advanced targeting system with customizable settings.') }}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-1">
                            <i class="fas fa-shield-alt text-purple-400 group-hover:animate-bounce"></i>
                            <i class="fas fa-crosshairs text-purple-400 ml-1 group-hover:animate-bounce animation-delay-100"></i>
                        </div>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-purple-600 dark:hover:text-purple-300 font-medium flex items-center transition-colors duration-300 group">
                            {{ __('Learn More') }}
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

            <!-- Tool Card 2 -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group relative animate__animated animate__fadeInUp animate__delay-1s">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/home/tool2.jpg') }}" alt="Tool 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-purple-300 transition-colors duration-300">{{ __('Item Generator') }}</h3>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 group-hover:bg-purple-100 dark:group-hover:bg-purple-900 group-hover:text-purple-800 dark:group-hover:text-purple-200 transition-all duration-300">
                            <i class="fas fa-bolt mr-1 animate-pulse"></i> {{ __('Free') }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 dark:text-gray-300 mb-4 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">{{ __('Generate any in-game item with our advanced system.') }}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-1">
                            <i class="fas fa-cube text-purple-400 group-hover:animate-spin"></i>
                            <i class="fas fa-gem text-purple-400 ml-1 group-hover:animate-spin animation-delay-200"></i>
                        </div>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-purple-600 dark:hover:text-purple-300 font-medium flex items-center transition-colors duration-300 group">
                            {{ __('Learn More') }}
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>

            <!-- Tool Card 3 -->
            <div class="bg-white dark:bg-gray-700 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group relative animate__animated animate__fadeInUp animate__delay-2s">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/home/tool3.jpg') }}" alt="Tool 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                        <h3 class="text-xl font-bold text-white group-hover:text-purple-300 transition-colors duration-300">{{ __('Account Manager') }}</h3>
                    </div>
                    <div class="absolute top-4 right-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-purple-100 dark:group-hover:bg-purple-900 group-hover:text-purple-800 dark:group-hover:text-purple-200 transition-all duration-300">
                            <i class="fas fa-shield-virus mr-1 animate-pulse"></i> {{ __('Premium') }}
                        </span>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 dark:text-gray-300 mb-4 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">{{ __('Manage multiple accounts with ease and security.') }}</p>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-1">
                            <i class="fas fa-user-shield text-purple-400 group-hover:animate-wiggle"></i>
                            <i class="fas fa-key text-purple-400 ml-1 group-hover:animate-wiggle animation-delay-150"></i>
                        </div>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-purple-600 dark:hover:text-purple-300 font-medium flex items-center transition-colors duration-300 group">
                            {{ __('Learn More') }}
                            <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </a>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('cheats') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 transition-all duration-500 transform hover:scale-105 group animate__animated animate__pulse animate__infinite">
                <i class="fas fa-chevron-circle-right mr-2 transform group-hover:rotate-90 transition-transform duration-500"></i>
                {{ __('View All Cheats') }}
                <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <i class="fas fa-sparkles text-yellow-300 animate-spin-slow"></i>
                </span>
            </a>
        </div>
    </div>
</div>

<style>
    @keyframes blob {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        33% {
            transform: translate(30px, -50px) scale(1.1);
        }
        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes wiggle {
        0%, 100% { transform: rotate(-3deg); }
        50% { transform: rotate(3deg); }
    }

    .animate-blob {
        animation: blob 10s ease-in-out infinite;
    }

    .animation-delay-100 {
        animation-delay: 100ms;
    }

    .animation-delay-150 {
        animation-delay: 150ms;
    }

    .animation-delay-200 {
        animation-delay: 200ms;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    .animate-spin-slow {
        animation: spin-slow 3s linear infinite;
    }

    .animate-wiggle {
        animation: wiggle 0.5s ease-in-out infinite;
    }

    /* Active state effect */
    .group:active {
        transform: scale(0.98) translateY(0) !important;
        box-shadow: 0 4px 6px -1px rgba(109, 40, 217, 0.3), 0 2px 4px -1px rgba(109, 40, 217, 0.2) !important;
    }
</style>
