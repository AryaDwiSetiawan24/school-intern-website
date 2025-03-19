<x-user-layout>
    <section class="pt-24 bg-gray-200">
        <div class="container mx-auto px-4 py-8 max-w-6xl">
            <!-- Breadcrumb navigation -->
            <nav aria-label="breadcrumb">
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <a href="{{ route('userDashboard') }}" class="hover:text-blue-600 transition-colors">Beranda</a>
                    <span class="mx-2">›</span>
                    <a href="{{ route('berita.index') }}" class="hover:text-blue-600 transition-colors">Berita</a>
                    <span class="mx-2">›</span>
                    <span class="text-gray-700">{{ $berita->judul }}</span>
                </div>
            </nav>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main content -->
                <div class="lg:w-2/3">
                    <article>
                        <header class="mb-8">
                            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $berita->judul }}</h1>
                            <div class="flex items-center justify-between mb-6">
                                <!-- Author and date -->
                                <div class="flex items-center">
                                    <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden mr-3">
                                        @if(!empty($berita->author) && !empty($berita->author->avatar))
                                        <img src="{{ asset('storage/' . $berita->author->avatar) }}"
                                            alt="Foto profil {{ $berita->author->name }}"
                                            class="w-full h-full object-cover">
                                        @else
                                        <span class="text-gray-500 text-xl">{{ substr($berita->author->name ?? 'A', 0, 1) }}</span>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-medium text-gray-900">{{ $berita->author->name ?? 'Admin' }}</p>
                                        <time class="text-sm text-gray-500">{{ $berita->created_at->format('d M, Y \a\t H:i') }}</time>
                                    </div>
                                </div>

                                <!-- Social sharing -->
                                <div class="flex space-x-3">
                                    @php
                                    $shareUrl = urlencode(route('berita.show', $berita->slug));
                                    $shareText = urlencode($berita->judul);
                                    @endphp
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                                        target="_blank" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-blue-100 transition-colors" aria-label="Bagikan ke Facebook">
                                        <i class="fab fa-facebook-f text-gray-600"></i>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}"
                                        target="_blank" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-blue-100 transition-colors" aria-label="Bagikan ke Twitter">
                                        <i class="fab fa-twitter text-gray-600"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text={{ urlencode($berita->judul . ' - ' . route('berita.show', $berita->slug)) }}" target="_blank" class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center hover:bg-green-100 transition-colors">
                                        <i class="fab fa-whatsapp text-gray-600"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Featured image -->
                            <div class="relative aspect-video overflow-hidden rounded-lg mb-8">
                                <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : 'https://via.placeholder.com/1200x675' }}"
                                    alt="Gambar ilustrasi untuk {{ $berita->judul }}"
                                    class="w-full h-full object-cover">
                                @if(!empty($berita->image_credit))
                                <div class="absolute bottom-2 right-2 bg-black/50 text-white text-xs px-2 py-1 rounded">
                                    Photo: {{ $berita->image_credit }}
                                </div>
                                @endif
                            </div>
                        </header>

                        <!-- Article content -->
                        <div class="prose prose-lg max-w-none">
                            {!! $berita->isi !!}
                        </div>

                        <!-- Tags -->
                        @if(!empty($berita->tags) && count($berita->tags) > 0)
                        <footer class="mt-8">
                            <h3 class="text-sm font-semibold text-gray-500 mb-2">Tags</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($berita->tags as $tag)
                                <a href="{{ route('berita.tag', $tag->slug) }}" class="px-3 py-1 text-sm bg-gray-200 rounded hover:bg-gray-300">
                                    #{{ $tag->nama }}
                                </a>
                                @endforeach
                            </div>
                        </footer>
                        @endif
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="lg:w-1/3 ml-2 mt-2 bg-white/50 sticky top-24 p-6 rounded-lg  h-full">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Berita Terbaru</h2>
                    <div class="space-y-4">
                        @foreach($beritaTerbaru as $beritaItem)
                        <div class="flex items-start gap-4">
                            <div class="w-20 h-20 flex-shrink-0 overflow-hidden rounded-lg">
                                <img src="{{ $beritaItem->gambar ? asset('storage/' . $beritaItem->gambar) : 'https://via.placeholder.com/80x80' }}"
                                    alt="{{ $beritaItem->judul }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div>
                                <a href="{{ route('berita.show', $beritaItem->slug) }}"
                                    class="text-gray-900 font-semibold hover:text-blue-600 transition-colors">
                                    {{ $beritaItem->judul }}
                                </a>
                                <p class="text-sm text-gray-500">{{ $beritaItem->created_at->format('d M, Y') }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
