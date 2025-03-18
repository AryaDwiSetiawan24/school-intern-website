<x-app-layout>
    <div class="container mx-auto p-8 bg-white shadow-xl rounded-lg max-w-3xl">
        <h1 class="text-4xl font-bold text-gray-900 mb-6">{{ $berita->judul }}</h1>
        
        @if($berita->gambar)
            <div class="mb-6">
                <img src="{{ asset('storage/' . $berita->gambar) }}" 
                     alt="Gambar Berita" 
                     class="w-full h-80 object-cover rounded-lg shadow-md">
            </div>
        @endif

        <div class="bg-gray-100 p-6 rounded-lg shadow-sm text-lg text-gray-800 leading-relaxed">
            {!! $berita->isi !!}
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ url()->previous() }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow-lg transition">
                Kembali
            </a>
            <a href="{{ route('berita.edit', $berita->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg shadow-lg transition">
                Edit
            </a>
        </div>
    </div>
</x-app-layout>
