<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID'); // Gunakan locale Indonesia

        for ($i = 0; $i < 20; $i++) {
            DB::table('pengaduans')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'contact_no' => $faker->phoneNumber,
                'description' => $faker->sentence(10), // Deskripsi pengaduan
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
