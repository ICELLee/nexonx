<div class="lg:col-span-3">
    <!-- Quick Actions -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-8 transition-colors duration-300">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white mb-6">{{ __('Quick Actions') }}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="#" class="bg-indigo-50 dark:bg-gray-700 rounded-lg p-4 text-center hover:bg-indigo-100 dark:hover:bg-gray-600 transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                    <i class="fas fa-user-plus text-xl"></i>
                </div>
                <span class="font-medium text-gray-800 dark:text-gray-200">{{ __('Add User') }}</span>
            </a>
            <a href="#" class="bg-indigo-50 dark:bg-gray-700 rounded-lg p-4 text-center hover:bg-indigo-100 dark:hover:bg-gray-600 transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                    <i class="fas fa-cube text-xl"></i>
                </div>
                <span class="font-medium text-gray-800 dark:text-gray-200">{{ __('Add Item') }}</span>
            </a>
            <a href="#" class="bg-indigo-50 dark:bg-gray-700 rounded-lg p-4 text-center hover:bg-indigo-100 dark:hover:bg-gray-600 transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                    <i class="fas fa-code text-xl"></i>
                </div>
                <span class="font-medium text-gray-800 dark:text-gray-200">{{ __('Add Cheat') }}</span>
            </a>
            <a href="#" class="bg-indigo-50 dark:bg-gray-700 rounded-lg p-4 text-center hover:bg-indigo-100 dark:hover:bg-gray-600 transition-colors duration-300">
                <div class="w-12 h-12 mx-auto mb-3 bg-indigo-100 dark:bg-indigo-900 rounded-full flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                    <i class="fas fa-cog text-xl"></i>
                </div>
                <span class="font-medium text-gray-800 dark:text-gray-200">{{ __('Settings') }}</span>
            </a>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-8 transition-colors duration-300">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ __('Recent Activity') }}</h2>
            <a href="#" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">{{ __('View All') }}</a>
        </div>

        <div class="space-y-4">
            <!-- Activity 1 -->
            <div class="flex items-start pb-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex-shrink-0 mr-4">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                        <i class="fas fa-user-plus"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">
                        New user registered: SarahGamer
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        10 minutes ago
                    </p>
                </div>
                <div class="inline-flex items-center text-xs text-green-600 dark:text-green-400">
                    <i class="fas fa-circle mr-1 text-xs"></i> Active
                </div>
            </div>

            <!-- Activity 2 -->
            <div class="flex items-start pb-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex-shrink-0 mr-4">
                    <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-blue-600 dark:text-blue-400">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">
                        Trade completed between MikeTheGamer and EmmaStar
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        25 minutes ago
                    </p>
                </div>
                <div class="inline-flex items-center text-xs text-green-600 dark:text-green-400">
                    <i class="fas fa-check-circle mr-1 text-xs"></i> Success
                </div>
            </div>

            <!-- Activity 3 -->
            <div class="flex items-start pb-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex-shrink-0 mr-4">
                    <div class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900 flex items-center justify-center text-red-600 dark:text-red-400">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">
                        Scam reported by KingOfGames against NinjaScammer
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        1 hour ago
                    </p>
                </div>
                <div class="inline-flex items-center text-xs text-yellow-600 dark:text-yellow-400">
                    <i class="fas fa-exclamation-circle mr-1 text-xs"></i> Pending
                </div>
            </div>

            <!-- Activity 4 -->
            <div class="flex items-start pb-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex-shrink-0 mr-4">
                    <div class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900 flex items-center justify-center text-purple-600 dark:text-purple-400">
                        <i class="fas fa-code"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">
                        Cheat "ESP & Aimbot" updated to version 2.3.1
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        2 hours ago
                    </p>
                </div>
                <div class="inline-flex items-center text-xs text-blue-600 dark:text-blue-400">
                    <i class="fas fa-sync-alt mr-1 text-xs"></i> Updated
                </div>
            </div>

            <!-- Activity 5 -->
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-4">
                    <div class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900 flex items-center justify-center text-green-600 dark:text-green-400">
                        <i class="fas fa-cube"></i>
                    </div>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">
                        New item "Diamond Crown" added to MSP2
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        4 hours ago
                    </p>
                </div>
                <div class="inline-flex items-center text-xs text-green-600 dark:text-green-400">
                    <i class="fas fa-check-circle mr-1 text-xs"></i> Added
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Users -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-colors duration-300">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ __('Recent Users') }}</h2>
            <a href="#" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">{{ __('View All') }}</a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Username') }}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Email') }}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Level') }}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Status') }}</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">{{ __('Actions') }}</th>
                </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                <!-- User 1 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('images/dashboard/user1.jpg') }}" alt="SarahGamer">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">SarahGamer</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">VIP Member</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">sarah@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">72</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                Active
                            </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300 mr-3">{{ __('Edit') }}</a>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">{{ __('Ban') }}</a>
                    </td>
                </tr>

                <!-- User 2 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('images/dashboard/user2.jpg') }}" alt="MikeTheGamer">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">MikeTheGamer</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Regular</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">mike@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">45</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                Active
                            </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300 mr-3">{{ __('Edit') }}</a>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">{{ __('Ban') }}</a>
                    </td>
                </tr>

                <!-- User 3 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('images/dashboard/user3.jpg') }}" alt="EmmaStar">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">EmmaStar</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">VIP Member</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">emma@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">89</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                Active
                            </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300 mr-3">{{ __('Edit') }}</a>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">{{ __('Ban') }}</a>
                    </td>
                </tr>

                <!-- User 4 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('images/dashboard/user4.jpg') }}" alt="AlexPro">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">AlexPro</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Guild Leader</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">alex@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">56</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200">
                                Inactive
                            </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300 mr-3">{{ __('Edit') }}</a>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">{{ __('Ban') }}</a>
                    </td>
                </tr>

                <!-- User 5 -->
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full" src="{{ asset('images/dashboard/user5.jpg') }}" alt="LunaMoon">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900 dark:text-white">LunaMoon</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Newbie</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">luna@example.com</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">34</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200">
                                Active
                            </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-300 mr-3">{{ __('Edit') }}</a>
                        <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-300">{{ __('Ban') }}</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
