<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Siswa</h1>
        <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nisn" class="block text-gray-700">NISN</label>
                <input type="text" name="nisn" id="nisn" class="w-full px-4 py-2 border rounded" value="{{ $siswa->nisn }}" required>
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded" value="{{ $siswa->nama }}" required>
            </div>
            <div class="mb-4">
                <label for="kelas" class="block text-gray-700">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="w-full px-4 py-2 border rounded" value="{{ $siswa->kelas }}" required>
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-gray-700">Foto</label>
                <input type="file" name="foto" id="foto" class="w-full px-4 py-2 border rounded">
                @if ($siswa->foto)
                    <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa" class="mb-4 w-1/4">
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>