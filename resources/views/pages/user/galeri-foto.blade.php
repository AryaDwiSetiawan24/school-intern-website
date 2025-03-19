<x-user-layout>
    <section class="pt-20 bg-gray-800">
    <div class="container mx-auto px-4 py-8">
        <!-- Header with decorative elements -->
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-blue-800">Galeri Foto SDN Gajahmungkur 01</h2>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mt-2"></div>
            <p class="text-gray-600 mt-4">Kumpulan Foto</p>
        </div>

        <!-- Gallery grid with improved cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($albums as $album)
                <a href="{{ route('foto.show', $album->id) }}" class="group">
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 h-full border border-gray-100">
                        <!-- Album cover with overlay effect -->
                        <div class="relative w-full h-52 overflow-hidden">
                            @if ($album->photos->isNotEmpty())
                                <img src="{{ Storage::url($album->photos->first()->photo) }}"
                                    alt="Cover Album {{ $album->name }}" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <!-- Photo count badge -->
                            <div class="absolute bottom-2 right-2 bg-black/70 text-white text-xs px-2 py-1 rounded-full flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                {{ $album->photos->count() }} foto
                            </div>
                        </div>
                        
                        <!-- Album information with improved typography -->
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors">{{ $album->name }}</h3>
                            <p class="text-gray-500 text-sm mt-1 line-clamp-2">{{ $album->description }}</p>
                            
                            <!-- Date and view more link -->
                            <div class="mt-3 flex justify-between items-center pt-2 border-t border-gray-100">
                                <span class="text-xs text-gray-400">
                                    <svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ $album->created_at->format('d M Y') }}
                                </span>
                                <span class="text-xs font-medium text-blue-600 group-hover:underline">Lihat Album</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination (if needed) -->
        <div class="mt-12 flex justify-center">
            more
        </div>
    </div>
    </section>
</x-user-layout>