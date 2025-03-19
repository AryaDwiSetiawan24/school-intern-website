<footer class="bg-white text-gray-800 pt-12 pb-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 mb-8">
                <div class="flex flex-col md:flex-row items-center md:items-start">
                    <div class="mb-4 md:mb-0 md:mr-6">
                        <img class="h-40 w-40 object-contain" src="/images/logo.png" alt="Logo SD N Gajahmungkur 01">
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-2xl font-bold mb-4">SD N GAJAHMUNGKUR 01</h3>
                        <p class="mb-4">Mendidik generasi penerus bangsa dengan pendidikan berkualitas.</p>
                        <div class="flex justify-center md:justify-start space-x-4">
                            <a href="https://www.youtube.com/channel/UC9ybuID69jbH4op5QAvq3zA" class="text-red-800 hover:text-blue-400 transition duration-300">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 mb-8">
                <div class="text-center md:text-left">
                    <h3 class="text-xl font-bold mb-4">Kontak</h3>
                    <p class="mb-2 flex items-center justify-center md:justify-start">
                        <i class="fas fa-map-marker-alt mr-2"></i> Jl. Cikurai Raya, Gajahmungkur
                    </p>
                    <p class="mb-2 flex items-center justify-center md:justify-start">
                        <i class="fas fa-phone mr-2"></i>(024) 8445726
                    </p>
                    <p class="mb-2 flex items-center justify-center md:justify-start">
                        <i class="fas fa-envelope mr-2"></i>
                        <a href="mailto:sdgajahmungkur01@gmail.com" class="hover:text-blue-400 transition duration-300">sdgajahmungkur01@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 mb-8">
                <div class="text-center md:text-left">
                    <h3 class="text-xl font-bold mb-4">Tautan Terkait</h3>
                    <p class="mb-2 flex items-center justify-center md:justify-start hover:text-blue-400 transition duration-300">
                        <a href="https://www.kemdikbud.go.id/" target="_blank" rel="noopener noreferrer"><i class="fa fa-angle-right mr-2"></i>Kemdikbud</a>
                    </p>
                    <p class="mb-2 flex items-center justify-center md:justify-start hover:text-blue-400 transition duration-300">
                        <a href="https://disdiksmg.semarangkota.go.id/" target="_blank" rel="noopener noreferrer"><i class="fa fa-angle-right mr-2"></i>Dinas Pendidikan</a>
                    </p>
                    <p class="mb-2 flex items-center justify-center md:justify-start hover:text-blue-400 transition duration-300">
                        <a href="https://ditpsd.kemdikbud.go.id/" target="_blank" rel="noopener noreferrer"><i class="fa fa-angle-right mr-2"></i>Direktorat Sekolah Dasar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Scroll to Top -->
    <a href="#"
        class="scrollToTop fixed bottom-6 right-6 bg-gradient-to-r from-[#d53369] to-[#daae51] hover:scale-125 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg opacity-0 invisible translate-y-4 transition-all duration-300 ease-in-out animate__animated animate__pulse animate__infinite z-10"
        aria-label="Scroll to top">
        <i class="fa fa-angle-up"></i>
    </a>
</footer>

<script>
    // Show or hide the scroll to top button
    window.addEventListener('scroll', function() {
        const scrollToTopButton = document.querySelector('.scrollToTop');
        if (window.scrollY > 300) {
            scrollToTopButton.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            scrollToTopButton.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            scrollToTopButton.classList.remove('opacity-100', 'visible', 'translate-y-0');
            scrollToTopButton.classList.add('opacity-0', 'invisible', 'translate-y-4');
        }
    });

    // Scroll to top when the button is clicked
    document.querySelector('.scrollToTop').addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>