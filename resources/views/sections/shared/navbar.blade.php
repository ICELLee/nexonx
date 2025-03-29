<nav class="bg-white dark:bg-gray-800 shadow-lg sticky top-0 z-40 transition-all duration-500 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo with enhanced animated gradient -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center transform hover:scale-105 transition-transform duration-300 group">
                    <svg class="h-8 w-8 text-indigo-500 dark:text-indigo-300 group-hover:text-indigo-600 dark:group-hover:text-indigo-200 transition-all duration-500 group-hover:rotate-12" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="ml-2 text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-300 via-pink-200 to-purple-300 bg-size-200 bg-pos-0 animate-gradient group-hover:animate-gradient-faster">NexonX</span>
                </a>
            </div>

            <!-- Navigation Links with enhanced hover and active states -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="{{ route('home') }}" class="group relative text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center {{ request()->routeIs('home') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-home mr-2 transition-all duration-300 group-hover:text-indigo-500 dark:group-hover:text-indigo-300 group-hover:scale-125"></i>
                    <span class="relative">{{ __('Home') }}</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-full"></span>
                </a>
                <a href="{{ route('cheats') }}" class="group relative text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center {{ request()->routeIs('cheats') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-bolt mr-2 transition-all duration-300 group-hover:text-indigo-500 dark:group-hover:text-indigo-300 group-hover:scale-125"></i>
                    <span class="relative">{{ __('Cheats') }}</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-full"></span>
                </a>
                <a href="{{ route('reports') }}" class="group relative text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center {{ request()->routeIs('reports') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-flag mr-2 transition-all duration-300 group-hover:text-indigo-500 dark:group-hover:text-indigo-300 group-hover:scale-125"></i>
                    <span class="relative">{{ __('Reports') }}</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-full"></span>
                </a>
                <a href="{{ route('items') }}" class="group relative text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center {{ request()->routeIs('items') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-box-open mr-2 transition-all duration-300 group-hover:text-indigo-500 dark:group-hover:text-indigo-300 group-hover:scale-125"></i>
                    <span class="relative">{{ __('Items') }}</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-full"></span>
                </a>
                <a href="{{ route('middleman') }}" class="group relative text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center {{ request()->routeIs('middleman') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-handshake mr-2 transition-all duration-300 group-hover:text-indigo-500 dark:group-hover:text-indigo-300 group-hover:scale-125"></i>
                    <span class="relative">{{ __('Middleman') }}</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-full"></span>
                </a>
                <a href="{{ route('friendfinder') }}" class="group relative text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 flex items-center {{ request()->routeIs('friendfinder') ? 'active-nav-link' : '' }}">
                    <i class="fas fa-user-friends mr-2 transition-all duration-300 group-hover:text-indigo-500 dark:group-hover:text-indigo-300 group-hover:scale-125"></i>
                    <span class="relative">{{ __('Friend Finder') }}</span>
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-indigo-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-full"></span>
                </a>
            </div>

            <!-- Right Side with enhanced interactions -->
            <div class="flex items-center">
                <!-- Language Toggle with improved animation -->
                <div class="relative mr-4">
                    <button id="language-toggle" class="flex items-center text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 transition-all duration-300 transform hover:scale-110 group">
                        <i class="fas fa-language mr-1 text-indigo-500 dark:text-indigo-300 group-hover:animate-bounce"></i>
                        <span class="font-medium">{{ strtoupper(app()->getLocale()) }}</span>
                        <i class="fas fa-chevron-down ml-1 text-xs transition-transform duration-300 group-hover:text-indigo-500"></i>
                    </button>
                    <div id="language-dropdown" class="hidden absolute right-0 mt-2 w-24 bg-white dark:bg-gray-700 rounded-md shadow-lg z-50 overflow-hidden transition-all duration-300 origin-top transform scale-95 opacity-0 border border-gray-100 dark:border-gray-600">
                        <a href="{{ route('language.switch', ['locale' => 'en']) }}" class="block px-4 py-2 text-gray-800 dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-600 transition-all duration-300 flex items-center hover:pl-5 hover:font-medium">
                            <i class="fas fa-flag-usa mr-2 text-indigo-400"></i> EN
                        </a>
                        <a href="{{ route('language.switch', ['locale' => 'de']) }}" class="block px-4 py-2 text-gray-800 dark:text-white hover:bg-indigo-50 dark:hover:bg-gray-600 transition-all duration-300 flex items-center hover:pl-5 hover:font-medium">
                            <i class="fas fa-flag mr-2 text-indigo-400"></i> DE
                        </a>
                    </div>
                </div>

                <!-- Dark Mode Toggle with enhanced animation -->
                <button id="theme-toggle" class="text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 transition-all duration-500 transform hover:rotate-[20deg] hover:scale-110 group">
                    <i id="theme-icon" class="fas fa-moon text-lg text-indigo-500 dark:text-yellow-300 group-hover:scale-110 transition-all duration-300"></i>
                </button>

                <!-- Mobile menu button with improved animation -->
                <div class="md:hidden flex items-center ml-4">
                    <button id="mobile-menu-button" class="text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition-all duration-300 transform hover:scale-110 group">
                        <svg class="h-6 w-6 transform transition-transform duration-300 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu with enhanced slide animation -->
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 transition-all duration-500 ease-in-out transform -translate-y-full opacity-0 shadow-xl">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ route('home') }}" class="group text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 block px-3 py-3 rounded-md text-base font-medium transition-all duration-300 flex items-center hover:bg-indigo-50 dark:hover:bg-gray-700 {{ request()->routeIs('home') ? 'active-nav-link' : '' }}">
                <i class="fas fa-home mr-3 text-indigo-500 group-hover:scale-125 transition-all duration-300 w-5 text-center"></i>
                {{ __('Home') }}
                <i class="fas fa-chevron-right ml-auto text-xs text-gray-400 group-hover:text-indigo-500 transition-all duration-300"></i>
            </a>
            <a href="{{ route('cheats') }}" class="group text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 block px-3 py-3 rounded-md text-base font-medium transition-all duration-300 flex items-center hover:bg-indigo-50 dark:hover:bg-gray-700 {{ request()->routeIs('cheats') ? 'active-nav-link' : '' }}">
                <i class="fas fa-bolt mr-3 text-indigo-500 group-hover:scale-125 transition-all duration-300 w-5 text-center"></i>
                {{ __('Cheats') }}
                <i class="fas fa-chevron-right ml-auto text-xs text-gray-400 group-hover:text-indigo-500 transition-all duration-300"></i>
            </a>
            <a href="{{ route('reports') }}" class="group text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 block px-3 py-3 rounded-md text-base font-medium transition-all duration-300 flex items-center hover:bg-indigo-50 dark:hover:bg-gray-700 {{ request()->routeIs('reports') ? 'active-nav-link' : '' }}">
                <i class="fas fa-flag mr-3 text-indigo-500 group-hover:scale-125 transition-all duration-300 w-5 text-center"></i>
                {{ __('Reports') }}
                <i class="fas fa-chevron-right ml-auto text-xs text-gray-400 group-hover:text-indigo-500 transition-all duration-300"></i>
            </a>
            <a href="{{ route('items') }}" class="group text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 block px-3 py-3 rounded-md text-base font-medium transition-all duration-300 flex items-center hover:bg-indigo-50 dark:hover:bg-gray-700 {{ request()->routeIs('items') ? 'active-nav-link' : '' }}">
                <i class="fas fa-box-open mr-3 text-indigo-500 group-hover:scale-125 transition-all duration-300 w-5 text-center"></i>
                {{ __('Items') }}
                <i class="fas fa-chevron-right ml-auto text-xs text-gray-400 group-hover:text-indigo-500 transition-all duration-300"></i>
            </a>
            <a href="{{ route('middleman') }}" class="group text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 block px-3 py-3 rounded-md text-base font-medium transition-all duration-300 flex items-center hover:bg-indigo-50 dark:hover:bg-gray-700 {{ request()->routeIs('middleman') ? 'active-nav-link' : '' }}">
                <i class="fas fa-handshake mr-3 text-indigo-500 group-hover:scale-125 transition-all duration-300 w-5 text-center"></i>
                {{ __('Middleman') }}
                <i class="fas fa-chevron-right ml-auto text-xs text-gray-400 group-hover:text-indigo-500 transition-all duration-300"></i>
            </a>
            <a href="{{ route('friendfinder') }}" class="group text-gray-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-300 block px-3 py-3 rounded-md text-base font-medium transition-all duration-300 flex items-center hover:bg-indigo-50 dark:hover:bg-gray-700 {{ request()->routeIs('friendfinder') ? 'active-nav-link' : '' }}">
                <i class="fas fa-user-friends mr-3 text-indigo-500 group-hover:scale-125 transition-all duration-300 w-5 text-center"></i>
                {{ __('Friend Finder') }}
                <i class="fas fa-chevron-right ml-auto text-xs text-gray-400 group-hover:text-indigo-500 transition-all duration-300"></i>
            </a>
        </div>
    </div>
</nav>

@push('styles')
    <style>
        /* Enhanced gradient animation for NexonX */
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        @keyframes gradient-faster {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 4s ease infinite;
            background-image: linear-gradient(90deg, #d8b4fe, #f5d0fe, #fbcfe8, #f9a8d4, #f5d0fe, #d8b4fe);
        }

        .animate-gradient-faster {
            animation: gradient-faster 2s ease infinite;
        }

        /* Enhanced active link styles with pulse animation */
        .active-nav-link {
            position: relative;
            color: #7c3aed !important;
            font-weight: 500;
        }

        .dark .active-nav-link {
            color: #a78bfa !important;
        }

        .active-nav-link i {
            color: #7c3aed !important;
            animation: pulse 2s infinite;
        }

        .dark .active-nav-link i {
            color: #a78bfa !important;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        /* Hover animations */
        .hover-underline-animation {
            position: relative;
        }

        .hover-underline-animation::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #7c3aed;
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        .hover-underline-animation:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Bounce animation for icons */
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .hover\:animate-bounce:hover {
            animation: bounce 0.5s ease infinite;
        }

        /* Custom wiggle animation */
        @keyframes custom-wiggle {
            0%, 100% { transform: rotate(-5deg) scale(1.1); }
            50% { transform: rotate(5deg) scale(1.1); }
        }

        .hover\:animate-wiggle:hover {
            animation: custom-wiggle 0.5s ease infinite;
        }

        /* Floating animation */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Enhanced mobile menu toggle with animation
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            const button = this.querySelector('svg');

            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                setTimeout(() => {
                    menu.classList.remove('opacity-0');
                    menu.classList.remove('-translate-y-full');
                    button.classList.add('rotate-90');
                    button.classList.add('text-indigo-500');
                }, 10);
            } else {
                menu.classList.add('opacity-0');
                menu.classList.add('-translate-y-full');
                button.classList.remove('rotate-90');
                button.classList.remove('text-indigo-500');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 500);
            }
        });

        // Enhanced language dropdown toggle with animation
        document.getElementById('language-toggle').addEventListener('click', function(e) {
            e.stopPropagation();
            const dropdown = document.getElementById('language-dropdown');
            const chevron = this.querySelector('.fa-chevron-down');

            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
                setTimeout(() => {
                    dropdown.classList.remove('scale-95');
                    dropdown.classList.remove('opacity-0');
                    chevron.classList.add('rotate-180');
                    chevron.classList.add('text-indigo-500');
                }, 10);
            } else {
                dropdown.classList.add('scale-95');
                dropdown.classList.add('opacity-0');
                chevron.classList.remove('rotate-180');
                chevron.classList.remove('text-indigo-500');
                setTimeout(() => {
                    dropdown.classList.add('hidden');
                }, 300);
            }
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            const languageToggle = document.getElementById('language-toggle');
            const languageDropdown = document.getElementById('language-dropdown');

            if (languageDropdown && !languageToggle.contains(event.target) && !languageDropdown.contains(event.target)) {
                const chevron = languageToggle.querySelector('.fa-chevron-down');
                languageDropdown.classList.add('scale-95');
                languageDropdown.classList.add('opacity-0');
                if (chevron) {
                    chevron.classList.remove('rotate-180');
                    chevron.classList.remove('text-indigo-500');
                }
                setTimeout(() => {
                    languageDropdown.classList.add('hidden');
                }, 300);
            }
        });

        // Enhanced dark mode toggle with animation
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');

        if (localStorage.getItem('color-theme') === 'dark' || (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeIcon.classList.replace('fa-moon', 'fa-sun');
            themeIcon.classList.add('text-yellow-300');
        } else {
            document.documentElement.classList.remove('dark');
            themeIcon.classList.replace('fa-sun', 'fa-moon');
            themeIcon.classList.add('text-indigo-500');
        }

        themeToggle.addEventListener('click', function() {
            // Add animation classes
            themeIcon.classList.add('animate-spin', 'scale-125');

            setTimeout(() => {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                    themeIcon.classList.replace('fa-sun', 'fa-moon');
                    themeIcon.classList.remove('text-yellow-300');
                    themeIcon.classList.add('text-indigo-500');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                    themeIcon.classList.replace('fa-moon', 'fa-sun');
                    themeIcon.classList.remove('text-indigo-500');
                    themeIcon.classList.add('text-yellow-300');
                }

                // Remove animation classes after transition
                setTimeout(() => {
                    themeIcon.classList.remove('animate-spin', 'scale-125');
                }, 300);
            }, 150);
        });
    </script>
@endpush
