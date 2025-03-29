<div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl">
    <!-- Header with gradient and icon -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-800 dark:to-purple-800 px-6 py-4">
        <h2 class="text-xl font-bold text-white flex items-center">
            <i class="fas fa-exchange-alt mr-2 animate-pulse-slow"></i>
            {{ __('Create New Trade Request') }}
        </h2>
    </div>

    <div class="p-6">
        <!-- Warning Alert -->
        <div class="bg-yellow-100 dark:bg-yellow-900/80 text-yellow-800 dark:text-yellow-200 p-4 rounded-lg mb-6 border border-yellow-200 dark:border-yellow-800 transition-all duration-300 hover:shadow-md">
            <div class="flex items-start">
                <i class="fas fa-exclamation-circle mt-1 mr-2 text-yellow-500 dark:text-yellow-300 animate-bounce-slow"></i>
                <div>
                    <p class="text-sm">{{ __('You need to be logged in to use the middleman service.') }}</p>
                    <div class="flex space-x-3 mt-3">
                        <a href="#" class="text-sm font-medium px-4 py-2 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 active:translate-y-0 shadow-md hover:shadow-indigo-500/30 flex items-center">
                            <i class="fas fa-sign-in-alt mr-2 group-hover:animate-bounce"></i>
                            {{ __('Login') }}
                        </a>
                        <a href="#" class="text-sm font-medium px-4 py-2 border border-indigo-600 text-indigo-600 dark:text-indigo-400 hover:bg-indigo-50 dark:hover:bg-gray-700/50 rounded-lg transition-all duration-300 transform hover:-translate-y-0.5 active:translate-y-0 flex items-center">
                            <i class="fas fa-user-plus mr-2 group-hover:animate-pulse"></i>
                            {{ __('Register') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <form>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Your Details -->
                <div class="md:col-span-1 animate-fade-in">
                    <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-4 pb-1 border-b border-gray-200 dark:border-gray-700 flex items-center">
                        <i class="fas fa-user-circle mr-2"></i>
                        {{ __('Your Details') }}
                    </h3>

                    <div class="space-y-4">
                        <div class="form-group">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                                {{ __('Username') }}
                            </label>
                            <div class="relative">
                                <input type="text" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed transition-all duration-300" readonly>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                                {{ __('Level') }}
                            </label>
                            <input type="number" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed transition-all duration-300" readonly>
                        </div>
                    </div>
                </div>

                <!-- Partner Details -->
                <div class="md:col-span-1 animate-fade-in animation-delay-100">
                    <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-4 pb-1 border-b border-gray-200 dark:border-gray-700 flex items-center">
                        <i class="fas fa-users mr-2"></i>
                        {{ __('Trading Partner') }}
                    </h3>

                    <div class="space-y-4">
                        <div class="form-group">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                                {{ __('Username') }}
                            </label>
                            <div class="relative group">
                                <input type="text" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-300 hover:border-purple-400" placeholder="{{ __('Enter partner\'s username') }}" disabled>
                                <div class="absolute inset-0 rounded-lg border-2 border-transparent group-hover:border-purple-300/30 pointer-events-none transition-all duration-300"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 transition-colors duration-300 group-hover:text-purple-600 dark:group-hover:text-purple-400">
                                {{ __('Email') }}
                            </label>
                            <input type="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:text-white transition-all duration-300 hover:border-purple-400" placeholder="{{ __('Enter partner\'s email') }}" disabled>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded transition-colors duration-300" disabled>
                            <label class="ml-2 block text-sm text-gray-700 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-300">
                                {{ __('My partner is already registered') }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Items to Trade -->
            <div class="mt-8 animate-fade-in animation-delay-200">
                <h3 class="text-lg font-semibold text-indigo-600 dark:text-indigo-400 mb-4 pb-1 border-b border-gray-200 dark:border-gray-700 flex items-center">
                    <i class="fas fa-box-open mr-2"></i>
                    {{ __('Items to Trade') }}
                </h3>

                <!-- Your Items -->
                <div class="bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4 mb-4 transition-all duration-300 hover:shadow-md">
                    <div class="flex justify-between items-center mb-3">
                        <h4 class="font-medium text-gray-700 dark:text-gray-300 flex items-center">
                            <i class="fas fa-user mr-2 text-indigo-500"></i>
                            {{ __('Your Items') }}
                        </h4>
                        <button type="button" class="text-sm text-indigo-600 dark:text-indigo-400 hover:text-purple-600 dark:hover:text-purple-300 font-medium flex items-center transition-colors duration-300 group" disabled>
                            <i class="fas fa-plus mr-1 group-hover:animate-bounce"></i>
                            {{ __('Add Item') }}
                        </button>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4 border border-gray-200 dark:border-gray-600 min-h-24 flex items-center justify-center transition-all duration-300 hover:border-purple-400/50">
                        <p class="text-gray-500 dark:text-gray-400 text-sm text-center">
                            <i class="fas fa-box text-2xl mb-2 block opacity-50"></i>
                            {{ __('No items added yet') }}
                        </p>
                    </div>
                </div>

                <!-- Items You Want -->
                <div class="bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4 transition-all duration-300 hover:shadow-md">
                    <div class="flex justify-between items-center mb-3">
                        <h4 class="font-medium text-gray-700 dark:text-gray-300 flex items-center">
                            <i class="fas fa-gift mr-2 text-purple-500"></i>
                            {{ __('Items You Want') }}
                        </h4>
                        <button type="button" class="text-sm text-indigo-600 dark:text-indigo-400 hover:text-purple-600 dark:hover:text-purple-300 font-medium flex items-center transition-colors duration-300 group" disabled>
                            <i class="fas fa-plus mr-1 group-hover:animate-bounce"></i>
                            {{ __('Add Item') }}
                        </button>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg p-4 border border-gray-200 dark:border-gray-600 min-h-24 flex items-center justify-center transition-all duration-300 hover:border-purple-400/50">
                        <p class="text-gray-500 dark:text-gray-400 text-sm text-center">
                            <i class="fas fa-search text-2xl mb-2 block opacity-50"></i>
                            {{ __('No items added yet') }}
                        </p>
                    </div>
                </div>

                <div class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                    <p class="flex items-center">
                        <i class="fas fa-info-circle mr-2 text-indigo-500"></i>
                        {{ __('To add items, search for them in our') }}
                        <a href="{{ route('items') }}" class="text-indigo-600 dark:text-indigo-400 hover:text-purple-600 dark:hover:text-purple-300 underline ml-1 transition-colors duration-300">
                            {{ __('Item Database') }}
                        </a>
                        {{ __('and click "Add to Trade"') }}
                    </p>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-8 animate-fade-in animation-delay-300">
                <button type="submit" disabled class="w-full px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-medium rounded-lg transition-all duration-300 flex items-center justify-center opacity-60 cursor-not-allowed relative overflow-hidden group">
                    <span class="relative z-10 flex items-center">
                        <i class="fas fa-handshake mr-2 group-hover:animate-wiggle"></i>
                        {{ __('Submit Trade Request') }}
                    </span>
                    <span class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    /* Animations */
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes pulse-slow {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.8; }
    }

    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    @keyframes wiggle {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(-5deg); }
        75% { transform: rotate(5deg); }
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

    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounce-slow 2s ease-in-out infinite;
    }

    .animate-wiggle {
        animation: wiggle 0.5s ease;
    }

    /* Form group hover effects */
    .form-group:hover label {
        color: #8b5cf6;
    }

    /* Transition durations */
    .transition-all {
        transition-property: all;
    }

    .duration-300 {
        transition-duration: 300ms;
    }
</style>
