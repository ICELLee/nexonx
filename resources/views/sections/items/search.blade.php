<form method="GET" action="{{ route('items') }}">
<div class="mb-12">
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl">
        <!-- Header with animated underline -->
        <h2 class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 pb-2 relative group">
            <span class="relative z-10">
                <i class="fas fa-search mr-2"></i>
                {{ __('Search Items') }}
            </span>
            <span class="absolute bottom-0 left-0 h-0.5 bg-purple-400 w-0 group-hover:w-full transition-all duration-500"></span>
        </h2>

        <!-- Search Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Search by Name/ID -->
            <div class="md:col-span-2 animate-fade-in">
                <label for="item-search" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                    {{ __('Search by Name or ID') }}
                </label>
                <div class="relative group">
                    <input type="text" id="item-search" name="item-search"
                           class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-300 hover:border-purple-400"
                           placeholder="{{ __('Search items...') }}">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400 group-hover:text-purple-500 transition-colors duration-300"></i>
                    </div>
                    <div class="absolute inset-0 rounded-lg border-2 border-transparent group-hover:border-purple-300/30 pointer-events-none transition-all duration-300"></div>
                </div>
            </div>

            <!-- VIP Filter -->
            <div class="animate-fade-in animation-delay-100">
                <label for="vip-filter" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                    {{ __('VIP Only') }}
                </label>
                <div class="relative group">
                    <select id="vip-filter" name="vip-filter"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-300 hover:border-purple-400 appearance-none">
                        <option value="all">{{ __('All Items') }}</option>
                        <option value="yes">{{ __('VIP Only') }}</option>
                        <option value="no">{{ __('Non-VIP') }}</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <i class="fas fa-caret-down text-gray-400 group-hover:text-purple-500 transition-colors duration-300"></i>
                    </div>
                </div>
            </div>

            <!-- Gender Filter -->
            <div class="animate-fade-in animation-delay-200">
                <label for="gender-filter" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                    {{ __('Gender') }}
                </label>
                <div class="relative group">
                    <select id="gender-filter" name="gender-filter"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-300 hover:border-purple-400 appearance-none">
                        <option value="all">{{ __('All') }}</option>
                        <option value="boy">{{ __('Boy') }}</option>
                        <option value="girl">{{ __('Girl') }}</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <i class="fas fa-caret-down text-gray-400 group-hover:text-purple-500 transition-colors duration-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <!-- MSP Version -->
            <div class="animate-fade-in animation-delay-300">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                    {{ __('MSP Version') }}
                </label>
                <div class="flex space-x-4">
                    <label class="inline-flex items-center radio-option">
                        <input type="radio" name="msp-version" value="all" checked
                               class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 transition-colors duration-300">
                        <span class="ml-2 text-gray-700 dark:text-gray-300">{{ __('All') }}</span>
                    </label>
                    <label class="inline-flex items-center radio-option">
                        <input type="radio" name="msp-version" value="1"
                               class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 transition-colors duration-300">
                        <span class="ml-2 text-gray-700 dark:text-gray-300">{{ __('MSP1') }}</span>
                    </label>
                    <label class="inline-flex items-center radio-option">
                        <input type="radio" name="msp-version" value="2"
                               class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 transition-colors duration-300">
                        <span class="ml-2 text-gray-700 dark:text-gray-300">{{ __('MSP2') }}</span>
                    </label>
                </div>
            </div>

            <!-- Sort By -->
            <div class="animate-fade-in animation-delay-400">
                <label for="sort-by" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                    {{ __('Sort By') }}
                </label>
                <div class="relative group">
                    <select id="sort-by" name="sort-by"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-300 hover:border-purple-400 appearance-none">
                        <option value="newest-first">{{ __('Newest First') }}</option>
                        <option value="oldest-first">{{ __('Oldest First') }}</option>
                        <option value="name-asc">{{ __('Name (A-Z)') }}</option>
                        <option value="name-desc">{{ __('Name (Z-A)') }}</option>
                        <option value="id-asc">{{ __('ID (Low to High)') }}</option>
                        <option value="id-desc">{{ __('ID (High to Low)') }}</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <i class="fas fa-caret-down text-gray-400 group-hover:text-purple-500 transition-colors duration-300"></i>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex items-end animate-fade-in animation-delay-500">
                <button type="button" id="reset-filters"
                        class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-all duration-300 mr-3 transform hover:-translate-y-0.5 active:translate-y-0 group">
                    <i class="fas fa-redo mr-1 group-hover:animate-spin"></i>
                    {{ __('Reset') }}
                </button>
                <button type="submit" id="apply-filters"
                        class="flex-1 px-4 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 active:translate-y-0 shadow-lg hover:shadow-purple-500/20 group">
                    <i class="fas fa-filter mr-1 group-hover:animate-bounce"></i>
                    {{ __('Apply Filters') }}
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    /* Animations */
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-3px); }
    }

    .animate-fade-in {
        animation: fade-in 0.5s ease-out forwards;
    }

    .animation-delay-100 {
        animation-delay: 0.1s;
    }

    .animation-delay-200 {
        animation-delay: 0.2s;
    }

    .animation-delay-300 {
        animation-delay: 0.3s;
    }

    .animation-delay-400 {
        animation-delay: 0.4s;
    }

    .animation-delay-500 {
        animation-delay: 0.5s;
    }

    .animate-spin {
        animation: spin 0.5s linear;
    }

    .animate-bounce {
        animation: bounce 0.5s ease;
    }

    /* Radio button hover effect */
    .radio-option:hover span {
        color: #8b5cf6;
    }

    /* Select dropdown arrow transition */
    select:focus + div i {
        transform: rotate(180deg);
    }

    /* Smooth transitions */
    .transition-all {
        transition-property: all;
    }

    .duration-300 {
        transition-duration: 300ms;
    }
</style>
</form>
