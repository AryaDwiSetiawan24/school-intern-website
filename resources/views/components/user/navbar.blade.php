<nav id="header" class="fixed w-full z-30 top-0 text-white bg-black bg-opacity-50 transition-all duration-300">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <!-- Logo Section -->
        <div class="pl-4 flex items-center">
            <a class="toggleColour no-underline hover:no-underline font-bold text-xl lg:text-2xl flex items-center" href="/">
                <img src="/images/usm.png" alt="Logo" class="h-12 md:h-16 fill-current inline mr-3">
                <span>SD N GAJAHMUNGKUR 01</span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-500 hover:text-pink-400 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <!-- Desktop & Mobile Menu Content -->
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden  mt-2 lg:mt-0 lg:bg-transparent p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center" id="navLink">
                <!-- Home -->
                <li class="mr-3 py-1 lg:py-0">
                    <a class="inline-block w-full font-bold hover:text-pink-500 hover:text-underline py-2 px-4 transition duration-200"
                        href="/">Beranda</a>
                </li>

                <!-- School Profile Dropdown -->
                <li class="mr-3 py-1 lg:py-0 dropdown relative">
                    <button class="sm-inline-block w-full text-left font-bold hover:text-pink-500 hover:text-underline py-2 px-4 cursor-pointer flex items-center justify-between lg:inline-flex lg:justify-start transition duration-200">
                        <span>Profil</span>
                        <svg class="fill-current h-4 w-4 ml-1 transform transition-transform duration-200"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu hidden lg:absolute bg-white text-gray-800 mt-1 py-2 rounded-lg shadow-lg lg:w-48 w-full">
                        <li>
                            <a href="/profilsekolah" class="block px-4 py-2 hover:bg-gray-200 transition duration-200">Profil Sekolah</a>
                        </li>
                        <li>
                            <a href="/pegawai" class="block px-4 py-2 hover:bg-gray-200 transition duration-200">Guru dan Staff</a>
                        </li>
                        <li>
                            <a class="block px-4 py-2 hover:bg-gray-200 transition duration-200" href="/siswa">Siswa</a>
                        </li>
                    </ul>
                </li>

                <!-- News -->
                <li class="mr-3 py-1 lg:py-0">
                    <a class="inline-block w-full font-bold hover:text-pink-500 hover:text-underline py-2 px-4 transition duration-200"
                        href="/berita">Berita</a>
                </li>

                <!-- Gallery Dropdown -->
                <li class="mr-3 py-1 lg:py-0 dropdown relative">
                    <button class="sm-inline-block w-full text-left font-bold hover:text-pink-500 hover:text-underline py-2 px-4 cursor-pointer flex items-center justify-between lg:inline-flex lg:justify-start transition duration-200">
                        <span>Galeri</span>
                        <svg class="fill-current h-4 w-4 ml-1 transform transition-transform duration-200"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <ul class="dropdown-menu hidden lg:absolute bg-white text-gray-800 mt-1 py-2 rounded-lg shadow-lg lg:w-48 w-full">
                        <li>
                            <a href="/galeri-foto" class="block px-4 py-2 hover:bg-gray-200 transition duration-200">Foto</a>
                        </li>
                        <li>
                            <a href="/galeri-video" class="block px-4 py-2 hover:bg-gray-200 transition duration-200">Video</a>
                        </li>
                    </ul>
                </li>

                <!-- Contact -->
                <li class="mr-3 py-1 lg:py-0">
                    <a href="/kontak" class="inline-block w-full font-bold hover:text-pink-500 hover:text-underline py-2 px-4 transition duration-200">
                        Kontak
                    </a>
                </li>

                <!-- Complaint Service -->
                <li class="mr-3 py-1 lg:py-0">
                    <a href="/pengaduan" class="inline-block w-full font-bold hover:text-pink-500 hover:text-underline py-2 px-4 transition duration-200">
                        Layanan Aduan
                    </a>
                </li>
            </ul>

            <div class="mt-3 lg:mt-0">
                <a href="/admin">
                    <button id="navAction"
                        class="w-full lg:w-auto mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-3 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        Admin
                    </button>
                </a>
            </div>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>