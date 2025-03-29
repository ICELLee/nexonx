<div class="flex justify-between items-center">
    <div class="text-sm text-gray-500 dark:text-gray-400">
        {{ __('Showing 1-40 of 1,245 items') }}
    </div>

    <nav class="flex items-center space-x-1">
        <!-- Previous Button -->
        <button type="button"
                class="w-8 h-8 flex items-center justify-center rounded-full text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-200 disabled:opacity-40"
                disabled>
            <i class="fas fa-chevron-left text-sm"></i>
        </button>

        <!-- Page Buttons -->
        <button type="button"
                class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-600 text-white text-sm font-medium">
            1
        </button>

        <button type="button"
                class="w-8 h-8 flex items-center justify-center rounded-full text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-200">
            2
        </button>

        <button type="button"
                class="w-8 h-8 flex items-center justify-center rounded-full text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-200">
            3
        </button>

        <!-- Ellipsis -->
        <span class="w-8 h-8 flex items-center justify-center text-gray-400">
            &hellip;
        </span>

        <!-- Last Page -->
        <button type="button"
                class="w-8 h-8 flex items-center justify-center rounded-full text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-200">
            31
        </button>

        <!-- Next Button -->
        <button type="button"
                class="w-8 h-8 flex items-center justify-center rounded-full text-gray-500 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-200">
            <i class="fas fa-chevron-right text-sm"></i>
        </button>
    </nav>
</div>

<style>
    /* Subtile Focus Animation */
    button:focus {
        outline: none;
        animation: gentle-pulse 0.6s ease;
    }

    @keyframes gentle-pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
</style>
