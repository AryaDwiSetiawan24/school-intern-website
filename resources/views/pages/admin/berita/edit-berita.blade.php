<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Berita</h1>
        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded"
                    value="{{ $berita->judul }}" required>
            </div>
            <div class="mb-4">
                <label for="isi" class="block text-gray-700">Isi</label>
                <textarea name="isi" id="isi" class="h-54 w-full px-4 py-2 border rounded" required>{{ $berita->isi }}</textarea>
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full px-4 py-2 border rounded"
                    value="{{ $berita->slug }}" required>
            </div>
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded">
                {{-- @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="mb-4 w-1/4">
                @endif --}}
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>

    {{-- untuk mengisi slug otomatis berdasarkan judul --}}
    <script>
        document.getElementById('judul').addEventListener('input', function() {
            var judul = this.value;
            var slug = judul.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)+/g, '');
            var originalSlug = slug;
            var counter = 1;

            function checkSlug(slug, callback) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', '{{ route('checkSlug') }}?slug=' + slug, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        callback(response.exists);
                    }
                };
                xhr.send();
            }

            function updateSlug() {
                checkSlug(slug, function(exists) {
                    if (exists) {
                        slug = originalSlug + '-' + counter;
                        counter++;
                        updateSlug();
                    } else {
                        document.getElementById('slug').value = slug;
                    }
                });
            }

            updateSlug();
        });
    </script>
</x-app-layout>
