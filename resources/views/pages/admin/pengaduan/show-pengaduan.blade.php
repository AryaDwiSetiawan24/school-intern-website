<x-app-layout>
        <h2 class="text-center">Daftar Pengaduan</h2>
        
        @if(session('success'))
            <div class="alert alert-success text-green-500">
                {{ session('success') }}
            </div>
        @endif
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Kontak</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduans as $key => $pengaduan)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $pengaduan->name }}</td>
                        <td>{{ $pengaduan->email }}</td>
                        <td>{{ $pengaduan->contact_no }}</td>
                        <td>{{ $pengaduan->description }}</td>
                        <td>
                            <form action="{{ route('pengaduan.destroy', $pengaduan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pengaduan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>    
</x-app-layout>