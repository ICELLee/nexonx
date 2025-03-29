<div class="mb-16">
    <!-- Header Section -->
    <div class="text-center animate-fade-in">
        <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 hover:text-purple-600 dark:hover:text-purple-400 transition-colors duration-500 group">
            <span class="relative inline-block">
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-purple-400 group-hover:w-full transition-all duration-500 origin-left"></span>
                {{ __('How It Works') }}
            </span>
        </h2>
        <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto mb-12 transition-all duration-300 hover:text-gray-800 dark:hover:text-gray-200">
            {{ __('Our middleman service ensures safe and secure trades between players. Here\'s how it works:') }}
        </p>
    </div>

    <!-- Steps Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Step 1 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group relative animate-fade-in">
            <!-- Floating background element -->
            <div class="absolute -top-4 -right-4 w-16 h-16 bg-purple-400/10 rounded-full filter blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <!-- Step Number -->
            <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-indigo-100 to-purple-100 dark:from-indigo-900 dark:to-purple-900 rounded-full mb-6 mx-auto transition-all duration-500 group-hover:scale-110 group-hover:from-indigo-200 group-hover:to-purple-200 dark:group-hover:from-indigo-800 dark:group-hover:to-purple-800">
                <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-500">1</span>
            </div>

            <h3 class="text-xl font-bold text-center mb-3 text-gray-800 dark:text-gray-200 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-500 flex items-center justify-center">
                <i class="fas fa-file-alt mr-2 text-indigo-500 dark:text-indigo-400 group-hover:text-purple-500 dark:group-hover:text-purple-300 transition-colors duration-500"></i>
                {{ __('Create Trade Request') }}
            </h3>
            <p class="text-gray-600 dark:text-gray-300 text-center transition-colors duration-300 group-hover:text-gray-700 dark:group-hover:text-gray-200">
                {{ __('Fill out the trade form with the items you want to trade and your trading partner\'s details.') }}
            </p>

            <!-- Hover effect bar -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>

        <!-- Step 2 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group relative animate-fade-in animation-delay-100">
            <div class="absolute -top-4 -right-4 w-16 h-16 bg-purple-400/10 rounded-full filter blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-indigo-100 to-purple-100 dark:from-indigo-900 dark:to-purple-900 rounded-full mb-6 mx-auto transition-all duration-500 group-hover:scale-110 group-hover:from-indigo-200 group-hover:to-purple-200 dark:group-hover:from-indigo-800 dark:group-hover:to-purple-800">
                <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-500">2</span>
            </div>

            <h3 class="text-xl font-bold text-center mb-3 text-gray-800 dark:text-gray-200 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-500 flex items-center justify-center">
                <i class="fas fa-envelope mr-2 text-indigo-500 dark:text-indigo-400 group-hover:text-purple-500 dark:group-hover:text-purple-300 transition-colors duration-500"></i>
                {{ __('Partner Confirmation') }}
            </h3>
            <p class="text-gray-600 dark:text-gray-300 text-center transition-colors duration-300 group-hover:text-gray-700 dark:group-hover:text-gray-200">
                {{ __('Your trading partner will receive an email to confirm the trade details.') }}
            </p>

            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>

        <!-- Step 3 -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 group relative animate-fade-in animation-delay-200">
            <div class="absolute -top-4 -right-4 w-16 h-16 bg-purple-400/10 rounded-full filter blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-indigo-100 to-purple-100 dark:from-indigo-900 dark:to-purple-900 rounded-full mb-6 mx-auto transition-all duration-500 group-hover:scale-110 group-hover:from-indigo-200 group-hover:to-purple-200 dark:group-hover:from-indigo-800 dark:group-hover:to-purple-800">
                <span class="text-2xl font-bold text-indigo-600 dark:text-indigo-400 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-500">3</span>
            </div>

            <h3 class="text-xl font-bold text-center mb-3 text-gray-800 dark:text-gray-200 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-500 flex items-center justify-center">
                <i class="fas fa-handshake mr-2 text-indigo-500 dark:text-indigo-400 group-hover:text-purple-500 dark:group-hover:text-purple-300 transition-colors duration-500"></i>
                {{ __('Complete Trade') }}
            </h3>
            <p class="text-gray-600 dark:text-gray-300 text-center transition-colors duration-300 group-hover:text-gray-700 dark:group-hover:text-gray-200">
                {{ __('Once confirmed, both parties will receive instructions to complete the trade safely.') }}
            </p>

            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
    </div>
</div>

<style>
    /* Animations */
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }

    .animate-fade-in {
        animation: fade-in 0.6s ease-out forwards;
    }

    .animation-delay-100 {
        animation-delay: 0.1s;
    }

    .animation-delay-200 {
        animation-delay: 0.2s;
    }

    /* Continuous floating animation for icons */
    .fas {
        animation: float 3s ease-in-out infinite;
    }

    /* Different animation delays for each icon */
    .fa-file-alt {
        animation-delay: 0.3s;
    }

    .fa-envelope {
        animation-delay: 0.6s;
    }

    .fa-handshake {
        animation-delay: 0.9s;
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
