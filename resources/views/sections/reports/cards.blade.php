<div class="text-center mb-12">
    <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400 mb-4">{{ __('Report Center') }}</h2>
    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
        {{ __('Help us maintain a safe trading environment by reporting scammers or successful trades.') }}
    </p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Scammer Report Card -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2 transition-transform duration-300">
        <div class="bg-red-600 dark:bg-red-800 px-6 py-4">
            <h3 class="text-xl font-bold text-white flex items-center">
                <i class="fas fa-exclamation-triangle mr-2"></i> {{ __('Report a Scammer') }}
            </h3>
        </div>
        <div class="p-6">
            <form>
                <div class="space-y-4">
                    <div>
                        <label for="scammer-username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Scammer Username') }}</label>
                        <input type="text" id="scammer-username" name="scammer-username" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white transition-colors duration-300" required>
                    </div>

                    <div>
                        <label for="scammer-level" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Scammer Level') }}</label>
                        <input type="number" id="scammer-level" name="scammer-level" min="1" max="100" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white transition-colors duration-300" required>
                    </div>

                    <div>
                        <label for="scam-date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Date of Scam') }}</label>
                        <input type="date" id="scam-date" name="scam-date" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white transition-colors duration-300" required>
                    </div>

                    <div>
                        <label for="item-id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Item ID') }}</label>
                        <div class="flex space-x-2">
                            <input type="text" id="item-id" name="item-id" class="flex-1 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white transition-colors duration-300" placeholder="{{ __('ID or search by name') }}">
                            <button type="button" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg transition-colors duration-300">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div>
                        <label for="item-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Item Name') }}</label>
                        <input type="text" id="item-name" name="item-name" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white transition-colors duration-300" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Second Account Involved?') }}</label>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="second-account" value="yes" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 transition-colors duration-300">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">{{ __('Yes') }}</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="second-account" value="no" checked class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700 transition-colors duration-300">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">{{ __('No') }}</span>
                            </label>
                        </div>
                    </div>

                    <div id="second-account-field" class="hidden">
                        <label for="second-username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Second Account Username') }}</label>
                        <input type="text" id="second-username" name="second-username" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white transition-colors duration-300">
                    </div>

                    <div>
                        <label for="scam-reason" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Reason') }}</label>
                        <textarea id="scam-reason" name="scam-reason" rows="3" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white transition-colors duration-300" required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="w-full px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-medium rounded-lg transition-colors duration-300 flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle mr-2"></i> {{ __('Report Scammer') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Trade Card -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 transform hover:-translate-y-2 transition-transform duration-300">
        <div class="bg-green-600 dark:bg-green-800 px-6 py-4">
            <h3 class="text-xl font-bold text-white flex items-center">
                <i class="fas fa-check-circle mr-2"></i> {{ __('Report Successful Trade') }}
            </h3>
        </div>
        <div class="p-6">
            <div class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 p-4 rounded-lg mb-6">
                <div class="flex items-start">
                    <i class="fas fa-exclamation-circle mt-1 mr-2"></i>
                    <div>
                        <p class="text-sm">{{ __('You need to be logged in to report a successful trade.') }}</p>
                        <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:underline text-sm font-medium mt-1 inline-block">{{ __('Login or Register') }}</a>
                    </div>
                </div>
            </div>

            <form>
                <div class="space-y-4">
                    <div>
                        <label for="your-username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Your Username') }}</label>
                        <input type="text" id="your-username" name="your-username" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed" readonly>
                    </div>

                    <div>
                        <label for="your-level" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Your Level') }}</label>
                        <input type="number" id="your-level" name="your-level" min="1" max="100" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed" readonly>
                    </div>

                    <div>
                        <label for="trade-date" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Date of Trade') }}</label>
                        <input type="date" id="trade-date" name="trade-date" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed" readonly>
                    </div>

                    <div>
                        <label for="trade-item-id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Item ID') }}</label>
                        <div class="flex space-x-2">
                            <input type="text" id="trade-item-id" name="trade-item-id" class="flex-1 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed" placeholder="{{ __('ID or search by name') }}" readonly>
                            <button type="button" class="px-4 py-2 bg-gray-300 dark:bg-gray-600 text-gray-700 dark:text-gray-300 rounded-lg cursor-not-allowed">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div>
                        <label for="trade-item-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Item Name') }}</label>
                        <input type="text" id="trade-item-name" name="trade-item-name" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed" readonly>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Second Account Involved?') }}</label>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="trade-second-account" value="yes" disabled class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">{{ __('Yes') }}</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="trade-second-account" value="no" checked disabled class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                                <span class="ml-2 text-gray-700 dark:text-gray-300">{{ __('No') }}</span>
                            </label>
                        </div>
                    </div>

                    <div id="trade-second-account-field" class="hidden">
                        <label for="trade-second-username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">{{ __('Second Account Username') }}</label>
                        <input type="text" id="trade-second-username" name="trade-second-username" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed" readonly>
                    </div>

                    <div>
                        <button type="submit" disabled class="w-full px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-colors duration-300 flex items-center justify-center opacity-50 cursor-not-allowed">
                            <i class="fas fa-check-circle mr-2"></i> {{ __('Report Successful Trade') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle second account field
            const secondAccountRadios = document.querySelectorAll('input[name="second-account"]');
            const secondAccountField = document.getElementById('second-account-field');

            secondAccountRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'yes') {
                        secondAccountField.classList.remove('hidden');
                    } else {
                        secondAccountField.classList.add('hidden');
                    }
                });
            });

            // Simulate item search (would be replaced with actual search functionality)
            const itemIdInput = document.getElementById('item-id');
            const itemNameInput = document.getElementById('item-name');

            if (itemIdInput && itemNameInput) {
                itemIdInput.addEventListener('blur', function() {
                    if (this.value) {
                        itemNameInput.value = 'Sample Item (' + this.value + ')';
                    } else {
                        itemNameInput.value = '';
                    }
                });
            }
        });
    </script>
@endpush
