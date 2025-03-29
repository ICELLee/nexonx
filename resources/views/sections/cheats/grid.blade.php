<div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-4 animate-pulse-slow">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">
            {{ __('Available Cheats') }}
        </span>
    </h2>
    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto hover:text-indigo-600 dark:hover:text-indigo-300 transition-colors duration-300">
        {{ __('Choose from our selection of premium cheats for your favorite games.') }}
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Cheat 1 -->
    <div class="cheat-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden group relative">
        <!-- Constant Glow Border Animation -->
        <div class="absolute inset-0 rounded-xl overflow-hidden">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-20 animate-gradient-flow rounded-xl"></div>
        </div>

        <!-- Pulsing Border Effect -->
        <div class="absolute inset-0 border-2 border-transparent rounded-xl group-hover:border-indigo-400 transition-all duration-500 animate-pulse-border"></div>

        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cheats/cheat1.jpg') }}" alt="ESP & Aimbot"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                <h3 class="text-xl font-bold text-white">{{ __('ESP & Aimbot') }}</h3>
            </div>
        </div>
        <div class="p-6 relative z-10">
            <div class="flex justify-between items-start mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-700 transition-colors duration-300">
                    <i class="fas fa-star mr-1 text-yellow-400 animate-spin-slow"></i> {{ __('Premium') }}
                </span>
                <span class="text-lg font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-500 transition-colors duration-300">
                    €14.99/<span class="text-sm">{{ __('month') }}</span>
                </span>
            </div>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6">
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Player ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Item ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Customizable Aimbot') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('No Recoil') }}
                </li>
            </ul>

            <div class="flex space-x-3">
                <a href="#" class="btn-glow flex-1 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-lg transition-all duration-500 transform hover:-translate-y-1 hover:shadow-xl flex items-center justify-center">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-bolt mr-2 animate-pulse-fast"></i>
                        {{ __('Instant Purchase') }}
                    </span>
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors duration-300 hover:border-indigo-400 flex items-center justify-center"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('View Demo') }}">
                    <i class="fas fa-play text-indigo-600 dark:text-indigo-400"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Cheat 2 -->
    <div class="cheat-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden group relative">
        <!-- Constant Glow Border Animation -->
        <div class="absolute inset-0 rounded-xl overflow-hidden">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-20 animate-gradient-flow rounded-xl"></div>
        </div>

        <!-- Pulsing Border Effect -->
        <div class="absolute inset-0 border-2 border-transparent rounded-xl group-hover:border-indigo-400 transition-all duration-500 animate-pulse-border"></div>

        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cheats/cheat2.jpg') }}" alt="ESP & Aimbot"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                <h3 class="text-xl font-bold text-white">{{ __('ESP & Aimbot') }}</h3>
            </div>
        </div>
        <div class="p-6 relative z-10">
            <div class="flex justify-between items-start mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-700 transition-colors duration-300">
                    <i class="fas fa-star mr-1 text-yellow-400 animate-spin-slow"></i> {{ __('Premium') }}
                </span>
                <span class="text-lg font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-500 transition-colors duration-300">
                    €14.99/<span class="text-sm">{{ __('month') }}</span>
                </span>
            </div>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6">
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Player ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Item ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Customizable Aimbot') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('No Recoil') }}
                </li>
            </ul>

            <div class="flex space-x-3">
                <a href="#" class="btn-glow flex-1 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-lg transition-all duration-500 transform hover:-translate-y-1 hover:shadow-xl flex items-center justify-center">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-bolt mr-2 animate-pulse-fast"></i>
                        {{ __('Instant Purchase') }}
                    </span>
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors duration-300 hover:border-indigo-400 flex items-center justify-center"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('View Demo') }}">
                    <i class="fas fa-play text-indigo-600 dark:text-indigo-400"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Cheat 3 -->
    <div class="cheat-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden group relative">
        <!-- Constant Glow Border Animation -->
        <div class="absolute inset-0 rounded-xl overflow-hidden">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-20 animate-gradient-flow rounded-xl"></div>
        </div>

        <!-- Pulsing Border Effect -->
        <div class="absolute inset-0 border-2 border-transparent rounded-xl group-hover:border-indigo-400 transition-all duration-500 animate-pulse-border"></div>

        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cheats/cheat3.jpg') }}" alt="ESP & Aimbot"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                <h3 class="text-xl font-bold text-white">{{ __('ESP & Aimbot') }}</h3>
            </div>
        </div>
        <div class="p-6 relative z-10">
            <div class="flex justify-between items-start mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-700 transition-colors duration-300">
                    <i class="fas fa-star mr-1 text-yellow-400 animate-spin-slow"></i> {{ __('Premium') }}
                </span>
                <span class="text-lg font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-500 transition-colors duration-300">
                    €14.99/<span class="text-sm">{{ __('month') }}</span>
                </span>
            </div>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6">
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Player ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Item ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Customizable Aimbot') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('No Recoil') }}
                </li>
            </ul>

            <div class="flex space-x-3">
                <a href="#" class="btn-glow flex-1 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-lg transition-all duration-500 transform hover:-translate-y-1 hover:shadow-xl flex items-center justify-center">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-bolt mr-2 animate-pulse-fast"></i>
                        {{ __('Instant Purchase') }}
                    </span>
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors duration-300 hover:border-indigo-400 flex items-center justify-center"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('View Demo') }}">
                    <i class="fas fa-play text-indigo-600 dark:text-indigo-400"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Cheat 4 -->
    <div class="cheat-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden group relative">
        <!-- Constant Glow Border Animation -->
        <div class="absolute inset-0 rounded-xl overflow-hidden">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-20 animate-gradient-flow rounded-xl"></div>
        </div>

        <!-- Pulsing Border Effect -->
        <div class="absolute inset-0 border-2 border-transparent rounded-xl group-hover:border-indigo-400 transition-all duration-500 animate-pulse-border"></div>

        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cheats/cheat4.jpg') }}" alt="ESP & Aimbot"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                <h3 class="text-xl font-bold text-white">{{ __('ESP & Aimbot') }}</h3>
            </div>
        </div>
        <div class="p-6 relative z-10">
            <div class="flex justify-between items-start mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-700 transition-colors duration-300">
                    <i class="fas fa-star mr-1 text-yellow-400 animate-spin-slow"></i> {{ __('Premium') }}
                </span>
                <span class="text-lg font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-500 transition-colors duration-300">
                    €14.99/<span class="text-sm">{{ __('month') }}</span>
                </span>
            </div>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6">
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Player ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Item ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Customizable Aimbot') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('No Recoil') }}
                </li>
            </ul>

            <div class="flex space-x-3">
                <a href="#" class="btn-glow flex-1 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-lg transition-all duration-500 transform hover:-translate-y-1 hover:shadow-xl flex items-center justify-center">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-bolt mr-2 animate-pulse-fast"></i>
                        {{ __('Instant Purchase') }}
                    </span>
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors duration-300 hover:border-indigo-400 flex items-center justify-center"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('View Demo') }}">
                    <i class="fas fa-play text-indigo-600 dark:text-indigo-400"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Cheat 5 -->
    <div class="cheat-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden group relative">
        <!-- Constant Glow Border Animation -->
        <div class="absolute inset-0 rounded-xl overflow-hidden">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-20 animate-gradient-flow rounded-xl"></div>
        </div>

        <!-- Pulsing Border Effect -->
        <div class="absolute inset-0 border-2 border-transparent rounded-xl group-hover:border-indigo-400 transition-all duration-500 animate-pulse-border"></div>

        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cheats/cheat5.jpg') }}" alt="ESP & Aimbot"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                <h3 class="text-xl font-bold text-white">{{ __('ESP & Aimbot') }}</h3>
            </div>
        </div>
        <div class="p-6 relative z-10">
            <div class="flex justify-between items-start mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-700 transition-colors duration-300">
                    <i class="fas fa-star mr-1 text-yellow-400 animate-spin-slow"></i> {{ __('Premium') }}
                </span>
                <span class="text-lg font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-500 transition-colors duration-300">
                    €14.99/<span class="text-sm">{{ __('month') }}</span>
                </span>
            </div>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6">
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Player ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Item ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Customizable Aimbot') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('No Recoil') }}
                </li>
            </ul>

            <div class="flex space-x-3">
                <a href="#" class="btn-glow flex-1 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-lg transition-all duration-500 transform hover:-translate-y-1 hover:shadow-xl flex items-center justify-center">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-bolt mr-2 animate-pulse-fast"></i>
                        {{ __('Instant Purchase') }}
                    </span>
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors duration-300 hover:border-indigo-400 flex items-center justify-center"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('View Demo') }}">
                    <i class="fas fa-play text-indigo-600 dark:text-indigo-400"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Cheat 6 -->
    <div class="cheat-card bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden group relative">
        <!-- Constant Glow Border Animation -->
        <div class="absolute inset-0 rounded-xl overflow-hidden">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-20 animate-gradient-flow rounded-xl"></div>
        </div>

        <!-- Pulsing Border Effect -->
        <div class="absolute inset-0 border-2 border-transparent rounded-xl group-hover:border-indigo-400 transition-all duration-500 animate-pulse-border"></div>

        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cheats/cheat6.jpg') }}" alt="ESP & Aimbot"
                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-4">
                <h3 class="text-xl font-bold text-white">{{ __('ESP & Aimbot') }}</h3>
            </div>
        </div>
        <div class="p-6 relative z-10">
            <div class="flex justify-between items-start mb-4">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-700 transition-colors duration-300">
                    <i class="fas fa-star mr-1 text-yellow-400 animate-spin-slow"></i> {{ __('Premium') }}
                </span>
                <span class="text-lg font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-500 transition-colors duration-300">
                    €14.99/<span class="text-sm">{{ __('month') }}</span>
                </span>
            </div>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6">
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Player ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Item ESP') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('Customizable Aimbot') }}
                </li>
                <li class="flex items-center group-hover:text-white transition-colors duration-300">
                    <i class="fas fa-check-circle text-green-500 mr-2 group-hover:animate-bounce"></i> {{ __('No Recoil') }}
                </li>
            </ul>

            <div class="flex space-x-3">
                <a href="#" class="btn-glow flex-1 px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-lg transition-all duration-500 transform hover:-translate-y-1 hover:shadow-xl flex items-center justify-center">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-bolt mr-2 animate-pulse-fast"></i>
                        {{ __('Instant Purchase') }}
                    </span>
                </a>
                <a href="#" class="px-4 py-2 border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-medium rounded-lg transition-colors duration-300 hover:border-indigo-400 flex items-center justify-center"
                   data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('View Demo') }}">
                    <i class="fas fa-play text-indigo-600 dark:text-indigo-400"></i>
                </a>
            </div>
        </div>
    </div>
</div>

