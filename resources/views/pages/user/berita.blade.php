<x-user-layout>
    <section class="bg-gray-200 py-12">
        <div class="pt-24 px-4">
            <div class="max-w-6xl mx-auto mb-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Berita Sekolah</h1>
                        <p class="text-gray-600">Tetap terupdate dengan artikel terbaru kami</p>
                    </div>

                    <!-- Search Form -->
                    <div class="mt-4 md:mt-0 w-full md:w-auto">
                        <form action="{{ route('berita.index') }}" method="GET" class="flex">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Cari berita..."
                                class="px-4 py-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-gray-500 w-full md:w-64">
                            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-r hover:bg-gray-800">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Sort & Filter Options -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <span class="text-gray-600">Urutkan:</span>
                        <select name="sort" onchange="window.location.href=this.value" 
                            class="border border-gray-300 rounded px-2 py-1">
                            <option value="{{ route('berita.index', array_merge(request()->except('sort'), ['sort' => 'latest'])) }}"
                                {{ request('sort', 'latest') == 'latest' ? 'selected' : '' }}>
                                Terbaru
                            </option>
                            <option value="{{ route('berita.index', array_merge(request()->except('sort'), ['sort' => 'oldest'])) }}"
                                {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                                Terlama
                            </option>
                        </select>
                    </div>

                    <div>
                        <span class="text-gray-600">Menampilkan {{ $beritas->firstItem() ?? 0 }}-{{ $beritas->lastItem() ?? 0 }} dari {{ $beritas->total() ?? 0 }} artikel</span>
                    </div>
                </div>
            </div>

            @if($beritas->count() > 0)
            <div class="max-w-6xl mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($beritas as $berita)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : 'https://via.placeholder.com/400x300' }}"
                        alt="{{ $berita->judul }}"
                        class="w-full h-52 object-cover">

                    <div class="p-5">
                        <h2 class="text-lg font-semibold text-gray-900 hover:text-blue-600 transition">
                            <a href="{{ route('berita.show', $berita->slug) }}">{{ $berita->judul }}</a>
                        </h2>

                        <div class="flex items-center text-sm text-gray-500 mt-2">
                            <i class="far fa-calendar-alt mr-1"></i> {{ $berita->created_at->format('d M, Y') }}
                            <span class="mx-2">•</span>
                            <i class="far fa-user mr-1"></i> {{ $berita->author->name ?? 'Admin' }}
                        </div>

                        <p class="mt-3 text-gray-700 leading-relaxed">{!! Str::limit(strip_tags($berita->isi), 120) !!}</p>

                        <a href="{{ route('berita.show', $berita->slug) }}"
                            class="mt-4 inline-block text-blue-600 font-medium hover:text-blue-800 transition">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="max-w-6xl mx-auto mt-8 flex justify-center">
                {{ $beritas->appends(request()->except('page'))->links() }}
            </div>
            @else
            <div class="max-w-6xl mx-auto">
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="text-6xl text-gray-300 mb-4">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700">Tidak ada berita ditemukan</h3>
                    <p class="text-gray-500 mt-2">
                        @if(request('search'))
                        Tidak ada hasil untuk "{{ request('search') }}". Coba kata kunci lain.
                        @elseif(request('category'))
                        Belum ada berita dalam kategori ini.
                        @else
                        Belum ada berita yang dipublikasikan. Silakan kembali lagi nanti.
                        @endif
                    </p>
                    <a href="{{ route('berita.index') }}" 
                        class="mt-4 inline-block px-4 py-2 bg-gray-900 text-white rounded hover:bg-gray-700">
                        Lihat Semua Berita
                    </a>
                </div>
            </div>
            @endif
        </div>
    </section>
</x-user-layout>
