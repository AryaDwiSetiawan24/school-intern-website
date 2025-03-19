<x-user-layout>
    <div class="pt-24 px-4">
        <div class="max-w-6xl mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($siswas as $siswa)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="{{ $siswa->foto ? asset('storage/' . $siswa->foto) : 'https://via.placeholder.com/400x300' }}" 
                             alt="{{ $siswa->nama }}" 
                             class="w-full h-60 object-cover">
                    </div>
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-blue-900">{{ $siswa->nama }}</h2>
                        <p class="text-gray-700">NISN: {{ $siswa->nisn }}</p>
                        <p class="text-gray-700">Kelas: {{ $siswa->kelas }}</p>

                        <a href="{{ route('admin.siswa.show', $siswa->id) }}" class="text-blue-900 font-bold mt-4 inline-block">
                            DETAIL <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
</x-user-layout>
