<x-user-layout>
    <section class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Berita
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            
            @foreach ($beritas as $berita)
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="{{ route('berita.show', $berita->id) }}" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                            {{ $berita->created_at->format('d M Y') }}
                        </p>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            {{ $berita->judul }}
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            {{ Str::limit($berita->konten, 100) }}
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <a href="{{ route('berita.show', $berita->id) }}"
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Selengkapnya...
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </section>
</x-user-layout>
