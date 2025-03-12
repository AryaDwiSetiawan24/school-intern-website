<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawais')->insert([
            [
                'nama' => 'John Doe',
                'alamat' => '123 Main St',
                'jabatan' => 'Manager',
                'foto' => 'john_doe.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jane Smith',
                'alamat' => '456 Elm St',
                'jabatan' => 'Assistant Manager',
                'foto' => 'jane_smith.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Robert Brown',
                'alamat' => '789 Oak St',
                'jabatan' => 'HR',
                'foto' => 'robert_brown.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Emily White',
                'alamat' => '321 Pine St',
                'jabatan' => 'Developer',
                'foto' => 'emily_white.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Michael Green',
                'alamat' => '654 Maple St',
                'jabatan' => 'Designer',
                'foto' => 'michael_green.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
