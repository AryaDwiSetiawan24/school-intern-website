<x-user-layout>
    <!-- Hero Section -->
    <div class="pt-24 bg-cover bg-center h-[400px] relative bg-[url({{ asset('images/sdn01gajahmungkur.png') }})]"
        style="background-attachment: fixed">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center" aria-hidden="true">
            <div class="absolute inset-0 bg-gradient-to-r from-[#d53369] to-[#daae51]/25"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10 h-full flex justify-center items-center">
            <div class="max-w-3xl text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Daftar Siswa</h1>
                <p class="text-xl md:text-2xl text-white">SDN GAJAHMUNGKUR 01</p>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden line-height-0" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-16 md:h-24">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V120H0Z" fill="#ffffff"></path>
            </svg>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="py-8 bg-white">
        <div class="container max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn px-5 py-2 rounded-full bg-gradient-to-r from-[#d53369] to-[#daae51] text-white active"
                    data-filter="1">
                    Kelas 1
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300"
                    data-filter="2">
                    Kelas 2
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300"
                    data-filter="3">
                    Kelas 3
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300"
                    data-filter="4">
                    Kelas 4
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300"
                    data-filter="5">
                    Kelas 5
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300"
                    data-filter="6">
                    Kelas 6
                </button>
            </div>
        </div>
    </div>

    <!-- Siswa Grid Section -->
    <div class="py-8 pb-16 bg-white" id="siswa-grid">
        <div class="container max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6" id="siswa-items">
                @foreach ($siswas as $siswa)
                <div class="siswa-item" data-kelas="{{ $siswa->kelas }}">
                    <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <img src="{{ ($siswa->foto) ? asset('storage/'.$siswa->foto) : 'https://placehold.co/200x300?text=No+Image' }}" 
                             alt="{{ $siswa->nama }}" 
                             class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-110">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/50 to-transparent p-4">
                            <p class="text-white text-sm">{{ $siswa->jenis_kelamin }}</p>
                        </div>
                    </div>
                    <div class="p-4 w-full text-black text-center">
                        <h3 class="font-semibold text-lg">{{ $siswa->nama }}</h3>
                        <p class="text-sm text-gray-600">NISN: {{ $siswa->nisn }}</p>
                        <p class="text-sm text-gray-600">Kelas {{ $siswa->kelas }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const siswaItems = document.querySelectorAll('.siswa-item');

            // Set default filter (kelas 1)
            showFilteredItems('1');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-gradient-to-r', 'from-[#d53369]', 'to-[#daae51]', 'text-white');
                        btn.classList.add('bg-gray-200', 'text-gray-700');
                    });

                    // Add active class to clicked button
                    this.classList.remove('bg-gray-200', 'text-gray-700');
                    this.classList.add('active', 'bg-gradient-to-r', 'from-[#d53369]', 'to-[#daae51]', 'text-white');

                    const filter = this.getAttribute('data-filter');
                    showFilteredItems(filter);
                });
            });
            
            function showFilteredItems(filter) {
                // Show/hide siswa items based on filter
                siswaItems.forEach(item => {
                    if (item.getAttribute('data-kelas') === filter) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</x-user-layout>