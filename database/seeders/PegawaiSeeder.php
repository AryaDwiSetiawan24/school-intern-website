<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel pegawai.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID'); // Bahasa Indonesia

        foreach (range(1, 20) as $index) {
            Pegawai::create([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'jabatan' => $faker->randomElement(['Kepala Sekolah', 'Wakil Kepala Sekolah', 'Guru', 'Staf']),
                'foto' => $faker->imageUrl(200, 200, 'people'), // Foto dummy
            ]);
        }
    }
}