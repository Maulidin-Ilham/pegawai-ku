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
        $data = [
            ['name' => 'Rianto', 'c1' => 3, 'c2' => 3, 'c3' => 4, 'c4' => 4, 'c5' => 3, 'c6' => 3, 'c7' => 3, 'c8' => 3, 'c9' => 3],
            ['name' => 'Ranto', 'c1' => 3, 'c2' => 3, 'c3' => 3, 'c4' => 3, 'c5' => 3, 'c6' => 3, 'c7' => 3, 'c8' => 3, 'c9' => 3],
            ['name' => 'Ferawati', 'c1' => 3, 'c2' => 3, 'c3' => 2, 'c4' => 3, 'c5' => 3, 'c6' => 2, 'c7' => 3, 'c8' => 3, 'c9' => 3],
            ['name' => 'Siti', 'c1' => 3, 'c2' => 2, 'c3' => 2, 'c4' => 2, 'c5' => 2, 'c6' => 2, 'c7' => 2, 'c8' => 2, 'c9' => 2],
            ['name' => 'Rosmawati', 'c1' => 3, 'c2' => 3, 'c3' => 3, 'c4' => 3, 'c5' => 3, 'c6' => 2, 'c7' => 2, 'c8' => 2, 'c9' => 3],
            ['name' => 'Sahidi', 'c1' => 3, 'c2' => 3, 'c3' => 3, 'c4' => 3, 'c5' => 3, 'c6' => 2, 'c7' => 3, 'c8' => 2, 'c9' => 2],
            ['name' => 'Masdayani', 'c1' => 3, 'c2' => 3, 'c3' => 3, 'c4' => 3, 'c5' => 3, 'c6' => 2, 'c7' => 2, 'c8' => 2, 'c9' => 2],
            ['name' => 'Iskandar', 'c1' => 3, 'c2' => 3, 'c3' => 3, 'c4' => 3, 'c5' => 3, 'c6' => 2, 'c7' => 2, 'c8' => 2, 'c9' => 2],
            ['name' => 'Tumbur', 'c1' => 2, 'c2' => 2, 'c3' => 2, 'c4' => 2, 'c5' => 2, 'c6' => 2, 'c7' => 2, 'c8' => 2, 'c9' => 2],
        ];

        foreach ($data as $pegawaiData) {
            DB::table('pegawais')->insert($pegawaiData);
        }
    }
}
