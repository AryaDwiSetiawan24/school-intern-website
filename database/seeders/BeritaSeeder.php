<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
            'judul' => 'Berita Pertama',
            'isi' => 'Ini adalah isi berita pertama.',
            'slug' => 'berita-pertama',
            'gambar' => 'gambar1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'judul' => 'Berita Kedua',
            'isi' => 'Ini adalah isi berita kedua.',
            'slug' => 'berita-kedua',
            'gambar' => 'gambar2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'judul' => 'Berita Ketiga',
            'isi' => 'Ini adalah isi berita ketiga.',
            'slug' => 'berita-ketiga',
            'gambar' => 'gambar3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'judul' => 'Berita Keempat',
            'isi' => 'Ini adalah isi berita keempat.',
            'slug' => 'berita-keempat',
            'gambar' => 'gambar4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'judul' => 'Berita Kelima',
            'isi' => 'Ini adalah isi berita kelima.',
            'slug' => 'berita-kelima',
            'gambar' => 'gambar5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
