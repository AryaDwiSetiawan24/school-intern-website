<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        Album::create([
            'name' => 'Dokumentasi Kegiatan 1',
            'description' => 'Kegiatan pertama yang diadakan oleh perusahaan.',
        ]);

        Album::create([
            'name' => 'Dokumentasi Kegiatan 2',
            'description' => 'Kegiatan kedua yang diadakan oleh perusahaan.',
        ]);
    }
}
