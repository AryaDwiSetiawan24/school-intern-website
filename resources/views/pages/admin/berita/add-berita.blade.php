<x-app-layout>
    {{-- percobaan tampilan/view data (bisa diperbaiki oleh frontend) --}}
    {{-- tampilkan berita --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Berita</h1>
        <a href="#tambah-berita" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Berita</a>
        <table class="min-w-full bg-white mt-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Judul</th>
                    <th class="py-2 px-4 border-b">Slug</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beritas as $berita)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $berita->judul }}</td>
                        <td class="py-2 px-4 border-b">{{ $berita->slug }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('berita.show', $berita->slug) }}"
                                class="bg-green-500 text-white px-4 py-2 rounded">Lihat</a>
                            <a href="{{ route('berita.edit', $berita->id) }}"
                                class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

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
            <input type="hidden" name="slug" id="slug"> {{-- slug akan diisi otomatis dari kode javascript dibawah --}}
            <div class="mb-4">
                <label for="gambar" class="block text-gray-700">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="w-full px-4 py-2 border rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
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