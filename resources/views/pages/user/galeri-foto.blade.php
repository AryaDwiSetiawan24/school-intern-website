<x-user-layout>
    <div class="pt-24 bg-cover bg-center h-[400px] relative bg-[url({{ asset('images/sdn01gajahmungkur.png') }})]"
        style="background-attachment: fixed">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center" aria-hidden="true">
            <div class="absolute inset-0 bg-gradient-to-r from-[#d53369] to-[#daae51]/25"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10 h-full flex justify-center items-center">
            <div class="max-w-3xl text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Galeri Foto</h1>
                <p class="text-xl md:text-2xl text-white">SDN GAJAHMUNGKUR 01</p>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden line-height-0" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-16 md:h-24">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V120H0Z" fill="#ffffff"></path>
            </svg>
        </div>
    </div>
    <section class="bg-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <!-- Header with improved typography and spacing -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800">Album Foto</h2>
                <div class="h-1 mx-auto bg-gradient-to-r from-[#d53369] to-[#daae51] w-24 md:w-32 lg:w-40 my-4 rounded"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Koleksi kenangan dalam gambar yang berharga</p>
            </div>

            <!-- Gallery grid with improved responsiveness and spacing -->
            <div class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3 gap-5 md:gap-6 lg:gap-8">
                @foreach ($albums as $album)
                <a href="{{ route('foto.show', $album->id) }}" class="group h-full">
                    <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 h-full border border-gray-200 flex flex-col">
                        <!-- Album cover with enhanced overlay effect -->
                        <div class="relative w-full aspect-video overflow-hidden">
                            @if ($album->photos->isNotEmpty())
                            <img src="{{ Storage::url($album->photos->first()->photo) }}"
                                alt="Cover Album {{ $album->name }}"
                                class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            @else
                            <div class="w-full h-full bg-gray-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            @endif
                            <!-- Improved photo count badge -->
                            <div class="absolute bottom-3 right-3 bg-black/75 text-white text-xs px-3 py-1.5 rounded-full flex items-center shadow-md">
                                <svg class="w-3.5 h-3.5 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                {{ $album->photos->count() }} foto
                            </div>
                        </div>

                        <!-- Album information with better spacing and typography -->
                        <div class="p-5 flex-1 flex flex-col">
                            <h3 class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition-colors mb-2">{{ $album->name }}</h3>
                            <p class="text-gray-500 text-sm line-clamp-2 flex-1">{{ $album->description }}</p>

                            <!-- Date and view button with improved design -->
                            <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center">
                                <span class="text-xs text-gray-400 flex items-center">
                                    <svg class="w-3.5 h-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ $album->created_at->format('d M Y') }}
                                </span>
                                <span class="text-xs font-medium text-blue-600 group-hover:text-blue-800 group-hover:underline transition-colors duration-200">Lihat Album</span>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
</x-user-layout>