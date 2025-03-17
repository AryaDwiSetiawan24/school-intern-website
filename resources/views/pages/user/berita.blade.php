<x-user-layout>
    <section class="bg-gray-800 py-12">
        <div class="pt-24 px-4">
            <div class="max-w-6xl mx-auto mb-8">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h1 class="text-3xl font-bold text-blue-900">Latest News</h1>
                        <p class="text-gray-600">Stay updated with our most recent articles</p>
                    </div>
                    
                    <!-- Search Form -->
                    <div class="mt-4 md:mt-0 w-full md:w-auto">
                        <form action="{{ route('berita.index') }}" method="GET" class="flex">
                            <input type="text" name="search" value="{{ request('search') }}" 
                                placeholder="Search news..." 
                                class="px-4 py-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-blue-500 w-full md:w-64">
                            <button type="submit" class="bg-blue-900 text-white px-4 py-2 rounded-r hover:bg-blue-800">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Categories -->
               
                
                <!-- Sort & Filter Options -->
                <div class="mt-6 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <span class="text-gray-600">Sort by:</span>
                        <select name="sort" onchange="window.location.href=this.value" class="border border-gray-300 rounded px-2 py-1">
                            <option value="{{ route('berita.index', array_merge(request()->except('sort'), ['sort' => 'latest'])) }}"
                                {{ request('sort', 'latest') == 'latest' ? 'selected' : '' }}>
                                Latest
                            </option>
                            <option value="{{ route('berita.index', array_merge(request()->except('sort'), ['sort' => 'oldest'])) }}"
                                {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                                Oldest
                            </option>
                            <option value="{{ route('berita.index', array_merge(request()->except('sort'), ['sort' => 'popular'])) }}"
                                {{ request('sort') == 'popular' ? 'selected' : '' }}>
                                Most Popular
                            </option>
                        </select>
                    </div>
                    
                    <div>
                        <span class="text-gray-600">Showing {{ $beritas->firstItem() ?? 0 }}-{{ $beritas->lastItem() ?? 0 }} of {{ $beritas->total() ?? 0 }} articles</span>
                    </div>
                </div>
            </div>
            
            @if($beritas->count() > 0)
                <div class="max-w-6xl mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($beritas as $berita)
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
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
                            @if($berita->category)
                                <div class="absolute top-0 right-0 bg-blue-700 text-white py-1 px-3 m-2 rounded-full text-sm">
                                    {{ $berita->category->nama }}
                                </div>
                            @endif
                        </div>
                        <div class="p-4">
                            <h2 class="text-xl font-bold text-blue-900 hover:text-blue-700">
                                <a href="{{ route('berita.show', $berita->slug) }}">{{ $berita->judul }}</a>
                            </h2>
                            
                            <div class="flex items-center text-gray-500 text-sm mt-2">
                                <span><i class="far fa-user mr-1"></i> {{ $berita->author->name ?? 'Admin' }}</span>
                                <span class="mx-2">•</span>
                                <span><i class="far fa-eye mr-1"></i> {{ $berita->views ?? 0 }}</span>
                            </div>
                            
                            <div class="mt-3 text-black">{!! Str::limit($berita->isi, 100) !!}</div>

                            <div class="mt-4 flex justify-between items-center">
                                <a href="{{ route('berita.show', $berita->slug) }}" class="text-blue-900 font-bold inline-block hover:text-blue-700">
                                    READ MORE <i class="fas fa-chevron-right"></i>
                                </a>
                                
                                <div class="flex space-x-2">
                                    <a href="#" class="text-gray-500 hover:text-blue-700"><i class="fas fa-share-alt"></i></a>
                                    <a href="#" class="text-gray-500 hover:text-red-500"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
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
                        <h3 class="text-xl font-bold text-gray-700">No articles found</h3>
                        <p class="text-gray-500 mt-2">
                            @if(request('search'))
                                No results found for "{{ request('search') }}". Try a different search term.
                            @elseif(request('category'))
                                No articles available in this category yet.
                            @else
                                No articles have been published yet. Please check back later.
                            @endif
                        </p>
                        <a href="{{ route('berita.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-900 text-white rounded hover:bg-blue-700">
                            View All News
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>
</x-user-layout>