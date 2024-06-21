<?php

namespace Database\Seeders;

use App\Models\Families;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamiliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'parent_id' => null,
                'name' => "Budi",
                'relation' => "Orang Tua",
                'gender' => 'Laki-Laki'
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'name' => "Dedi",
                'relation' => "Anak",
                'gender' => 'Laki-Laki'
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'name' => "Dodi",
                'relation' => "Anak",
                'gender' => 'Laki-Laki'
            ],
            [
                'id' => 4,
                'parent_id' => 1,
                'name' => "Dede",
                'relation' => "Anak",
                'gender' => 'Laki-Laki'
            ],
            [
                'id' => 5,
                'parent_id' => 1,
                'name' => "Dewi",
                'relation' => "Anak",
                'gender' => 'Perempuan'
            ],
            [
                'parent_id' => 2,
                'name' => 'Feri',
                'relation' => 'Cucu',
                'gender' => 'Laki-Laki'
            ],
            [
                'parent_id' => 2,
                'name' => 'Farah',
                'relation' => 'Cucu',
                'gender' => 'Perempuan'
            ],
            [
                'parent_id' => 3,
                'name' => 'Gugus',
                'relation' => 'Cucu',
                'gender' => 'Laki-Laki'
            ],
            [
                'parent_id' => 3,
                'name' => 'Gandi',
                'relation' => 'Cucu',
                'gender' => 'Laki-Laki'
            ],
            [
                'parent_id' => 4,
                'name' => 'Hani',
                'relation' => 'Cucu',
                'gender' => 'Perempuan'
            ],
            [
                'parent_id' => 4,
                'name' => 'Hana',
                'relation' => 'Cucu',
                'gender' => 'Perempuan'
            ],
        ];
        foreach ($data as $d) {
            Families::create($d);
        }

    }
}
