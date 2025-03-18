<x-app-layout>
    <div class="container mx-auto p-8 bg-white shadow-xl rounded-lg max-w-2xl">
        <div class="flex items-center mb-6">
            <img src="{{ $siswa->foto ? asset('storage/' . $siswa->foto) : asset('images/default.png') }}" 
                 alt="Foto Siswa" class="w-32 h-32 object-cover rounded-full border-4 border-gray-200 shadow-md">
            <div class="ml-6">
                <h1 class="text-4xl font-bold text-gray-900">{{ $siswa->nama }}</h1>
                <p class="text-gray-600 text-lg">Kelas {{ $siswa->kelas }}</p>
            </div>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
            <p class="text-gray-700 text-lg"><strong>NISN:</strong> {{ $siswa->nisn }}</p>
            <p class="text-gray-700 text-lg"><strong>Jenis Kelamin:</strong> 
                <span class="px-3 py-1 rounded-full text-white {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'bg-blue-500' : 'bg-pink-500' }}">
                    {{ $siswa->jenis_kelamin ?? 'Tidak Diketahui' }}
                </span>
            </p>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('siswa.page') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg shadow-lg transition">
                Kembali
            </a>
            <a href="{{ route('siswa.edit', $siswa->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg shadow-lg transition">
                Edit
            </a>
        </div>
    </div>
</x-app-layout>
