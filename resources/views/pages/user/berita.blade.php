<x-user-layout>
    <div class="pt-24 px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($beritas as $berita)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : 'https://via.placeholder.com/400x300' }}" 
                             alt="{{ $berita->judul }}" 
                             class="w-full h-60 object-cover">
                        <div class="absolute bottom-0 left-0 bg-blue-900 text-white p-3">
                            <div class="text-2xl font-bold">
                                {{ $berita->created_at->format('d') }}
                            </div>
                            <div>
                                {{ $berita->created_at->format('M, Y') }}
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-blue-900">{{ $berita->judul }}</h2>
                        <div class="mt-2 text-black">{!! Str::limit($berita->isi, 100) !!}</div>

                        <a href="{{ route('berita.show', $berita->slug) }}" class="text-blue-900 font-bold mt-4 inline-block">
                            READ MORE <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-user-layout>