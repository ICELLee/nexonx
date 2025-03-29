<div class="bg-indigo-600 dark:bg-indigo-800 rounded-xl shadow-lg p-6 text-center mb-12 transition-colors duration-300">
    <h2 class="text-2xl font-bold text-white mb-4">{{ __('Connect With Other Players') }}</h2>
    <p class="text-indigo-100 mb-6 max-w-2xl mx-auto">
        {{ __('Sign in to see who\'s looking for friends and get matched based on your interests and play style.') }}
    </p>
    <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4">
        <a href="#" class="px-6 py-3 bg-white hover:bg-gray-100 text-indigo-600 font-medium rounded-lg transition-colors duration-300 flex items-center justify-center">
            <i class="fab fa-discord mr-2"></i> {{ __('Login with Discord') }}
        </a>
        <a href="#" class="px-6 py-3 border-2 border-white text-white hover:bg-white/10 font-medium rounded-lg transition-colors duration-300 flex items-center justify-center">
            <i class="fas fa-envelope mr-2"></i> {{ __('Login with Email') }}
        </a>
    </div>
    <p class="text-indigo-100 mt-4">
        {{ __('Don\'t have an account?') }} <a href="#" class="text-white hover:underline font-medium">{{ __('Register here') }}</a>
    </p>
</div>
