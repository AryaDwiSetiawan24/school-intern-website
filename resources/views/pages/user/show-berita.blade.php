<x-user-layout>
    <div class="container mx-auto max-w-3xl px-6 mt-40"> <!-- Meningkatkan margin top untuk menghindari tabrakan -->
        <!-- Judul Berita -->
        <h1 class="text-4xl font-extrabold text-gray-900 leading-tight mb-4 text-center">
            {{ $berita->judul }}
        </h1>

        <!-- Tanggal Publikasi -->
        <div class="flex items-center justify-center text-gray-600 text-sm mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6 2a1 1 0 011 1v1h6V3a1 1 0 112 0v1h1a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2h1V3a1 1 0 011-1zm10 6H4v8h12V8z" clip-rule="evenodd"/>
            </svg>
            <span>
                {{ ($berita->published_at ?? $berita->created_at)->translatedFormat('d F Y H:i') }}
            </span>
        </div>

        <!-- Gambar Berita -->
        @if($berita->gambar)
        <div class="mb-6 flex justify-center">
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="rounded-lg shadow-lg w-full max-w-lg">
        </div>
        @endif

        <!-- Isi Berita -->
        <div class="prose prose-lg max-w-none mb-6">
            {!! $berita->isi !!} <!-- Pastikan format HTML tetap terjaga -->
        </div>

        <!-- Tombol Kembali -->
        <div class="text-center">
            <a href="{{ url()->previous() }}" class="bg-blue-500 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">
                Kembali
            </a>
        </div>
    </div>
</x-user-layout>
