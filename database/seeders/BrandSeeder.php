<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'id' => '1',
                'name' => 'Adidas Neo',
            ],
            [
                'id' => '2',
                'name' => 'Adidas Originals',
            ],
            [
                'id' => '3',
                'name' => 'Stella Mccartney',
            ],
            [
                'id' => '4',
                'name' => 'Athletics',
            ],
        ];

        Brand::insert($datas);
    }
}
