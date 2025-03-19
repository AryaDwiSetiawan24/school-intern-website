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
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Guru dan Staff</h1>
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
                    data-filter="all">
                    Semua
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300"
                    data-filter="guru">
                    Guru
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300"
                    data-filter="staf">
                    Staf
                </button>
            </div>
        </div>
    </div>

    <!-- Staff Grid Section -->
    <div class="py-8 pb-16 bg-white" id="staff-grid">
        <div class="container max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6" id="staff-members">
                @foreach ($pegawai as $staff)
                <div class="staff-item {{ $staff->role }}" data-role="{{ $staff->role }}">
                    <div class="group relative overflow-hidden rounded-xl shadow-lg cursor-pointer transition-all duration-300 hover:shadow-xl">
                        <img src="{{ ($staff->foto) ? asset('storage/'.$staff->foto) : 'https://placehold.co/200x300?text=No+Image' }}" alt="{{ $staff->nama }}" class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-4 w-full text-black text-center">
                        <h3 class="font-semibold text-lg">{{ $staff->nama }}</h3>
                        <p class="/80 text-sm">{{ $staff->jabatan }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <button id="load-more" class="px-6 py-3 bg-gradient-to-r from-[#d53369] to-[#daae51] text-white rounded-lg hover:opacity-90 transition-all">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const staffItems = document.querySelectorAll('.staff-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-gradient-to-r', 'from-[#d53369]', 'to-[#daae51]');
                        btn.classList.add('bg-gray-200', 'text-gray-700');
                    });

                    // Add active class to clicked button
                    this.classList.remove('bg-gray-200', 'text-gray-700');
                    this.classList.add('active', 'bg-gradient-to-r', 'from-[#d53369]', 'to-[#daae51]', 'text-white');

                    const filter = this.getAttribute('data-filter');

                    // Show/hide staff items based on filter
                    staffItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-role') === filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Load more functionality
            const loadMoreBtn = document.getElementById('load-more');
            let visibleItems = 10; // Initial number of visible items

            function updateVisibility() {
                let currentFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
                let relevantItems = currentFilter === 'all' ?
                    staffItems :
                    document.querySelectorAll(`.staff-item[data-role="${currentFilter}"]`);

                let count = 0;
                relevantItems.forEach((item, index) => {
                    if (index < visibleItems) {
                        item.style.display = 'block';
                        count++;
                    } else {
                        item.style.display = 'none';
                    }
                });

                // Hide load more button if all items are visible
                if (count >= relevantItems.length) {
                    loadMoreBtn.style.display = 'none';
                } else {
                    loadMoreBtn.style.display = 'inline-block';
                }
            }

            // Initial visibility setup
            staffItems.forEach((item, index) => {
                if (index >= visibleItems) {
                    item.style.display = 'none';
                }
            });

            loadMoreBtn.addEventListener('click', function() {
                visibleItems += 10; // Show 4 more items
                updateVisibility();
            });
        });
    </script>
</x-user-layout>