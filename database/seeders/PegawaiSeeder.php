<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Bahasa Indonesia

        // URL foto default (Placeholder)
        $photoUrl = 'https://upload.wikimedia.org/wikipedia/commons/9/9e/Placeholder_Person.jpg';

        // Nama file untuk disimpan
        $fileName = 'placeholder_person.jpg';
        $filePath = 'public/photos/' . $fileName;

        // Cek apakah file sudah ada, jika belum, unduh dari URL
        if (!Storage::exists($filePath)) {
            $imageContent = Http::get($photoUrl)->body(); // Unduh gambar
            Storage::put($filePath, $imageContent); // Simpan di storage Laravel
        }

        // Loop untuk membuat 20 pegawai dengan foto yang telah diunduh
        foreach (range(1, 20) as $index) {
            Pegawai::create([
                'nama' => $faker->name(),
                'alamat' => $faker->address(),
                'jabatan' => $faker->randomElement(['Kepala Sekolah', 'Wakil Kepala Sekolah', 'Guru', 'Staf']),
                'role' => $faker->randomElement(['guru', 'staff']),
                'foto' => 'photos/' . $fileName, // Simpan path relatif ke dalam database
            ]);
        }
    }
}
