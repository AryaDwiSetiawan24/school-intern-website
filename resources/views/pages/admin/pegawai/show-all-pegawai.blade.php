<x-app-layout>
    <div class="container mx-auto p-4"></div>
    @if (session('success'))
            <div class="mb-4 text-green-500">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="mb-4 text-red-500">{{ session('error') }}</div>
        @endif

    <h1 class="text-2xl font-bold mb-4">Data Pegawai</h1>
    <a href="{{ route('pegawai.add') }}" class="bg-blue-500 text-white px-4 py-3 rounded-lg shadow-md">
        + Tambah Pegawai
    </a>

    <table class="mt-6 table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200 dark:bg-gray-800">
                <th class="border border-gray-300 px-4 py-2">No</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">Role</th>
                <th class="border border-gray-300 px-4 py-2">Foto</th>
                <th class="border border-gray-300 px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pegawais as $index => $item)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->role }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://placehold.co/200x300?text=No+Image' }}"
                            class="w-16 h-16 object-cover mx-auto">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="{{ route('pegawai.edit', $item->id) }}"
                            class="bg-yellow-500 text-white px-4 py-2 rounded shadow">Edit</a>
                        <form action="{{ route('pegawai.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">Tidak ada data pegawai</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
</x-app-layout>
