<x-app-layout>
    {{-- Tampilkan daftar berita --}}
    <div class="container mx-auto p-6">
        @if (session('success'))
            <div class="mb-4 text-green-500">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="mb-4 text-red-500">{{ session('error') }}</div>
        @endif

        <h1 class="text-3xl font-bold mb-6 text-gray-800">Daftar Berita</h1>
        <a href="{{ route('berita.add') }}" class="bg-blue-500 text-white px-4 py-3 rounded-lg shadow-md">
            + Tambah Berita
        </a>

        <div class="mt-6 bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="w-full table-auto">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="py-3 px-6 text-left">Gambar</th>
                        <th class="py-3 px-6 text-left">Judul</th>
                        <th class="py-3 px-6 text-left">Slug</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($beritas as $berita)
                        <tr class="border-b">
                            <td class="py-3 px-6">
                                <img src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : asset('images/default.png') }}" 
                                     alt="Gambar Berita" 
                                     class="w-16 h-16 object-cover rounded-md border">
                            </td>
                            <td class="py-3 px-6">{{ $berita->judul }}</td>
                            <td class="py-3 px-6">{{ $berita->slug }}</td>
                            <td class="py-3 px-6 flex justify-center space-x-2">
                                <a href="{{ route('berita.detail', $berita->slug) }}" class="bg-green-500 text-white px-4 py-2 rounded shadow">Lihat</a>
                                <a href="{{ route('berita.edit', $berita->slug) }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow">Edit</a>
                                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
