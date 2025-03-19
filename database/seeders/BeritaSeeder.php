<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;
use Faker\Factory as Faker;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        
        // buat data dummy berita
        foreach (range(1, 20) as $index) {
            Berita::create([
            'judul' => $faker->sentence(5),
            'isi' => $faker->paragraph(3),
            'slug' => $faker->slug,
            'gambar' => '',
            ]);
        }
    }
}