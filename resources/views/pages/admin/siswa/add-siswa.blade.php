<x-app-layout>
    {{-- Tambah Siswa --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4" id="tambah-siswa">Tambah Siswa</h1>
        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nisn" class="block text-gray-700">NISN</label>
                <input type="text" name="nisn" id="nisn" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-gray-700">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="w-full px-4 py-2 border rounded" required>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="kelas" class="block text-gray-700">Kelas</label>
                <select name="kelas" id="kelas" class="w-full px-4 py-2 border rounded" required>
                    <option value="">Pilih Kelas</option>
                    @for ($i = 1; $i <= 6; $i++)
                        <option value="{{ $i }}">Kelas {{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-gray-700">Foto</label>
                <input type="file" name="foto" id="foto" class="w-full px-4 py-2 border rounded">
            </div>
            @if (session('success'))
                <div class="mb-4 text-green-500">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="mb-4 text-red-500">
                    {{ session('error') }}
                </div>
            @endif
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        </form>
    </div>
</x-app-layout>
