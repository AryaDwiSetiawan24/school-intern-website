<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $siswa->nama }}</h1>
        <p class="mb-2"><strong>NISN:</strong> {{ $siswa->nisn }}</p>
        <p class="mb-2"><strong>Kelas:</strong> {{ $siswa->kelas }}</p>
        @if($siswa->foto)
            <img src="{{ asset('storage/' . $siswa->foto) }}" alt="Foto Siswa" class="mb-4 w-1/4">
        @endif
        <a href="{{ route('siswa.page') }}" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Kembali</a>
    </div>
</x-app-layout>