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
        {{-- alert --}}
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
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>

    <h2 class="text-xl font-bold mt-8 mb-4">Data Pegawai</h2>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">No</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">Alamat</th>
                <th class="border border-gray-300 px-4 py-2">Role</th>
                {{-- <th class="border border-gray-300 px-4 py-2">Foto</th> --}}
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pegawais as $index => $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->alamat }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->role }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="{{ route('pegawai.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        |
                        <form action="{{ route('pegawai.destroy', $item->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="border border-gray-300 px-4 py-2 text-center">Tidak ada data pegawai</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
</x-app-layout>
