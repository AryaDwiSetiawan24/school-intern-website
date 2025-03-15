<x-app-layout>
    {{-- tampilkan berita --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Berita</h1>
        <a href="{{ route('berita.add')}}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Berita</a>
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
                            <a href="{{ route('berita.detail', $berita->slug) }}"
                                class="bg-green-500 text-white px-4 py-2 rounded">Lihat</a>
                            <a href="{{ route('berita.edit', $berita->slug) }}"
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
</x-app-layout>