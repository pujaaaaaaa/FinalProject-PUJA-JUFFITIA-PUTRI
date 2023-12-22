<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm' => "101010",
            'nama' => 'Puja juffitia putri',
            'alamat' => 'Padang',
            'no_hp' => '08122222',
            'semester' => 'ganjil',
        ]);
    }
}
