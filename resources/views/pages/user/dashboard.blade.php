{{-- halaman dashboard user --}}
<x-user-layout>
    <div class=" bg-cover bg-center h-screen flex justify-center items-center"
        style="background-image: url('{{ asset('images/education.jpg') }}'); background-attachment: fixed">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row justify-center items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-center md:text-left ">
                <p class="uppercase tracking-loose w-full text-center">yakin efisiensi anggaran pendidikan?</p>
                <h1 class="my-4 text-5xl font-bold leading-tight  text-center">
                    SD N 1 SEMARANG
                </h1>
                <p class="leading-normal text-2xl mb-8 text-center">
                    Kurikulum disusun dengan baik agar membantu siswa untuk memahami materi yang diajarkan.
                </p>
            </div>
        </div>
    </div>
    {{-- wave effect --}}
    <div class="relative -mt-12 lg:-mt-48">
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
    {{-- section 1 --}}
    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" id="sambutan">
                Sambutan Kepala Sekolah
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 p-6">
                    <img class="sm:h-64 mx-auto" src="{{ asset('images/auth-image.jpg') }}" />
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3 text-center">
                        Bp. Slamet Riyati S.pd M.pls
                    </h3>
                </div>
                <div class="w-5/6 sm:w-1/2 p-6">
                    <p class="text-gray-600 mb-8">
                        {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint amet laboriosam quaerat quasi. Provident, consequuntur ipsam vel voluptatibus quia quisquam ipsa assumenda sunt officiis nemo eius ducimus corrupti dolore eos. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam cupiditate rerum alias nisi non. Consequuntur eum perferendis sit tempora ipsum ad delectus dicta, quibusdam veniam repellat tempore deleniti atque molestiae? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempore quibusdam itaque earum eaque ut cumque impedit numquam, molestias dicta debitis praesentium libero nihil illo veritatis dolore porro, quaerat quasi.', 550) }}
                        <br />
                        <br />
                        <a class="text-pink-500 underline" href="#">lihat lainnya &raquo;</a>
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <div class="align-middle">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                            Sejarah Sekolah
                        </h3>
                        <p class="text-gray-600 mb-8">
                            {{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint amet laboriosam quaerat quasi. Provident, consequuntur ipsam vel voluptatibus quia quisquam ipsa assumenda sunt officiis nemo eius ducimus corrupti dolore eos. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam cupiditate rerum alias nisi non. Consequuntur eum perferendis sit tempora ipsum ad delectus dicta, quibusdam veniam repellat tempore deleniti atque molestiae? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores tempore quibusdam itaque earum eaque ut cumque impedit numquam, molestias dicta debitis praesentium libero nihil illo veritatis dolore porro, quaerat quasi.', 550) }}
                            <br />
                            <br />
                            <a class="text-pink-500 underline" href="#">lihat lainnya &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white border-b py-8">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Berita
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div> {{-- decorate line --}}
            </div>
            
            @foreach ($beritas as $berita)
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg transition-all duration-500 hover:scale-105">
                    <a href="{{ route('berita.show', $berita->slug) }}" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                            {{ $berita->created_at->format('d M Y') }}
                        </p>
                        <div class="flex justify-center w-full mt-1">
                            <img src="{{ ($berita->gambar) ? asset('storage/'.$berita->gambar) : 'https://placehold.co/600x400?text=No+Image' }}" class="max-h-56 max-w-full w-auto h-auto rounded-t pb-6"/>
                        </div>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            {{ $berita->judul }}
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-1">
                            {{ Str::limit($berita->isi, 105) }}
                        </p>
                    </a>
                    <a class="m-6 text-pink-500 underline hover:no-underline" href="{{ route('berita.show', $berita->slug) }}">lihat lainnya &raquo;</a>
                </div>
            </div>
            @endforeach
            
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
    <section class="container mx-auto text-center py-8 px-4">
    <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        Daftar Guru
    </h2>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <h3 class="my-4 text-3xl leading-tight">
        Guru adalah pahlawan tanpa tanda jasa!
    </h3>
    <div class="container mx-auto py-8">
        <h1 class="text-center text-2xl font-semibold mb-8">Guru dan Karyawan</h1>
        <div class="relative px-10">
            <button id="scrollLeft" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="flex overflow-x-auto scroll-container gap-6 pb-6">
                @foreach ($pegawai as $staff)
                <div class="text-center flex-shrink-0 w-48 mx-2">
                    <img alt="{{ $staff->nama }}" class="rounded-lg mb-4 w-full h-64 object-cover object-center" src="{{ ($staff->foto) ? asset('storage/'.$staff->foto) : 'https://placehold.co/200x300?text=No+Image' }}" />
                    <h2 class="font-semibold text-lg">{{ $staff->nama }}</h2>
                    <p class="text-sm text-gray-200">{{ $staff->jabatan }}</p>
                    <p class="text-xs text-gray-300">{{ $staff->alamat }}</p>
                </div>
                @endforeach
            </div>
            <button id="scrollRight" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
    <button
        onclick="window.location.href='/pegawai';"
        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Lihat Guru
    </button>
</section>

<script>
    const scrollContainer = document.querySelector('.scroll-container');
    const scrollLeft = document.getElementById('scrollLeft');
    const scrollRight = document.getElementById('scrollRight');

    scrollLeft.addEventListener('click', () => {
        scrollContainer.scrollBy({
            left: -300,
            behavior: 'smooth'
        });
    });

    scrollRight.addEventListener('click', () => {
        scrollContainer.scrollBy({
            left: 300,
            behavior: 'smooth'
        });
    });
</script>
</x-user-layout>
