<x-app-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4 text-center">Daftar Pengaduan</h2>

        <!-- Notifikasi Sukses -->
        @if(session('success'))
            <div id="alert-box" class="mb-4 flex items-center justify-between p-3 bg-green-100 border border-green-300 text-green-800 rounded-lg">
                <div class="flex items-center">
                    <svg class="h-6 w-6 mr-2 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button onclick="document.getElementById('alert-box').style.display='none'" class="text-red-500 hover:text-red-700">
                    ✖
                </button>
            </div>
        @endif

        <div class="overflow-x-auto max-w-full">
            <table class="w-full table-auto border border-gray-300 shadow-md">
                <thead>
                    <tr class="bg-gray-800 text-white text-left">
                        <th class="p-2 border w-10 text-center">No</th>
                        <th class="p-2 border w-1/5">Nama</th>
                        <th class="p-2 border w-1/6">Email</th>
                        <th class="p-2 border w-1/6">Kontak</th>
                        <th class="p-2 border w-1/4">Deskripsi</th>
                        <th class="p-2 border w-16 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-50">
                    @foreach($pengaduan as $key => $pengaduan)
                        <tr class="hover:bg-gray-100 transition">
                            <td class="p-2 border text-center">{{ $key+1 }}</td>
                            <td class="p-2 border break-words truncate">{{ $pengaduan->name }}</td>
                            <td class="p-2 border break-words truncate">{{ $pengaduan->email }}</td>
                            <td class="p-2 border break-words truncate">{{ $pengaduan->contact_no }}</td>
                            <td class="p-2 border text-sm text-gray-700 align-top">
                                <div>
                                    <!-- Deskripsi singkat -->
                                    <span id="desc-{{ $pengaduan->id }}">
                                        {{ Str::limit($pengaduan->description, 50) }}
                                        <span id="extra-{{ $pengaduan->id }}" class="hidden">{{ substr($pengaduan->description, 50) }}</span>
                                    </span>
                                </div>
                                <!-- Tombol Expand -->
                                @if(strlen($pengaduan->description) > 50)
                                    <button class="text-blue-500 hover:underline mt-2 block" 
                                            onclick="toggleDesc({{ $pengaduan->id }})" 
                                            id="btn-{{ $pengaduan->id }}">
                                        Lebih Banyak
                                    </button>
                                @endif
                            </td>
                            <td class="p-2 border text-center align-top">
                                <form action="{{ route('pengaduan.destroy', $pengaduan->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pengaduan ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded shadow text-sm">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Script untuk tombol "Lebih Banyak" -->
    <script>
        function toggleDesc(id) {
            var extraText = document.getElementById("extra-" + id);
            var btn = document.getElementById("btn-" + id);

            if (extraText.classList.contains("hidden")) {
                extraText.classList.remove("hidden");
                btn.innerText = "Lebih Sedikit";
            } else {
                extraText.classList.add("hidden");
                btn.innerText = "Lebih Banyak";
            }
        }
    </script>
</x-app-layout>
