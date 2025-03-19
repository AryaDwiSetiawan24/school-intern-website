<x-user-layout>
    <div class="pt-24 bg-cover bg-center h-[400px] relative bg-[url({{ asset('images/sdn01gajahmungkur.png') }})] bg-fixed">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center" aria-hidden="true">
            <div class="absolute inset-0 bg-gradient-to-r from-[#d53369] to-[#daae51]/25"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10 h-full flex justify-center items-center">
            <div class="max-w-3xl text-center" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 animate-fade-in">Profil</h1>
                <p class="text-xl md:text-2xl text-white mb-4 animate-slide-up">Tentang SD N GAJAHMUNGKUR 01</p>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden line-height-0" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-16 md:h-24">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V120H0Z" fill="#ffffff"></path>
            </svg>
        </div>
    </div>

    <!-- Sambutan Kepala Sekolah Section -->
    <section class="py-16 bg-white">
        <div class="container max-w-6xl mx-auto m-8">
            <h2 class="w-full my-2 text-2xl lg:text-5xl font-bold leading-tight text-center text-gray-800" id="sambutan">
                Sambutan Kepala Sekolah
            </h2>
            <div class="w-full mb-8">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            <div class="flex flex-wrap items-center mb-12">
                <div class="w-full sm:w-1/3 p-6 flex flex-col md:flex-wrap items-center">
                    <div class=" rounded-full inline-block mb-4">
                        <img src="{{ asset('images/kepalasekolah.jpg') }}" alt="Kepala Sekolah" class="rounded-full w-64 h-64 object-cover shadow-lg">
                    </div>
                    <h3 class="text-2xl text-gray-800 font-bold leading-tight mb-2 text-center">
                        Fransisca Suciana Hari Purwindah, S.Pd
                    </h3>
                    <p class="text-gray-600 text-center">Kepala Sekolah</p>
                </div>
                <div class="w-full sm:w-2/3 p-6">
                    <div class="bg-gray-50 rounded-lg p-6 shadow-sm">
                        <p class="text-gray-600 mb-6 leading-relaxed">
                        <pre class="text-wrap font-sans">{{$sambutan}}</pre>
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Logo Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Logo Sekolah</h2>
                <p class="text-lg text-gray-600">Identitas SD N Gajahmungkur 01</p>
                <div class="w-24 h-1 bg-gradient-to-r from-[#d53369] to-[#daae51] mx-auto mt-4"></div>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="md:w-1/3 text-center mb-8 md:mb-0" data-aos="zoom-in">
                    <img src="{{asset('images/logo.png')}}" alt="Logo SD N Gajahmungkur 01" class="mx-auto h-64 w-64">
                </div>
            </div>
        </div>
    </section>

    <!-- Sejarah Sekolah Section -->
    <section class="py-12 bg-gradient-to-b from-white to-blue-50">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Sejarah Sekolah</h2>
                <p class="text-lg text-gray-600">Perjalanan SD N Gajahmungkur 01 Dari Masa ke Masa</p>
                <div class="w-24 h-1 bg-gradient-to-r from-[#d53369] to-[#daae51] mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Image Column -->
                <div class="mb-6 md:mb-0">
                    <div class="relative rounded-lg overflow-hidden shadow-lg h-full">
                        <img src="{{asset('images/sejarah.jpg')}}" alt="Sejarah SD N Gajahmungkur 01" class="w-full h-80 md:h-full object-cover">
                        <div class="absolute bottom-0 left-0 bg-gradient-to-r from-[#d53369] to-[#daae51] text-white py-2 px-4 rounded-tr-lg">
                            <span class="font-semibold">Sejak 1967</span>
                        </div>
                    </div>
                </div>

                <!-- Text Column -->
                <div>
                    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-[#d53369] h-full">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Awal Mula</h3>
                        <p class="text-gray-700 leading-relaxed">
                        <pre class="text-wrap font-sans">{{$sejarah}}</pre>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="py-10 bg-gradient-to-r from-[#d53369] to-[#daae51] text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold mb-2">Visi & Misi</h2>
                <p class="opacity-90">Arah dan Tujuan SD N Gajahmungkur 01</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Visi Card -->
                <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-[#d53369] to-[#daae51] p-2 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Visi</h3>
                    </div>
                    <p class="text-gray-700">
                        "Unggul Dalam Prestasi, Berwawasan Imtaq, Berkarakter, Peduli Lingkungan Dan Terciptanya Sekolah Ramah Anak"
                    </p>
                </div>

                <!-- Misi Card -->
                <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-[#d53369] to-[#daae51] p-2 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Misi</h3>
                    </div>
                    <ol class="list-decimal pl-5 space-y-1 text-sm text-gray-700">
                        <li>Menyelenggarakan pembelajaran dan bimbingan secara efektif</li>
                        <li>Mengembangkan minat dan bakat melalui ekstrakulikuler</li>
                        <li>Meningkatkan imtaq melalui pembiasaan beribadah</li>
                        <li>Mengembangkan sikap toleransi</li>
                        <li>Melaksanakan pembelajaran karakter</li>
                        <li>Menunjukkan sikap peduli terhadap lingkungan</li>
                        <li>Membudayakan sikap 5S (Senyum, Sapa, Salam, Sopan, Santun)</li>
                    </ol>
                </div>

                <!-- Tujuan Card -->
                <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-[#d53369] to-[#daae51] p-2 rounded-full mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Tujuan</h3>
                    </div>
                    <ol class="list-decimal pl-5 space-y-1 text-sm text-gray-700">
                        <li>Memberikan pelayanan Pendidikan pada usia wajib belajar</li>
                        <li>Memberikan pelayanan dasar secara professional</li>
                        <li>Menyiapkan peserta didik untuk melanjutkan Pendidikan ke jenjang yang lebih tinggi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>