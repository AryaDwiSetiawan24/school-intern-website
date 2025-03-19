<x-app-layout>
    <div class="container mx-auto p-4">
        <!-- Notification Alerts -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm mb-4" role="alert">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <p>{{ session('success') }}</p>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded shadow-sm mb-4" role="alert">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <p>{{ session('error') }}</p>
                </div>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-sm p-6">
            <h1 class="text-2xl font-bold mb-4 flex items-center" id="edit-foto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
                Edit Foto
            </h1>
            
            <form action="{{ route('galeri.updatePhoto', $photo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Image Preview -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Foto Saat Ini</label>
                    <div class="border rounded-lg overflow-hidden bg-gray-50 p-2 inline-block">
                        <img id="preview-image" src="{{ Storage::url($photo->photo) }}" alt="Gambar"
                            class="max-h-64 object-contain rounded" />
                    </div>
                </div>

                <!-- Photo Upload Field -->
                <div class="mb-6">
                    <label for="photo-input" class="block text-gray-700 font-medium mb-2">Ganti Foto</label>
                    <input id="photo-input" name="photo" type="file" accept="image/*" 
                        class="w-full px-4 py-2 border rounded focus:border-blue-500 focus:ring-blue-500">
                    <p class="mt-1 text-xs text-gray-500" id="file-name">Belum ada file yang dipilih</p>
                    @error('photo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Caption Field -->
                <div class="mb-6">
                    <label for="caption" class="block text-gray-700 font-medium mb-2">Caption</label>
                    <input type="text" name="caption" id="caption" value="{{ $photo->caption }}"
                        class="w-full px-4 py-2 border rounded focus:border-blue-500 focus:ring-blue-500">
                    @error('caption')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between items-center">
                    <a href="{{ route('galeri.showAlbum', $photo->album_id) }}" 
                        class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded transition duration-150 ease-in-out flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Kembali
                    </a>
                    <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded transition duration-150 ease-in-out flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript for image preview -->
    <script>
        const photoInput = document.getElementById('photo-input');
        const fileNameDisplay = document.getElementById('file-name');

        photoInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                fileNameDisplay.textContent = file.name;
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-image').src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                fileNameDisplay.textContent = 'Belum ada file yang dipilih';
            }
        });
    </script>
</x-app-layout>