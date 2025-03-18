<x-user-layout>
    <!-- Album Header Section -->
    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $album->name }}</h2>
            <p class="text-gray-600 text-sm">{{ $album->description }}</p>
        </div>
         
        <!-- Photo Gallery Grid -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Galeri Foto
            </h2>
            
            @if(count($album->photos) > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($album->photos as $index => $photo)
                    <div class="group bg-gray-50 rounded-lg overflow-hidden shadow-md transition transform hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative h-48">
                            <img src="{{ Storage::url($photo->photo) }}" alt="{{ $photo->caption }}" 
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex justify-center items-center space-x-2">
                                <button type="button" 
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-sm font-medium transition"
                                    onclick="openPhotoModal({{ $index }})">
                                    <span class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        Lihat Foto
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <p class="text-gray-700 text-sm">{{ $photo->caption }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-10 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p>Belum ada foto dalam album ini.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Photo Modal - UPDATED to be larger with minimal UI -->
    <div id="photoModal" class="fixed inset-0 z-50 hidden overflow-hidden">
        <div class="fixed inset-0 bg-black bg-opacity-90 transition-opacity" onclick="closePhotoModal()"></div>
        
        <div class="relative w-full h-full flex items-center justify-center">
            <!-- Simplified modal without white background, taking up 80% of screen -->
            <div class="relative w-4/5 h-4/5 flex items-center justify-center">
                <!-- Image container -->
                <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain">
                
                <!-- Navigation buttons - simplified -->
                <button type="button" class="absolute left-2 text-white hover:text-gray-300 focus:outline-none" onclick="prevPhoto()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button type="button" class="absolute right-2 text-white hover:text-gray-300 focus:outline-none" onclick="nextPhoto()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                
                <!-- Close button -->
                <button type="button" class="absolute top-0 right-0 text-white hover:text-gray-300 p-2" onclick="closePhotoModal()">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Caption at bottom -->
            <div class="absolute bottom-4 left-0 right-0 text-center">
                <p id="modalCaption" class="text-white text-lg px-4 py-2 inline-block bg-black bg-opacity-50 rounded-lg"></p>
            </div>
        </div>
    </div>

    <!-- Create an array of photo data to be used by JavaScript -->
    <script>
        // Create a photos array in JavaScript
        var photoData = [];
        
        @foreach($album->photos as $photo)
            photoData.push({
                id: {{ $photo->id }},
                url: "{{ Storage::url($photo->photo) }}",
                caption: "{{ $photo->caption }}"
            });
        @endforeach
        
        // Use the photoData array for modal functionality
        let currentPhotoIndex = 0;
        const modal = document.getElementById('photoModal');
        const modalImage = document.getElementById('modalImage');
        const modalCaption = document.getElementById('modalCaption');
        
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
            const photo = photoData[currentPhotoIndex];
            modalImage.src = photo.url;
            modalImage.alt = photo.caption;
            modalCaption.textContent = photo.caption;
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