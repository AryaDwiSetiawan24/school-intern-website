<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Berita</h1>
        
        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-semibold">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded-lg"
                    value="{{ $berita->judul }}" required>
            </div>

            <div class="mb-4">
                <label for="isi" class="block text-gray-700 font-semibold">Isi</label>
                <textarea name="isi" id="isi" class="h-40 w-full px-4 py-2 border rounded-lg" required>{{ $berita->isi }}</textarea>
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-gray-700 font-semibold">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full px-4 py-2 border rounded-lg"
                    value="{{ $berita->slug }}" required>
            </div>

            {{-- Input gambar dengan preview --}}
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700 font-semibold">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded-lg" onchange="previewImage(event)">

                {{-- Tampilkan gambar lama jika ada --}}
                <div class="mt-4">
                    <strong>Gambar Saat Ini:</strong>
                    <br>
                    <img id="preview" src="{{ $berita->gambar ? asset('storage/' . $betita->gambar) : 'https://placehold.co/200x300?text=No+Image' }}" 
                         alt="Gambar Berita" class="mt-2 w-32 h-32 object-cover rounded-md border">
                </div>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md">
                    Update Berita
                </button>

                {{-- Tombol Kembali --}}
                <a href="{{ url()->previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow-md">
                    Kembali
                </a>
            </div>
        </form>
    </div>

    {{-- Script untuk mengisi slug otomatis berdasarkan judul --}}
    <script>
        document.getElementById('judul').addEventListener('input', function() {
            var judul = this.value;
            var slug = judul.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
            document.getElementById('slug').value = slug;
        });

        // Script untuk preview gambar sebelum diunggah
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
