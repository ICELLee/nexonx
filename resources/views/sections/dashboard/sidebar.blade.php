<div class="lg:col-span-1">
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-colors duration-300">
        <!-- User Profile -->
        <div class="p-6 text-center border-b border-gray-200 dark:border-gray-700">
            <div class="w-24 h-24 mx-auto mb-4 rounded-full overflow-hidden border-4 border-indigo-100 dark:border-indigo-900">
                <img src="{{ asset('images/admin.jpg') }}" alt="Admin Avatar" class="w-full h-full object-cover">
            </div>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Admin User</h3>
            <p class="text-sm text-indigo-600 dark:text-indigo-400">Super Administrator</p>
            <div class="mt-3">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                    <i class="fas fa-circle mr-1 text-xs"></i> Online
                </span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg bg-indigo-600 text-white transition-colors duration-300">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-users mr-3"></i>
                        <span>{{ __('Users') }}</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-code mr-3"></i>
                        <span>{{ __('Cheats') }}</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-cubes mr-3"></i>
                        <span>{{ __('Items') }}</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-handshake mr-3"></i>
                        <span>{{ __('Trades') }}</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-flag mr-3"></i>
                        <span>{{ __('Reports') }}</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-300">
                        <i class="fas fa-cog mr-3"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
