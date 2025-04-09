<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
    @foreach ($items as $item)
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group relative">
            <div class="absolute inset-0 border-2 border-transparent group-hover:border-purple-400/30 rounded-xl transition-all duration-500 pointer-events-none"></div>

            @if (in_array('VIP', $item->tags ?? []))
                <div class="absolute top-2 right-2 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-xs font-bold px-2 py-1 rounded-full z-10 animate-bounce-slow">
                    VIP
                </div>
            @endif

            <div class="relative h-48 bg-gray-100 dark:bg-gray-700 flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-indigo-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                @php
                    $image = 'images/items/' . ($item->image_path ?? 'default.jpg');
                @endphp

                <img src="{{ asset($image) }}" alt="{{ $item->name }}" class="h-40 object-contain transition-transform duration-500 group-hover:scale-110">
            </div>

            <div class="p-4">
                <h4 class="font-bold text-gray-900 dark:text-white mb-1 truncate group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">
                    {{ $item->name }}
                </h4>
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-300 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">
                        ID: {{ $item->item_id }}
                    </span>
                    <div class="flex space-x-2">
                        @foreach ($item->tags ?? [] as $tag)
                            @php
                                $class = Str::contains($tag, 'BOY') ? 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200' :
                                          (Str::contains($tag, 'GIRL') ? 'bg-pink-100 text-pink-800 dark:bg-pink-900 dark:text-pink-200' :
                                          'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200');
                            @endphp
                            <span class="text-xs px-2 py-1 rounded-full {{ $class }}">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-indigo-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        </div>
    @endforeach
</div>

{{-- Pagination Links --}}
<div class="mt-6">
    {{ $items->links() }}
</div>
