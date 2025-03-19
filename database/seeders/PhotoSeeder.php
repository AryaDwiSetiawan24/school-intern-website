<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\Album;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        $albums = Album::all();

        // Pastikan folder 'photos' ada di storage/app/public
        Storage::makeDirectory('public/photos');

        // Path asli di public/images/
        $sourcePath1 = public_path('images/logo.png');
        $sourcePath2 = public_path('images/logo.png');

        // Path tujuan di storage/app/public/photos/
        $destinationPath1 = storage_path('app/public/photos/logo.png');
        $destinationPath2 = storage_path('app/public/photos/logo.png');

        // Copy file jika belum ada di storage/app/public/photos/
        if (file_exists($sourcePath1) && !file_exists($destinationPath1)) {
            File::copy($sourcePath1, $destinationPath1);
        }

        if (file_exists($sourcePath2) && !file_exists($destinationPath2)) {
            File::copy($sourcePath2, $destinationPath2);
        }

        foreach ($albums as $album) {
            Photo::create([
                'album_id' => $album->id,
                'photo' => 'photos/logo.png', // Path yang benar untuk digunakan di asset()
                'caption' => 'Foto pertama dalam ' . $album->name,
            ]);

            Photo::create([
                'album_id' => $album->id,
                'photo' => 'photos/logo.png',
                'caption' => 'Foto kedua dalam ' . $album->name,
            ]);
        }
    }
}
