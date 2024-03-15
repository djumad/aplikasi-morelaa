<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPenduduk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataPenduduk = [
            [
                'nik' => '1321094076',
                'nama' => 'Djumad Bantan',
                'password' => bcrypt('12345'),
                'role' => 'admin'
            ],
            [
                'nik' => '1321094077',
                'nama' => 'Djum',
                'password' => bcrypt('12345'),
                'role' => 'masyarakat'
            ],
            [
                'nik' => '1321094078',
                'nama' => 'Djumad',
                'password' => bcrypt('12345'),
                'role' => 'masyarakat'
            ],
            [
                'nik' => '1321094079',
                'nama' => 'Bantan',
                'password' => bcrypt('12345'),
                'role' => 'masyarakat'
            ],
            [
                'nik' => '1321094080',
                'nama' => 'djumdjum',
                'password' => bcrypt('12345'),
                'role' => 'raja'
            ],
        ];

        foreach ($dataPenduduk as $key => $value) {
            Penduduk::create($value);
        }
    }
}
