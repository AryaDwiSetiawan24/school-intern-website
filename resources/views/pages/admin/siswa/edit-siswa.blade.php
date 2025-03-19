<x-app-layout>
    <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Data Siswa</h1>

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nisn" class="block text-gray-700 font-semibold">NISN</label>
                <input type="text" name="nisn" id="nisn" class="w-full px-4 py-2 border rounded-lg"
                    value="{{ $siswa->nisn }}" required>
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-semibold">Nama</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded-lg"
                    value="{{ $siswa->nama }}" required>
            </div>

            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700 font-semibold">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="kelas" class="block text-gray-700 font-semibold">Kelas</label>
                <select name="kelas" id="kelas" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="">Pilih Kelas</option>
                    @for ($i = 1; $i <= 6; $i++)
                        <option value="{{ $i }}" {{ (old('kelas', $siswa->kelas ?? '') == $i) ? 'selected' : '' }}>
                            Kelas {{ $i }}
                        </option>
                    @endfor
                </select>
            </div>

            {{-- Input foto dengan preview --}}
            <div class="mb-4">
                <label for="foto" class="block text-gray-700 font-semibold">Foto</label>
                <input type="file" name="foto" id="foto" class="w-full px-4 py-2 border rounded-lg" onchange="previewFoto(event)">

                {{-- Tampilkan foto lama jika ada --}}
                <div class="mt-4">
                    <strong>Foto Saat Ini:</strong>
                    <br>
                    <img id="preview" src="{{ $siswa->foto ? asset('storage/' . $siswa->foto) : 'https://placehold.co/200x300?text=No+Image' }}" 
                         alt="Foto Siswa" class="mt-2 w-32 h-32 object-cover rounded-md border">
                </div>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow-md">
                    Update Siswa
                </button>

                {{-- Tombol Kembali --}}
                <a href="{{ url()->previous() }}" class="bg-gray-500 hover:bg-gray-700 text-white px-4 py-2 rounded-lg shadow-md">
                    Kembali
                </a>
            </div>
        </form>
    </div>

    {{-- Script untuk preview foto sebelum diunggah --}}
    <script>
        function previewFoto(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('preview');
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
