<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4" id="edit-foto">Edit Foto</h1>
        <form action="{{ route('galeri.updatePhoto', $photo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Image Preview -->
            <div class="mb-4">
                <label class="block text-gray-700">Foto Saat Ini</label>
                <div class="border rounded-lg overflow-hidden bg-gray-50 p-2 inline-block">
                    <img id="preview-image" src="{{ Storage::url($photo->photo) }}" alt="Gambar"
                        class="max-h-64 object-contain rounded" />
                </div>
            </div>

            <!-- Photo Upload Field -->
            <div class="mb-4">
                <label for="photo-input" class="block text-gray-700">Ganti Foto</label>
                <input id="photo-input" name="photo" type="file" accept="image/*" class="w-full px-4 py-2 border rounded">
                <p class="mt-1 text-xs text-gray-500" id="file-name">Belum ada file yang dipilih</p>
            </div>

            <!-- Caption Field -->
            <div class="mb-4">
                <label for="caption" class="block text-gray-700">Caption</label>
                <input type="text" name="caption" id="caption" value="{{ $photo->caption }}"
                    class="w-full px-4 py-2 border rounded">
            </div>

            <!-- Session Messages -->
            <div class="mb-4">
                @if (session('success'))
                    <div class="mb-4 text-green-500">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="mb-4 text-red-500">
                        {{ session('error') }}
                    </div>
                @endif
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan Perubahan</button>
            </div>
        </form>
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
