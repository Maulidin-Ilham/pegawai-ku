<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['name' => 'Etika', 'weight' => 0.15],
            ['name' => 'Kedisiplinan', 'weight' => 0.10],
            ['name' => 'Absensi', 'weight' => 0.15],
            ['name' => 'Tanggung Jawab', 'weight' => 0.10],
            ['name' => 'Kerja Sama', 'weight' => 0.10],
            ['name' => 'Kemampuan Memimpin', 'weight' => 0.10],
            ['name' => 'Kecepatan Kerja', 'weight' => 0.10],
            ['name' => 'Ketelitian Kerja', 'weight' => 0.10],
            ['name' => 'Kualitas Hasil Kerja', 'weight' => 0.10],
        ];

        DB::table('criterias')->insert($data);
    }
}
