<x-app-layout>
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-6"> Galeri Foto</h2>
        
        <a href="{{ route('galeri.create') }}" 
            class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-md shadow-md transition duration-300 ease-in-out">
            Tambah Album
        </a>

        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($albums as $album)
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105">
                <!-- Gambar Album -->
                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                    @if ($album->photos->isNotEmpty())
                        <img src="{{ Storage::url($album->photos->first()->photo) }}" 
                            alt="Cover Album" class="w-full h-full object-cover">
                    @else
                        <span class="text-gray-500">No Image</span>
                    @endif
                </div>

                <!-- Info Album -->
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-700">{{ $album->name }}</h3>
                    <p class="text-gray-500 text-sm truncate">{{ $album->description }}</p>
                    
                    <!-- Tombol Aksi -->
                    <div class="mt-4 flex justify-between">
                        <a href="{{ route('galeri.showAlbum', $album->id) }}" 
                            class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 text-sm rounded shadow-md">
                             Lihat
                        </a>
                        <a href="{{ route('galeri.editAlbum', $album->id) }}" 
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 text-sm rounded shadow-md">
                             Edit
                        </a>
                        <form action="{{ route('galeri.destroy', $album->id) }}" method="POST" 
                            onsubmit="return confirm('Yakin ingin menghapus album ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded shadow-md">
                                 Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
