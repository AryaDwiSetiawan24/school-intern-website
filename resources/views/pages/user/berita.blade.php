<x-user-layout>
    <div class="container mx-auto p-4">
        portal berita yang menampilkan semua berita yang ada
    </div>
        <div class="container mt-4">
            <h2 class="mb-4">Daftar Berita</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Slug</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($beritas as $index => $berita)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $berita->judul }}</td>
                        <td>{{ Str::limit($berita->isi, 100) }}</td>
                        <td>{{ $berita->slug }}</td>
                        <td>
                            @if ($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}" width="100" alt="Gambar Berita">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada berita</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $beritas->links() }}
        </div>
</x-user-layout>