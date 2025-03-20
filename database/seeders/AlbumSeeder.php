<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        Album::create([
            'name' => 'Ekstrakurikuler',
            'description' => 'Kegiatan pertama yang diadakan oleh Sekolah.',
        ]);

        Album::create([
            'name' => 'SRA (Sekolah Ramah Anak)',
            'description' => 'Kegiatan kedua yang diadakan oleh Sekolah.',
        ]);

        Album::create([
            'name' => 'FLS2N KECAMATAN GAJAHMUNGKUR',
            'description' => 'Kegiatan ketiga yang diadakan oleh Sekolah.',
        ]);
    }
}
