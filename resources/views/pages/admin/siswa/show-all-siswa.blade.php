<x-app-layout>
    {{-- Tampilkan daftar siswa --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
        <a href="{{ route('siswa.add') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Siswa</a>
        <table class="min-w-full bg-white mt-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">NISN</th>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Kelas</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $siswa->nisn }}</td>
                        <td class="py-2 px-4 border-b">{{ $siswa->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $siswa->kelas }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('siswa.detail', $siswa->id) }}" class="bg-green-500 text-white px-4 py-2 rounded">Lihat</a>
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="inline">
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