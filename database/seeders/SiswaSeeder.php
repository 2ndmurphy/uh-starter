<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $siswas = [
            [
                'nis' => '2021001',
                'nama' => 'Ahmad Rizki',
                'kelas' => '10A',
                'email' => 'ahmad.rizki@email.com',
                'jenis_kelamin' => 'Laki-laki'
            ],
            [
                'nis' => '2021002',
                'nama' => 'Siti Nurhaliza',
                'kelas' => '10A',
                'email' => 'siti.nurhaliza@email.com',
                'jenis_kelamin' => 'Perempuan'
            ],
            [
                'nis' => '2021003',
                'nama' => 'Budi Santoso',
                'kelas' => '10B',
                'email' => 'budi.santoso@email.com',
                'jenis_kelamin' => 'Laki-laki'
            ]
        ];

        foreach ($siswas as $siswa) {
            DB::table('siswas')->insert($siswa);
        }
    }
}
