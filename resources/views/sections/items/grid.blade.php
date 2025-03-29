<div class="mb-12">
    <div class="flex justify-between items-center mb-6">
        <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 hover:text-purple-600 dark:hover:text-purple-300 transition-colors duration-300">
            <span class="inline-block relative group">
                {{ __('Items') }}
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-purple-500 transition-all duration-300 group-hover:w-full"></span>
            </span>
        </h3>
        <div class="text-sm text-gray-600 dark:text-gray-300 animate-pulse-slow">
            {{ __('Showing 1-40 of 1,245 items') }}
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
        <!-- Item 1 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group relative">
            <!-- Animated border -->
            <div class="absolute inset-0 border-2 border-transparent group-hover:border-purple-400/30 rounded-xl transition-all duration-500 pointer-events-none"></div>

            <!-- Floating VIP badge -->
            <div class="absolute top-2 right-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-xs font-bold px-2 py-1 rounded-full z-10 animate-bounce-slow">
                VIP
            </div>

            <div class="relative h-48 bg-gray-100 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <img src="{{ asset('images/items/item1.jpg') }}" alt="Diamond Crown" class="h-40 object-contain transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="p-4">
                <h4 class="font-bold text-gray-900 dark:text-white mb-1 truncate group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">
                    Diamond Crown
                </h4>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">ID: 12345</span>
                    <div class="flex space-x-2">
                        <span class="text-xs px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full group-hover:bg-blue-200 dark:group-hover:bg-blue-800 transition-colors duration-300">Girl</span>
                        <span class="text-xs px-2 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full group-hover:bg-purple-200 dark:group-hover:bg-purple-800 transition-colors duration-300">MSP2</span>
                    </div>
                </div>
            </div>
            <!-- Hover effect bar -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>

        <!-- Item 2 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group relative">
            <div class="absolute inset-0 border-2 border-transparent group-hover:border-purple-400/30 rounded-xl transition-all duration-500 pointer-events-none"></div>

            <div class="relative h-48 bg-gray-100 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <img src="{{ asset('images/items/item2.jpg') }}" alt="Golden Sword" class="h-40 object-contain transition-transform duration-500 group-hover:scale-110">
            </div>
            <div class="p-4">
                <h4 class="font-bold text-gray-900 dark:text-white mb-1 truncate group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">
                    Golden Sword
                </h4>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">ID: 12346</span>
                    <div class="flex space-x-2">
                        <span class="text-xs px-2 py-1 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-full group-hover:bg-blue-200 dark:group-hover:bg-blue-800 transition-colors duration-300">Boy</span>
                        <span class="text-xs px-2 py-1 bg-purple-100 dark:bg-purple-900 text-purple-800 dark:text-purple-200 rounded-full group-hover:bg-purple-200 dark:group-hover:bg-purple-800 transition-colors duration-300">MSP2</span>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>

        <!-- Weitere Items mit ähnlichen Animationen... -->
    </div>
</div>

<style>
    /* Custom Animations */
    @keyframes pulse-slow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }

    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounce-slow 2s ease-in-out infinite;
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    /* Hover transitions */
    .transition-all {
        transition-property: all;
    }

    .duration-300 {
        transition-duration: 300ms;
    }

    .duration-500 {
        transition-duration: 500ms;
    }

    /* Active state */
    .group:active {
        transform: translateY(0) scale(0.98) !important;
    }
</style>
