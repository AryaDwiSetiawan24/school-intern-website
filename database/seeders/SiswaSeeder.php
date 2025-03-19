<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 30; $i++) {
            DB::table('siswas')->insert([
                'nisn' => $faker->unique()->numerify('##########'), // 10 digit NISN
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'kelas' => $faker->randomElement(['1', '2', '3', '4', '5', '6']),
                'foto' => null, // Kosongkan foto untuk sekarang
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
