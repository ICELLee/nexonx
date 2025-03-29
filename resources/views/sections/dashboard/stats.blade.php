<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Stat 1 -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-400 mr-4">
                <i class="fas fa-users text-xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ __('Total Users') }}</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">1,245</p>
            </div>
        </div>
    </div>

    <!-- Stat 2 -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-400 mr-4">
                <i class="fas fa-user-check text-xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ __('Active Today') }}</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">342</p>
            </div>
        </div>
    </div>

    <!-- Stat 3 -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-400 mr-4">
                <i class="fas fa-handshake text-xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ __('Trades Today') }}</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">56</p>
            </div>
        </div>
    </div>

    <!-- Stat 4 -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center">
            <div class="p-3 rounded-lg bg-red-100 dark:bg-red-900 text-red-600 dark:text-red-400 mr-4">
                <i class="fas fa-exclamation-triangle text-xl"></i>
            </div>
            <div>
                <p class="text-sm font-medium text-gray-600 dark:text-gray-300">{{ __('Reports Today') }}</p>
                <p class="text-2xl font-bold text-gray-900 dark:text-white">12</p>
            </div>
        </div>
    </div>
</div>
