<x-app-layout>
    {{-- tambah berita --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4" id="tambah-berita">Tambah Berita</h1>
        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="judul" class="block text-gray-700">Judul</label>
                <input type="text" name="judul" id="judul" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="isi" class="block text-gray-700">Isi</label>
                <textarea name="isi" id="isi" class="w-full px-4 py-2 border rounded"></textarea>
            </div>
            <div class="mb-4"> {{-- slug akan diisi otomatis --}}
                <label for="slug" class="block text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full px-4 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded">
            </div>
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
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
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

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
