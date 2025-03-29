<div class="py-16 text-center">
    <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-6 animate__animated animate__fadeIn animate__infinite animate__slower animate__pulse">
        {{ __('Welcome to NexonX') }}
    </h2>
    <div class="max-w-4xl mx-auto">
        <p class="text-lg text-gray-600 dark:text-gray-300 animate__animated animate__fadeIn animate__delay-1s">
            {{ __('We are your premier destination for high-quality gaming tools, cheats, and services. Our team of experts works tirelessly to provide you with the best possible experience.') }}
        </p>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Secure Card -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 animate__animated animate__fadeInUp group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-indigo-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                <div class="text-indigo-600 dark:text-indigo-400 text-4xl mb-4 transition-all duration-300 group-hover:text-purple-500 group-hover:scale-110 group-active:scale-95">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">{{ __('Secure') }}</h3>
                <p class="text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">{{ __('All our tools are undetectable and safe to use.') }}</p>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 animate__animated group-hover:animate__flash animate__slower"></div>
            </div>

            <!-- Fast Card -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 animate__animated animate__fadeInUp animate__delay-1s group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-indigo-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                <div class="text-indigo-600 dark:text-indigo-400 text-4xl mb-4 transition-all duration-300 group-hover:text-purple-500 group-hover:scale-110 group-active:scale-95">
                    <i class="fas fa-bolt animate__animated animate__infinite animate__slower group-hover:animate__pulse"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">{{ __('Fast') }}</h3>
                <p class="text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">{{ __('Instant delivery and quick updates.') }}</p>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 animate__animated group-hover:animate__flash animate__slower"></div>
            </div>

            <!-- Support Card -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-500 animate__animated animate__fadeInUp animate__delay-2s group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-indigo-600 opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                <div class="text-indigo-600 dark:text-indigo-400 text-4xl mb-4 transition-all duration-300 group-hover:text-purple-500 group-hover:scale-110 group-active:scale-95">
                    <i class="fas fa-headset animate__animated animate__infinite animate__slower group-hover:animate__swing"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">{{ __('Support') }}</h3>
                <p class="text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">{{ __('24/7 customer support for all your needs.') }}</p>
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500 animate__animated group-hover:animate__flash animate__slower"></div>
            </div>
        </div>

        <!-- Animated floating elements in the background -->
        <div class="fixed top-0 left-0 w-full h-full pointer-events-none -z-10 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 w-8 h-8 rounded-full bg-purple-400 opacity-20 animate-float1"></div>
            <div class="absolute top-1/3 right-1/4 w-12 h-12 rounded-full bg-indigo-500 opacity-15 animate-float2"></div>
            <div class="absolute bottom-1/4 right-1/3 w-10 h-10 rounded-full bg-purple-500 opacity-20 animate-float3"></div>
            <div class="absolute bottom-1/3 left-1/4 w-6 h-6 rounded-full bg-indigo-400 opacity-15 animate-float4"></div>
        </div>
    </div>
</div>

<style>
    @keyframes float1 {
        0%, 100% { transform: translateY(0) translateX(0) rotate(0deg); }
        50% { transform: translateY(-50px) translateX(20px) rotate(10deg); }
    }
    @keyframes float2 {
        0%, 100% { transform: translateY(0) translateX(0) rotate(0deg); }
        50% { transform: translateY(30px) translateX(-20px) rotate(-5deg); }
    }
    @keyframes float3 {
        0%, 100% { transform: translateY(0) translateX(0) rotate(0deg); }
        50% { transform: translateY(-30px) translateX(15px) rotate(5deg); }
    }
    @keyframes float4 {
        0%, 100% { transform: translateY(0) translateX(0) rotate(0deg); }
        50% { transform: translateY(40px) translateX(-15px) rotate(-10deg); }
    }

    .animate-float1 {
        animation: float1 8s ease-in-out infinite;
    }
    .animate-float2 {
        animation: float2 10s ease-in-out infinite;
    }
    .animate-float3 {
        animation: float3 12s ease-in-out infinite;
    }
    .animate-float4 {
        animation: float4 9s ease-in-out infinite;
    }

    /* Active state scaling */
    .group:active {
        transform: scale(0.98);
    }

    /* Hover effect for the main title */
    h2:hover {
        animation: animate__rubberBand !important;
    }
</style>
