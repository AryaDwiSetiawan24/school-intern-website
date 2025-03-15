<x-user-layout>
    <!-- Hero div -->
    <div class="pt-24 bg-cover bg-center h-screen relative"
        style="background-image: url('{{ asset('images/education.jpg') }}'); background-attachment: fixed">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-cover bg-center" aria-hidden="true">
            <div class="absolute inset-0 "></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10 h-full flex justify-center items-center">
            <div class="max-w-3xl text-center" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4 animate-fade-in">Guru dan Karyawan</h1>
                <p class="text-xl md:text-2xl text-gray-700 mb-4 animate-slide-up">SD N SEMARANG</p>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden line-height-0" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" class="relative block w-full h-16 md:h-24">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V120H0Z" fill="#ffffff"></path>
            </svg>
        </div>
    </div>

    <!-- Filter div -->
    <div class="py-12 bg-white">
        <div class="container max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex flex-wrap justify-center gap-4 mb-8" data-aos="fade-up">
                <button class="filter-btn px-5 py-2 rounded-full bg-blue-500 text-white active focus:outline-none focus:ring-2 focus:ring-blue-300 transition-all" data-filter="all">
                    Semua
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300 transition-all" data-filter="guru">
                    Guru
                </button>
                <button class="filter-btn px-5 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300 transition-all" data-filter="staf">
                    Staf
                </button>
            </div>
        </div>
    </div>

    <!-- Staff Grid div -->
    <div class="py-8 pb-16 bg-white scroll-mt-24" id="staff-grid">
        <div class="container max-w-6xl mx-auto px-4 sm:px-6">

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6" id="staff-members">
                @foreach ($pegawai as $staff)
                <div class="staff-item guru" data-aos="fade-up" data-aos-delay="100">
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
            <div class="text-center mt-10" data-aos="fade-up" data-aos-delay="700">
                <button id="load-more" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all focus:ring-2 focus:ring-blue-300">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>
    </div>

    <!-- Staff Detail Modal -->
    <div id="staff-modal" class="fixed inset-0 z-50 bg-black/90 hidden items-center justify-center p-4">
        <div class="max-w-xl w-full bg-white rounded-xl overflow-hidden shadow-2xl relative">
            <button id="close-modal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 focus:outline-none z-10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <span class="sr-only">Tutup</span>
            </button>

            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/3">
                    <img id="modal-image" src="" alt="" class="w-full h-full object-cover">
                </div>
                <div class="md:w-2/3 p-6">
                    <h3 id="modal-name" class="text-2xl font-bold text-gray-800 mb-2"></h3>
                    <p id="modal-position" class="text-blue-600 font-medium mb-4"></p>

                    <div class="space-y-4">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-700 mb-1">Pendidikan</h4>
                            <p id="modal-education" class="text-gray-600"></p>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold text-gray-700 mb-1">Pengalaman</h4>
                            <p id="modal-experience" class="text-gray-600"></p>
                        </div>

                        <div>
                            <h4 class="text-lg font-semibold text-gray-700 mb-1">Kompetensi</h4>
                            <div id="modal-competencies" class="flex flex-wrap gap-2 mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS animation
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                offset: 50
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Staff filtering functionality
            const filterBtns = document.querySelectorAll('.filter-btn');
            const staffItems = document.querySelectorAll('.staff-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active', 'bg-blue-500', 'text-white'));
                    filterBtns.forEach(b => b.classList.add('bg-gray-200', 'text-gray-700'));

                    // Add active class to clicked button
                    btn.classList.add('active', 'bg-blue-500', 'text-white');
                    btn.classList.remove('bg-gray-200', 'text-gray-700');

                    const filter = btn.getAttribute('data-filter');

                    staffItems.forEach(item => {
                        if (filter === 'all' || item.classList.contains(filter)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Staff Modal Functionality
            const staffModal = document.getElementById('staff-modal');
            const modalImage = document.getElementById('modal-image');
            const modalName = document.getElementById('modal-name');
            const modalPosition = document.getElementById('modal-position');
            const modalEducation = document.getElementById('modal-education');
            const modalExperience = document.getElementById('modal-experience');
            const modalCompetencies = document.getElementById('modal-competencies');
            const closeModal = document.getElementById('close-modal');

            // Sample staff data (in a real application, this would come from a database)
            const staffData = {
                'Drs. Budi Santoso, M.Pd.': {
                    position: 'Kepala Sekolah',
                    education: 'S2 Manajemen Pendidikan, Universitas Negeri Semarang (2005)<br>S1 Pendidikan, IKIP Semarang (1995)',
                    experience: 'Kepala Sekolah SD N Semarang (2015-sekarang)<br>Wakil Kepala Sekolah (2010-2015)<br>Guru Kelas (1996-2010)',
                    competencies: ['Manajemen Pendidikan', 'Kepemimpinan', 'Pengembangan Kurikulum', 'Supervisi Akademik']
                },
                'Ani Wijayanti, S.Pd.': {
                    position: 'Guru Kelas 1A',
                    education: 'S1 PGSD, Universitas Negeri Semarang (2010)',
                    experience: 'Guru Kelas 1 SD N Semarang (2011-sekarang)<br>Guru Honorer (2010-2011)',
                    competencies: ['Pembelajaran Tematik', 'Literasi Awal', 'Pendidikan Karakter', 'Metode Bermain Sambil Belajar']
                },
                // Add more staff data as needed
            };

            // Open modal when clicking on staff item
            document.querySelectorAll('.staff-item').forEach(item => {
                item.addEventListener('click', () => {
                    const img = item.querySelector('img');
                    const name = item.querySelector('h3').textContent;
                    const position = item.querySelector('p').textContent;

                    modalImage.src = img.src;
                    modalImage.alt = img.alt;
                    modalName.textContent = name;
                    modalPosition.textContent = position;

                    // Check if we have detailed data for this staff member
                    if (staffData[name]) {
                        const data = staffData[name];
                        modalEducation.innerHTML = data.education;
                        modalExperience.innerHTML = data.experience;

                        // Clear and populate competencies
                        modalCompetencies.innerHTML = '';
                        data.competencies.forEach(comp => {
                            const badge = document.createElement('span');
                            badge.className = 'inline-block px-3 py-1 bg-blue-100 text-blue-800 text-xs font-semibold rounded-full';
                            badge.textContent = comp;
                            modalCompetencies.appendChild(badge);
                        });
                    } else {
                        // Default data if specific info not available
                        modalEducation.innerHTML = 'Informasi pendidikan belum tersedia';
                        modalExperience.innerHTML = 'Informasi pengalaman belum tersedia';
                        modalCompetencies.innerHTML = '<span class="text-gray-500">Data belum tersedia</span>';
                    }

                    staffModal.style.display = 'flex';
                    document.body.style.overflow = 'hidden';
                });
            });

            closeModal.addEventListener('click', () => {
                staffModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });

            // Close modal when clicking outside the content
            staffModal.addEventListener('click', (e) => {
                if (e.target === staffModal) {
                    staffModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });

            // Keyboard navigation for modal
            document.addEventListener('keydown', (e) => {
                if (staffModal.style.display === 'flex' && e.key === 'Escape') {
                    staffModal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });

            // Load More functionality (simulated)
            const loadMoreBtn = document.getElementById('load-more');
            let isLoading = false;

            loadMoreBtn.addEventListener('click', () => {
                if (isLoading) return;

                isLoading = true;
                loadMoreBtn.textContent = 'Memuat...';

                // Simulate loading delay
                setTimeout(() => {
                    loadMoreBtn.textContent = 'Tidak ada staf lagi';
                    loadMoreBtn.disabled = true;
                    loadMoreBtn.classList.add('bg-gray-400');
                    loadMoreBtn.classList.remove('hover:bg-blue-600');
                    isLoading = false;
                }, 1500);
            });

            // Add custom class for fade-in animation
            const fadeElements = document.querySelectorAll('.animate-fade-in');
            fadeElements.forEach(el => {
                el.style.opacity = '0';
                el.style.animation = 'fadeIn 1.5s forwards';
            });

            // Add custom class for slide-up animation
            const slideElements = document.querySelectorAll('.animate-slide-up');
            slideElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.animation = 'slideUp 1.5s forwards 0.5s';
            });
        });

        // Define CSS animations


        // Define CSS animations
        document.head.insertAdjacentHTML('beforeend', `
        <style>
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            
            @keyframes slideUp {
                from { 
                    opacity: 0;
                    transform: translateY(20px);
                }
                to { 
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .scroll-mt-24 {
                scroll-margin-top: 6rem;
            }
            
            /* Improved focus styles for accessibility */
            a:focus, button:focus {
                outline: 2px solid #3b82f6;
                outline-offset: 2px;
            }
        </style>
    `);
    </script>
</x-user-layout>