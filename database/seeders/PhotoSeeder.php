<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        $albums = Album::all();

        foreach ($albums as $album) {
            // Simpan file contoh ke storage/app/photos jika belum ada
            if (!Storage::exists('photos/sample1.jpg')) {
                Storage::put('photos/sample1.jpg', file_get_contents(public_path('sample1.jpg')));
            }
            if (!Storage::exists('photos/sample2.jpg')) {
                Storage::put('photos/sample2.jpg', file_get_contents(public_path('sample2.jpg')));
            }

            Photo::create([
                'album_id' => $album->id,
                'photo' => 'photos/sample1.jpg', // Simpan di storage
                'caption' => 'Foto pertama dalam ' . $album->name,
            ]);

            Photo::create([
                'album_id' => $album->id,
                'photo' => 'photos/sample2.jpg',
                'caption' => 'Foto kedua dalam ' . $album->name,
            ]);
        }
    }
}

