<x-user-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $berita->judul }}</h1>
        <p class="mb-4">{!! $berita->isi !!}</p>
        @if($berita->gambar)
        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="mb-4 w-1/4">
        @endif
        <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Kembali</a>
    </div>
</x-user-layout>
