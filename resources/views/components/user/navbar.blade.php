<!--Nav user-->
<nav id="header" class="fixed w-full z-30 top-0 text-white bg-black bg-opacity-50">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-xl lg:text-2xl"
                href="/">
                <img src="{{ asset('images/usm.png') }}" alt="Logo" class="h-16 fill-current inline">
                SD N 1 Cilimus
            </a>
        </div>
        <div class="block lg:hidden pr-4">
            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-500  focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 lg:bg-transparent p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center" id="navLink">
                <li class="mr-3">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4"
                        href="/">Beranda</a>
                </li>
                <li class="mr-3 relative">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4 cursor-pointer"
                        onclick="toggleDropdown()">Profil Sekolah</a>
                    <ul id="dropdownMenu" class="absolute hidden text-gray-700 pt-1 bg-white">
                        <li class="">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="/profil/kepala-sekolah">Profil Kepala Sekolah</a>
                        </li>
                        <li class="">
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
                                href="/profil/wakil-kepala-sekolah">Profil Wakil Kepala Sekolah</a>
                        </li>
                    </ul>
                </li>

                <script>
                    function toggleDropdown() {
                        var dropdownMenu = document.getElementById("dropdownMenu");
                        if (dropdownMenu.classList.contains("hidden")) {
                            dropdownMenu.classList.remove("hidden");
                            dropdownMenu.classList.add("block");
                        } else {
                            dropdownMenu.classList.remove("block");
                            dropdownMenu.classList.add("hidden");
                        }
                    }
                </script>
                <li class="mr-3">
                    <a class="inline-block font-bold hover:text-pink-500 hover:text-underline py-2 px-4"
                        href="/berita">Berita</a>
                </li>
            </ul>
            <button id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
            </button>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
