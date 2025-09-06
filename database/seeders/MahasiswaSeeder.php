<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Haidar Putra Atmajaya',
            'npm' => '2310631170019',
            'prodi' => 'Informatika',
            'fakultas' => 'Ilmu Komputer',
            'semester' => 5,
        ]);

        Mahasiswa::create([
            'nama' => 'Mohammad Ichsan Nurdin',
            'npm' => '2310631170097',
            'prodi' => 'Informatika',
            'fakultas' => 'Ilmu Komputer',
            'semester' => 3,
        ]);

        Mahasiswa::create([
            'nama' => 'Muhammad Jibran Tariq',
            'npm' => '2310631170103',
            'prodi' => 'Informatika',
            'fakultas' => 'Ilmu Komputer',
            'semester' => 3,
        ]);
    }
}
