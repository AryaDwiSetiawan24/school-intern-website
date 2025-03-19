<x-app-layout>
    <div class="container mx-auto p-4"></div>
    <h1 class="text-2xl font-bold mb-4">Tambah Pegawai</h1>
    <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama</label>
            <input type="text" name="nama" id="nama" class="form-input w-full rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-gray-700">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-input w-full rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="jabatan" class="block text-gray-700">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" class="form-input w-full rounded-md" required>
        </div>
        <div class="mb-4">
            <label for="role">Pegawai Role (Optional)</label>
            <select name="role" id="role" class="form-input w-full rounded-md">
                <option value="lainnya">pilih role (lainnya)</option>
                <option value="guru">
                    Guru
                </option>
                <option value="pegawai">
                    Pegawai
                </option>
            </select>
        </div>
        <div class="mb-4">
            <label for="foto" class="block text-gray-700">Foto</label>
            <input type="file" name="foto" id="foto" class="form-input w-full rounded-md">
        </div>
        <div class="mb-4">
            {{-- alert --}}
            @if (session('success'))
                <div class="mb-4 text-green-500">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="mb-4 text-red-500">
                    {{ session('error') }}
                </div>
            @endif
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
    </div>
</x-app-layout>
