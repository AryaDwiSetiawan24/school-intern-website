<x-user-layout>
    <!-- Album Header Section with enhanced styling -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 pt-24">
        <nav class="flex items-center text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('userDashboard') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                        <a href="{{ route('foto.index') }}" class="text-gray-500 hover:text-gray-700">Galeri Foto</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                        <span class="text-gray-700 font-medium">{{ $album->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 border border-gray-200">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">{{ $album->name }}</h2>
            <p class="text-gray-600 text-sm md:text-base">{{ $album->description }}</p>
            <div class="flex items-center mt-4 pt-4 border-t border-gray-100">
                <i class="fas fa-calendar-alt text-gray-400 mr-1.5"></i>
                <span class="text-xs text-gray-400">{{ $album->created_at->format('d M Y') }}</span>
            </div>
        </div>

        <!-- Photo Gallery Grid with consistent styling -->
        <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-800 flex items-center">
                    <i class="fas fa-images text-blue-600 mr-2"></i>
                    Galeri Foto
                </h2>
                <span class="text-sm text-gray-500">{{ count($album->photos) }} foto</span>
            </div>

            @if(count($album->photos) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 md:gap-6">
                @foreach ($album->photos as $index => $photo)
                <div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-200 cursor-pointer"
                    onclick="openPhotoModal({{ $index }})">

                    <div class="relative aspect-square cursor-zoom-in">
                        <img src="{{ Storage::url($photo->photo) }}"
                            alt="{{ $photo->caption ?? 'Gambar tanpa keterangan' }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>

                    <div class="p-4">
                        <p class="text-gray-700 text-sm line-clamp-2">{{ $photo->caption ?? 'Tanpa keterangan' }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-16 text-gray-500 bg-gray-50 rounded-lg">
                <i class="fas fa-image fa-4x text-gray-300 mb-4"></i>
                <p class="text-lg font-medium">Belum ada foto dalam album ini.</p>
                <p class="text-sm text-gray-400 mt-2">Tambahkan foto pertama ke album ini.</p>
            </div>
            @endif
        </div>
    </div>

    <!-- Photo Modal with improved styling -->
    <div id="photoModal" class="fixed inset-0 z-50 hidden overflow-hidden">
        <div class="fixed inset-0 bg-black bg-opacity-95 backdrop-blur-sm transition-opacity" onclick="closePhotoModal()"></div>

        <div class="relative w-full h-full flex items-center justify-center">
            <!-- Modal content -->
            <div class="relative w-4/5 h-4/5 flex items-center justify-center">
                <!-- Image container with loading indicator -->
                <div class="relative">
                    <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain">
                    <div id="imageLoading" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30">
                        <i class="fas fa-spinner fa-spin fa-2x text-white"></i>
                    </div>
                </div>

                <!-- Navigation buttons - enhanced -->
                <button type="button" class="absolute left-4 text-white hover:text-blue-500 focus:outline-none transition-colors duration-200" onclick="prevPhoto()">
                    <i class="fas fa-chevron-left fa-2x md:fa-3x"></i>
                </button>
                <button type="button" class="absolute right-4 text-white hover:text-blue-500 focus:outline-none transition-colors duration-200" onclick="nextPhoto()">
                    <i class="fas fa-chevron-right fa-2x md:fa-3x"></i>
                </button>

                <!-- Close button -->
                <button type="button" class="absolute top-4 right-4 text-white hover:text-blue-500 p-2 transition-colors duration-200" onclick="closePhotoModal()">
                    <i class="fas fa-times fa-2x"></i>
                </button>
            </div>

            <!-- Caption area with improved styling -->
            <div class="absolute bottom-8 left-0 right-0 text-center">
                <p id="modalCaption" class="text-white text-lg px-6 py-3 inline-block bg-black bg-opacity-70 backdrop-blur-sm rounded-lg shadow-lg"></p>
            </div>

            <!-- Counter -->
            <div class="absolute bottom-4 left-0 right-0 text-center">
                <p id="photoCounter" class="text-white text-sm px-3 py-1 inline-block bg-black bg-opacity-50 rounded-full"></p>
            </div>
        </div>
    </div>

    <!-- Create an array of photo data to be used by JavaScript -->
    <script>
        // Create a photos array in JavaScript
        var photoData = [
            @foreach($album->photos as $photo)
            {
                id: {{ $photo->id }},
                url: "{{ Storage::url($photo->photo) }}",
                caption: "{{ $photo->caption ?? 'Tanpa keterangan' }}"
            }{{ !$loop->last ? ',' : '' }}
            @endforeach
        ];

        // Use the photoData array for modal functionality
        let currentPhotoIndex = 0;
        const modal = document.getElementById('photoModal');
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        const photoCounter = document.getElementById('photoCounter');
        const imageLoading = document.getElementById('imageLoading');

        function openPhotoModal(index) {
            currentPhotoIndex = index;
            updateModalContent();
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closePhotoModal() {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        function updateModalContent() {
            // Show loading indicator
            imageLoading.classList.remove('hidden');

            // Get current photo data
            const photo = photoData[currentPhotoIndex];

            // Update counter
            photoCounter.textContent = `${currentPhotoIndex + 1} / ${photoData.length}`;

            // Preload image
            const img = new Image();
            img.onload = function() {
                modalImage.src = photo.url;
                modalImage.alt = photo.caption;
                modalCaption.textContent = photo.caption;
                imageLoading.classList.add('hidden');
            };
            img.src = photo.url;
        }

        function nextPhoto() {
            currentPhotoIndex = (currentPhotoIndex + 1) % photoData.length;
            updateModalContent();
        }

        function prevPhoto() {
            currentPhotoIndex = (currentPhotoIndex - 1 + photoData.length) % photoData.length;
            updateModalContent();
        }

        // Allow keyboard navigation
        document.addEventListener('keydown', function(event) {
            if (modal.classList.contains('hidden')) return;

            if (event.key === 'ArrowRight') {
                nextPhoto();
            } else if (event.key === 'ArrowLeft') {
                prevPhoto();
            } else if (event.key === 'Escape') {
                closePhotoModal();
            }
        });
    </script>
</x-user-layout>