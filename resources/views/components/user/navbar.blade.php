<nav id="header" class="fixed w-full z-30 top-0 text-white bg-black bg-opacity-50">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <!-- Logo Section -->
        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-xl lg:text-2xl" href="/">
                <img src="{{ asset('images/usm.png') }}" alt="Logo" class="h-16 fill-current inline">
                SD N 1 Cilimus
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-500 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>

        <!-- Desktop Menu Content -->
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center" id="navLink">
                <!-- Home -->
                <li class="mr-3">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4"
                        href="/">Beranda</a>
                </li>
                
                <!-- School Profile Dropdown -->
                <li class="mr-3 relative">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4 cursor-pointer">
                        Profil
                        <svg class="fill-current h-4 w-4 inline ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </a>
                    <ul class="absolute hidden bg-white text-gray-800 mt-1 py-2 rounded-lg shadow-lg hover:block w-40 dropdown-menu">
                        <li>
                            <a href="/visi-misi" class="block px-4 py-2 hover:bg-gray-500">Visi Misi</a>
                        </li>
                        <li>
                            <a href="/sejarah" class="block px-4 py-2 hover:bg-gray-500">Sejarah</a>
                        </li>
                        <li>
                            <a href="/pegawai" class="block px-4 py-2 hover:bg-gray-500">Pegawai</a>
                        </li>
                    </ul>
                </li>
                
                <!-- News -->
                <li class="mr-3">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4"
                        href="/berita">Berita</a>
                </li>
                
                <!-- Gallery Dropdown -->
                <li class="mr-3 relative">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4 cursor-pointer">
                        Galeri
                        <svg class="fill-current h-4 w-4 inline ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </a>
                    <ul class="absolute hidden bg-white text-gray-800 mt-1 py-2 rounded-lg shadow-lg hover:block w-40 dropdown-menu">
                        <li>
                            <a href="/galeri-foto" class="block px-4 py-2 hover:bg-gray-100">Foto</a>
                        </li>
                        <li>
                            <a href="/galeri-video" class="block px-4 py-2 hover:bg-gray-100">Video</a>
                        </li>
                    </ul>
                </li>
                
                <!-- Contact Dropdown -->
                <li class="mr-3 relative">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4 cursor-pointer">
                        Kontak
                        <svg class="fill-current h-4 w-4 inline ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </a>
                    <ul class="absolute hidden bg-white text-gray-800 mt-1 py-2 rounded-lg shadow-lg hover:block w-40 dropdown-menu">
                        <li>
                            <a href="/kontak" class="block px-4 py-2 hover:bg-gray-100">Kontak</a>
                        </li>
                        <li>
                            <a href="/aduan" class="block px-4 py-2 hover:bg-gray-100">Pengaduan</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <a href="/admin"> <!-- hanya untuk testing -->
                <button id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Admin
                </button>
            </a>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

<style>
    /* Add these styles to make dropdowns appear on hover without JS */
    @media (min-width: 1024px) {
        li.relative:hover .dropdown-menu {
            display: block;
        }
    }
</style>