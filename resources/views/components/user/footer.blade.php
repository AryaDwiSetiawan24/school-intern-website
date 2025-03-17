<footer class="bg-white text-gray-800 pt-12 pb-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">

            <div class="w-full flex flex-warp md:w-1/2 mb-8">
                <div>
                    <img class="h-40 w-40" src="/images/logo.png" alt="">
                </div>
                <div>
                    <h3 class="text-2xl font-bold mb-4">SD N GAJAHMUNGKUR 01</h3>
                    <p class="mb-4">Mendidik generasi penerus bangsa dengan pendidikan berkualitas.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-800 hover:text-blue-400 transition duration-300">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray-800 hover:text-blue-400 transition duration-300">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                        <a href="#" class="text-gray-800 hover:text-blue-400 transition duration-300">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 mb-8">
                <h3 class="text-xl font-bold mb-4">Kontak</h3>
                <p class="mb-2">
                    <i class="fas fa-map-marker-alt mr-2"></i> Jl. Gajahmungkur No. 1, Semarang
                </p>
                <p class="mb-2">
                    <i class="fas fa-phone mr-2"></i> +62 812-3456-7890
                </p>
                <p class="mb-2">
                    <i class="fas fa-envelope mr-2"></i> info@sdgajahmungkur01.sch.id
                </p>
            </div>
        </div>
    </div>
    <a href="#"
            class="scrollToTop fixed bottom-6 right-6 bg-blue-300 hover:bg-blue-700 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg opacity-0 invisible translate-y-4 transition-all duration-300 ease-in-out animate__animated animate__pulse animate__infinite z-10"
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