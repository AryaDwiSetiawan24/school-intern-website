{{-- halaman dashboard user --}}
<x-user-layout>
    <div class="relative h-screen flex justify-center items-center bg-cover bg-center"
        style="background-image: url('{{ asset('images/sdn01gajahmungkur.png') }}'); background-attachment: fixed;">

        <!-- Overlay gelap agar teks lebih terbaca -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <div class="container px-4 mx-auto flex flex-col md:flex-row justify-center items-center relative">
            <!-- Konten -->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-center text-white text-center md:text-left">
                <p class="uppercase tracking-wide">Yakin efisiensi anggaran pendidikan?</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">SD N GAJAHMUNGKUR 01</h1>
                <p class="leading-normal text-2xl mb-8">Kurikulum disusun dengan baik agar membantu siswa memahami materi yang diajarkan.</p>
            </div>
        </div>

        <!-- Wave Effect -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.1"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.3"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            id="Path-4" opacity="0.3"></path>
                    </g>
                    <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <path
                            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                        </path>
                    </g>
                </g>
            </svg>
        </div>
    </div>

    {{-- section 1 --}}
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <!-- Sambutan Kepala Sekolah -->
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" id="sambutan">
                Sambutan Kepala Sekolah
            </h2>
            <div class="w-full mb-8">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-wrap items-center mb-12">
                <div class="w-full sm:w-1/3 p-6 flex flex-col items-center">
                    <img class="h-64 w-auto object-cover rounded-lg shadow-lg mb-4" src="{{ asset('images/kepalasekolah.jpg') }}" alt="Kepala Sekolah" />
                    <h3 class="text-2xl text-gray-800 font-bold leading-tight mb-2 text-center">
                        Fransisca Suciana Hari Purwindah, S.Pd
                    </h3>
                    <p class="text-gray-600 text-center">Kepala Sekolah</p>
                </div>
                <div class="w-full sm:w-2/3 p-6">
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            {{ Str::limit($sambutan, 500) }}
                        </p>
                        <a class="inline-block px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition duration-300" href="#">Baca selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Sejarah Sekolah -->
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" id="sejarah">
                Sejarah Sekolah
            </h2>
            <div class="w-full mb-8">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-wrap items-center">
                <div class="w-full sm:w-1/2 p-6">
                    <div class="relative h-80 overflow-hidden rounded-lg shadow-lg">
                        <img class="w-full h-full object-cover" src="{{ asset('images/sejarah.jpg') }}" alt="Gedung Sekolah" onerror="this.src='/api/placeholder/600/480'; this.onerror=null;" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 p-6">
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                        <h3 class="text-3xl text-gray-800 font-bold leading-tight mb-4">
                            Perjalanan Kami
                        </h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            {{ Str::limit($sejarah, 300) }}
                        </p>
                        <a class="inline-block px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition duration-300" href="#">
                            Baca selengkapnya
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- section 2 --}}
    <section class="bg-gray-50 border-b py-12">
        <div class="container max-w-6xl mx-auto px-4">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Berita Terkini
            </h2>
            <div class="w-full mb-8">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($beritas as $berita)
                <div class="flex flex-col h-full overflow-hidden bg-white rounded-lg shadow-lg transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                    <a href="{{ route('berita.show', $berita->slug) }}" class="block overflow-hidden h-48">
                        <img
                            src="{{ ($berita->gambar) ? asset('storage/'.$berita->gambar) : 'https://placehold.co/600x400?text=No+Image' }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                            alt="{{ $berita->judul }}" />
                    </a>

                    <div class="flex-1 p-6">
                        <div class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-gray-500 text-sm">
                                {{ $berita->created_at->format('d M Y') }}
                            </p>
                        </div>

                        <h3 class="font-bold text-xl text-gray-800 mb-3 line-clamp-2 hover:text-pink-500">
                            <a href="{{ route('berita.show', $berita->slug) }}">{{ $berita->judul }}</a>
                        </h3>

                        <p class="text-gray-600 text-base mb-4 line-clamp-3">
                            {{ Str::limit(strip_tags($berita->isi), 100) }}
                        </p>

                    </div>

                    <div class="px-6 pb-4">
                        <a
                            class="inline-block px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition duration-300 text-sm font-medium"
                            href="{{ route('berita.show', $berita->slug) }}">
                            Baca selengkapnya
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            @if(count($beritas) > 9)
            <div class="flex justify-center mt-12">
                <a
                    href="{{ route('berita.index') }}"
                    class="px-6 py-3 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 transition duration-300 font-medium">
                    Lihat Semua Berita
                </a>
            </div>
            @endif
        </div>
    </section>
    <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Ekstrakurikuler
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                    <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="p-8 text-3xl font-bold text-center border-b-4">
                            Badminton
                        </div>
                        <ul class="w-full text-center text-sm">
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                            1 Trofi
                            <span class="text-base">untuk satu tahun</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Lihat Lainnya...
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="w-full p-8 text-3xl font-bold text-center">Basket</div>
                        <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                        <ul class="w-full text-center text-base font-bold">
                            <li class="border-b py-4">Juara 1 antar RT</li>
                            <li class="border-b py-4">Juara 2 antar sekolah</li>
                            <li class="border-b py-4">Juara 3 antar jemput</li>
                            <li class="border-b py-4">dll.</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-4xl font-bold text-center">
                            > 3 Trofi
                            <span class="text-base">/ per semester</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Lihat Lainnya...
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                    <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="p-8 text-3xl font-bold text-center border-b-4">
                            Adu mulut
                        </div>
                        <ul class="w-full text-center text-sm">
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                            > 500 Trofi
                            <span class="text-base">/ per bulan</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Lihat Lainnya...
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                <g class="wave" fill="#f8fafc">
                    <path
                        d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                    </path>
                </g>
                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                    <g
                        transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                        <path
                            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                            opacity="0.100000001"></path>
                        <path
                            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                            opacity="0.100000001"></path>
                        <path
                            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                            opacity="0.200000003"></path>
                    </g>
                </g>
            </g>
        </g>
    </svg>
    <section class="bg-gray-800 text-white py-16 px-4">
        <div class="container mx-auto max-w-7xl">
            <!-- Header -->
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
                Guru dan Staff
            </h2>
            <div class="w-full mb-6">
                <div class="h-1 mx-auto bg-white w-24 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <!-- Slider Container -->
            <div class="relative mt-12 px-4 sm:px-8 md:px-12">
                <!-- Left Arrow Button -->
                <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-indigo-800 p-3 rounded-full z-10 shadow-lg hover:bg-indigo-100 transition duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Teacher Cards Slider -->
                <div class="flex overflow-x-auto gap-6 pb-8 pt-2 px-2 -mx-2 scroll-smooth" id="teacherSlider" style="scrollbar-width: none; -ms-overflow-style: none;">
                    <style>
                        /* Hide scrollbar for Chrome, Safari and Opera */
                        #teacherSlider::-webkit-scrollbar {
                            display: none;
                        }

                        /* Hide scrollbar for IE, Edge and Firefox */
                        #teacherSlider {
                            -ms-overflow-style: none;
                            /* IE and Edge */
                            scrollbar-width: none;
                            /* Firefox */
                        }
                    </style>

                    @foreach ($pegawai as $staff)
                    <div class="text-center flex-shrink-0 mx-2 overflow-hidden w-60 md:w-48 lg:w-56 xl:w-64">
                        <div class="relative overflow-hidden bg-white rounded-xl shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                            <img
                                alt="{{ $staff->nama }}"
                                class="w-full h-72 sm:h-64 md:h-56 lg:h-60 xl:h-72 object-cover object-center transition-transform duration-500 hover:scale-110"
                                src="{{ ($staff->foto) ? asset('storage/'.$staff->foto) : 'https://placehold.co/240x360?text=No+Image' }}" />
                            <div class="absolute inset-0 bg-gradient-to-t from-indigo-900 to-transparent opacity-30"></div>
                        </div>
                        <div class="p-4">
                            <h2 class="font-bold text-lg mb-1 text-white">{{ $staff->nama }}</h2>
                            <p class="text-sm font-medium text-gray-300 mb-1">{{ $staff->jabatan }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Right Arrow Button -->
                <button id="scrollRight" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-indigo-800 p-3 rounded-full z-10 shadow-lg hover:bg-indigo-100 transition duration-300 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-10">
                <a
                    href="/pegawai"
                    class="inline-block bg-white text-indigo-800 font-bold rounded-full py-4 px-8 shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transform transition hover:scale-105 duration-300 ease-in-out">
                    Lihat Semua Guru
                </a>
            </div>
        </div>

        <!-- JavaScript for Slider -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const slider = document.getElementById('teacherSlider');
                const leftBtn = document.getElementById('scrollLeft');
                const rightBtn = document.getElementById('scrollRight');
                const cardWidth = 260; // Card width + margin

                leftBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: -cardWidth * 2,
                        behavior: 'smooth'
                    });
                });

                rightBtn.addEventListener('click', function() {
                    slider.scrollBy({
                        left: cardWidth * 2,
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </section>
</x-user-layout>