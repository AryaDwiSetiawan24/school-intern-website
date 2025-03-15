<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Edit Pegawai</h1>
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="w-full px-4 py-2 border rounded"
                    value="{{ $pegawai->nama }}" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="w-full px-4 py-2 border rounded"
                    value="{{ $pegawai->alamat }}" required>
            </div>
            <div class="mb-4">
                <label for="jabatan" class="block text-gray-700">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="w-full px-4 py-2 border rounded"
                    value="{{ $pegawai->jabatan }}" required>
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-gray-700">Foto</label>
                <input type="file" name="foto" id="foto" class="w-full px-4 py-2 border rounded">
                @if ($pegawai->foto)
                    <img src="{{ asset('storage/' . $pegawai->foto) }}" alt="Foto Pegawai" class="mb-4 w-1/4">
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
