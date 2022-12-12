<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category' => 'Accessories',
            ],
            [
                'id' => '2',
                'category' => 'Bags',
            ],
            [
                'id' => '3',
                'category' => 'Shirts',
            ],
            [
                'id' => '4',
                'category' => 'Shoes',
            ],
        ];

        Category::insert($datas);
    }
}
