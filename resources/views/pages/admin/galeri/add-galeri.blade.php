<x-app-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4" id="tambah-album">Tambah Album Baru</h1>
        <form action="{{ route('galeri.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama Album</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" class="w-full px-4 py-2 border rounded"></textarea>
            </div>
            <div class="mb-4">
                @if (session('success'))
                    <div class="mb-4 text-green-500">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="mb-4 text-red-500">
                        {{ session('error') }}
                    </div>
                @endif
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
