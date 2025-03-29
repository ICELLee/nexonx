<div id="contact" class="py-16 bg-gray-50 dark:bg-gray-800 transition-colors duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 transform hover:scale-105 transition-transform duration-300 inline-block">
                <i class="fas fa-envelope mr-3 animate-wiggle-slow"></i>
                {{ __('Contact Us') }}
            </h2>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto hover:text-gray-800 dark:hover:text-gray-100 transition-colors duration-300">
                {{ __('Have questions or need support? Send us a message and we\'ll get back to you as soon as possible.') }}
            </p>
        </div>

        <div class="bg-white dark:bg-gray-700 shadow-xl rounded-xl overflow-hidden transition-all duration-500 hover:shadow-2xl">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Form Section with Enhanced Interactions -->
                <div class="p-8 md:p-12">
                    <form class="space-y-6">
                        <!-- Name Field -->
                        <div class="group">
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-300">
                                <i class="fas fa-user mr-2"></i>{{ __('Your Name') }}
                            </label>
                            <input type="text" id="name" name="name"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-white transition-all duration-300 hover:border-indigo-400 hover:shadow-sm group-hover:shadow-indigo-100 dark:group-hover:shadow-indigo-900/50"
                                   placeholder="{{ __('John Doe') }}">
                        </div>

                        <!-- Email Field -->
                        <div class="group">
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-300">
                                <i class="fas fa-at mr-2"></i>{{ __('Email Address') }}
                            </label>
                            <input type="email" id="email" name="email"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-white transition-all duration-300 hover:border-indigo-400 hover:shadow-sm group-hover:shadow-indigo-100 dark:group-hover:shadow-indigo-900/50"
                                   placeholder="{{ __('your@email.com') }}">
                        </div>

                        <!-- Subject Field -->
                        <div class="group">
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-300">
                                <i class="fas fa-tag mr-2"></i>{{ __('Subject') }}
                            </label>
                            <div class="relative">
                                <select id="subject" name="subject"
                                        class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-white transition-all duration-300 hover:border-indigo-400 appearance-none hover:shadow-sm group-hover:shadow-indigo-100 dark:group-hover:shadow-indigo-900/50">
                                    <option value="">{{ __('Select a subject') }}</option>
                                    <option value="support">{{ __('Support') }}</option>
                                    <option value="sales">{{ __('Sales Inquiry') }}</option>
                                    <option value="partnership">{{ __('Partnership') }}</option>
                                    <option value="other">{{ __('Other') }}</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <i class="fas fa-chevron-down text-gray-400 group-hover:text-indigo-500 transition-colors duration-300"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div class="group">
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors duration-300">
                                <i class="fas fa-comment-dots mr-2"></i>{{ __('Message') }}
                            </label>
                            <textarea id="message" name="message" rows="4"
                                      class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-800 dark:text-white transition-all duration-300 hover:border-indigo-400 hover:shadow-sm group-hover:shadow-indigo-100 dark:group-hover:shadow-indigo-900/50"
                                      placeholder="{{ __('Your message...') }}"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="group">
                            <button type="submit"
                                    class="w-full px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-medium rounded-lg transition-all duration-500 flex items-center justify-center transform hover:-translate-y-1 hover:shadow-lg active:scale-95">
                                <i class="fas fa-paper-plane mr-2 animate-bounce-slow group-hover:animate-none"></i>
                                <span class="group-hover:tracking-wider transition-all duration-300">{{ __('Send Message') }}</span>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Contact Info Section with Animations -->
                <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 dark:from-indigo-800 dark:to-indigo-900 p-8 md:p-12 text-white transition-all duration-500 hover:from-indigo-700 hover:to-indigo-900">
                    <h3 class="text-xl font-bold mb-6 flex items-center transform hover:translate-x-2 transition-transform duration-300">
                        <i class="fas fa-info-circle mr-3 animate-pulse-slow"></i>
                        {{ __('Contact Information') }}
                    </h3>

                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex items-start group">
                            <div class="flex-shrink-0 mt-1 bg-indigo-700 dark:bg-indigo-900 p-2 rounded-full group-hover:animate-pulse">
                                <i class="fas fa-envelope text-indigo-200 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-indigo-100 group-hover:text-white transition-colors duration-300">{{ __('Email') }}</h4>
                                <p class="mt-1 group-hover:translate-x-1 transition-transform duration-300">support@nexonx.de</p>
                            </div>
                        </div>

                        <!-- Discord -->
                        <div class="flex items-start group">
                            <div class="flex-shrink-0 mt-1 bg-indigo-700 dark:bg-indigo-900 p-2 rounded-full group-hover:animate-pulse">
                                <i class="fab fa-discord text-indigo-200 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-indigo-100 group-hover:text-white transition-colors duration-300">{{ __('Discord') }}</h4>
                                <p class="mt-1 group-hover:translate-x-1 transition-transform duration-300">discord.gg/nexonx</p>
                            </div>
                        </div>

                        <!-- Support Hours -->
                        <div class="flex items-start group">
                            <div class="flex-shrink-0 mt-1 bg-indigo-700 dark:bg-indigo-900 p-2 rounded-full group-hover:animate-pulse">
                                <i class="fas fa-clock text-indigo-200 group-hover:text-white transition-colors duration-300"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-sm font-medium text-indigo-100 group-hover:text-white transition-colors duration-300">{{ __('Support Hours') }}</h4>
                                <p class="mt-1 group-hover:translate-x-1 transition-transform duration-300">24/7</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-12 animate-fade-in-delay">
                        <h4 class="text-sm font-medium text-indigo-100 mb-4 flex items-center">
                            <i class="fas fa-share-alt mr-2 animate-spin-slow"></i>
                            {{ __('Follow Us') }}
                        </h4>
                        <div class="flex space-x-4">
                            <a href="#" class="social-icon w-10 h-10 rounded-full bg-indigo-700 dark:bg-indigo-900 flex items-center justify-center text-white hover:bg-twitter hover:-translate-y-1 transition-all duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 rounded-full bg-indigo-700 dark:bg-indigo-900 flex items-center justify-center text-white hover:bg-instagram hover:-translate-y-1 transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 rounded-full bg-indigo-700 dark:bg-indigo-900 flex items-center justify-center text-white hover:bg-youtube hover:-translate-y-1 transition-all duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        /* Custom Animations */
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fade-in-delay {
            0% { opacity: 0; transform: translateY(20px); }
            50% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes wiggle-slow {
            0%, 100% { transform: rotate(-5deg); }
            50% { transform: rotate(5deg); }
        }

        @keyframes pulse-slow {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        /* Apply Animations */
        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }

        .animate-fade-in-delay {
            animation: fade-in-delay 1.5s ease-out;
        }

        .animate-wiggle-slow {
            animation: wiggle-slow 3s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 2s ease-in-out infinite;
        }

        .animate-bounce-slow {
            animation: bounce-slow 2s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin 4s linear infinite;
        }

        /* Social Media Brand Colors */
        .hover\:bg-twitter:hover {
            background-color: #1DA1F2 !important;
        }

        .hover\:bg-instagram:hover {
            background: linear-gradient(45deg, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737, #FCAF45, #FFDC80);
        }

        .hover\:bg-youtube:hover {
            background-color: #FF0000 !important;
        }

        /* Custom Select Arrow */
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-print-color-adjust: exact;
            print-color-adjust: exact;
        }

        .dark select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
        }
    </style>
@endpush
