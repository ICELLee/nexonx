<footer class="bg-white dark:bg-gray-800 shadow-lg mt-12 transition-colors duration-500">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- About Section with Enhanced Animations -->
            <div class="md:col-span-1">
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-4 transform hover:translate-x-1 transition-transform duration-300">
                    <i class="fas fa-info-circle mr-2 animate-pulse"></i>
                    {{ __('About NexonX') }}
                </h3>
                <p class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 transition-colors duration-300">
                    {{ __('We provide the best tools and services for your gaming experience.') }}
                </p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 transform hover:-translate-y-1 hover:scale-110">
                        <i class="fab fa-twitter text-xl animate-float-slow"></i>
                    </a>
                    <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 transform hover:-translate-y-1 hover:scale-110">
                        <i class="fab fa-discord text-xl animate-float-slow" style="animation-delay: 0.2s"></i>
                    </a>
                    <a href="#" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 transform hover:-translate-y-1 hover:scale-110">
                        <i class="fab fa-instagram text-xl animate-float-slow" style="animation-delay: 0.4s"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links with Hover Effects -->
            <div>
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-4 transform hover:translate-x-1 transition-transform duration-300">
                    <i class="fas fa-bolt mr-2 animate-pulse"></i>
                    {{ __('Quick Links') }}
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            {{ __('Home') }}
                            <span class="block w-0 h-px bg-indigo-400 group-hover:w-full transition-all duration-500 ml-2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cheats') }}" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            {{ __('Cheats') }}
                            <span class="block w-0 h-px bg-indigo-400 group-hover:w-full transition-all duration-500 ml-2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('reports') }}" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            {{ __('Reports') }}
                            <span class="block w-0 h-px bg-indigo-400 group-hover:w-full transition-all duration-500 ml-2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('items') }}" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-indigo-400 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            {{ __('Items') }}
                            <span class="block w-0 h-px bg-indigo-400 group-hover:w-full transition-all duration-500 ml-2"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services with Active Effects -->
            <div>
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-4 transform hover:translate-x-1 transition-transform duration-300">
                    <i class="fas fa-cog mr-2 animate-spin-slow"></i>
                    {{ __('Services') }}
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('middleman') }}" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group active:text-indigo-700 dark:active:text-indigo-300">
                            <i class="fas fa-handshake mr-2 text-indigo-400 group-hover:animate-wiggle"></i>
                            {{ __('Middleman') }}
                            <span class="flex-1 border-b border-dashed border-gray-300 dark:border-gray-600 group-hover:border-indigo-400 mx-2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('friendfinder') }}" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group active:text-indigo-700 dark:active:text-indigo-300">
                            <i class="fas fa-user-friends mr-2 text-indigo-400 group-hover:animate-bounce"></i>
                            {{ __('Friend Finder') }}
                            <span class="flex-1 border-b border-dashed border-gray-300 dark:border-gray-600 group-hover:border-indigo-400 mx-2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group active:text-indigo-700 dark:active:text-indigo-300">
                            <i class="fas fa-crown mr-2 text-indigo-400 group-hover:animate-pulse"></i>
                            {{ __('VIP Services') }}
                            <span class="flex-1 border-b border-dashed border-gray-300 dark:border-gray-600 group-hover:border-indigo-400 mx-2"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-all duration-300 group active:text-indigo-700 dark:active:text-indigo-300">
                            <i class="fas fa-key mr-2 text-indigo-400 group-hover:animate-spin"></i>
                            {{ __('Account Recovery') }}
                            <span class="flex-1 border-b border-dashed border-gray-300 dark:border-gray-600 group-hover:border-indigo-400 mx-2"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact with Interactive Icons -->
            <div>
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-4 transform hover:translate-x-1 transition-transform duration-300">
                    <i class="fas fa-envelope mr-2 animate-bounce-slow"></i>
                    {{ __('Contact Us') }}
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start group">
                        <div class="bg-indigo-100 dark:bg-indigo-900 p-2 rounded-full group-hover:animate-pulse">
                            <i class="fas fa-envelope text-indigo-600 dark:text-indigo-300 group-hover:text-indigo-700 dark:group-hover:text-indigo-200 transition-colors duration-300"></i>
                        </div>
                        <div class="ml-3">
                            <span class="text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-100 transition-colors duration-300">support@nexonx.de</span>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Email support') }}</p>
                        </div>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-indigo-100 dark:bg-indigo-900 p-2 rounded-full group-hover:animate-pulse">
                            <i class="fas fa-headset text-indigo-600 dark:text-indigo-300 group-hover:text-indigo-700 dark:group-hover:text-indigo-200 transition-colors duration-300"></i>
                        </div>
                        <div class="ml-3">
                            <span class="text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-100 transition-colors duration-300">Discord Support</span>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Live chat') }}</p>
                        </div>
                    </li>
                    <li class="flex items-start group">
                        <div class="bg-indigo-100 dark:bg-indigo-900 p-2 rounded-full group-hover:animate-pulse">
                            <i class="fas fa-clock text-indigo-600 dark:text-indigo-300 group-hover:text-indigo-700 dark:group-hover:text-indigo-200 transition-colors duration-300"></i>
                        </div>
                        <div class="ml-3">
                            <span class="text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-100 transition-colors duration-300">24/7 Support</span>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ __('Always available') }}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom with Enhanced Animation -->
        <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700 relative overflow-hidden">
            <!-- Animated border -->
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-400 via-pink-500 to-indigo-500 animate-border-flow"></div>

            <p class="text-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-300">
                <i class="fas fa-copyright mr-1"></i> {{ date('Y') }} NexonX. {{ __('All rights reserved.') }}
            </p>

            <!-- Back to top button -->
            <div class="text-center mt-4">
                <a href="#" class="inline-flex items-center text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-300 group">
                    <i class="fas fa-arrow-up mr-1 group-hover:-translate-y-1 transition-transform duration-300"></i>
                    {{ __('Back to Top') }}
                </a>
            </div>
        </div>
    </div>
</footer>

@push('styles')
    <style>
        /* Custom Animations */
        @keyframes float-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        @keyframes border-flow {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        @keyframes wiggle {
            0%, 100% { transform: rotate(-3deg); }
            50% { transform: rotate(3deg); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-3px); }
        }

        /* Apply Animations */
        .animate-float-slow {
            animation: float-slow 3s ease-in-out infinite;
        }

        .animate-border-flow {
            background-size: 200% 100%;
            animation: border-flow 3s linear infinite;
        }

        .animate-wiggle {
            animation: wiggle 0.5s ease-in-out infinite;
        }

        .animate-pulse {
            animation: pulse 1.5s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin-slow 3s linear infinite;
        }

        .animate-bounce {
            animation: bounce 0.5s ease infinite;
        }

        .animate-bounce-slow {
            animation: bounce-slow 2s ease-in-out infinite;
        }

        /* Active Link Styles */
        a:active {
            transform: scale(0.98);
        }

        a:active i {
            animation: none !important;
            color: inherit !important;
        }
    </style>
@endpush
