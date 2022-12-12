<?php

namespace Database\Seeders;

use App\Models\Variant;
use Illuminate\Database\Seeder;

class VariantSeeder extends Seeder
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
                'product_id' => '1',
                'size' => 'M',
                'stock' => '40',
            ],
            [
                'id' => '2',
                'product_id' => '1',
                'size' => 'L',
                'stock' => '32',
            ],
            [
                'id' => '3',
                'product_id' => '1',
                'size' => 'XL',
                'stock' => '18',
            ],
            [
                'id' => '4',
                'product_id' => '2',
                'size' => 'NS',
                'stock' => '25',
            ],
            [
                'id' => '5',
                'product_id' => '3',
                'size' => 'M',
                'stock' => '20',
            ],
            [
                'id' => '6',
                'product_id' => '3',
                'size' => 'XL',
                'stock' => '40',
            ],
            [
                'id' => '7',
                'product_id' => '3',
                'size' => '3XL',
                'stock' => '37',
            ],
            [
                'id' => '8',
                'product_id' => '4',
                'size' => 'NS',
                'stock' => '31',
            ],
            [
                'id' => '9',
                'product_id' => '5',
                'size' => 'S',
                'stock' => '30',
            ],
            [
                'id' => '10',
                'product_id' => '5',
                'size' => 'M',
                'stock' => '25',
            ],
            [
                'id' => '11',
                'product_id' => '6',
                'size' => '12.5',
                'stock' => '21',
            ],
            [
                'id' => '12',
                'product_id' => '6',
                'size' => '13.5',
                'stock' => '21',
            ],
            [
                'id' => '13',
                'product_id' => '7',
                'size' => '12.5',
                'stock' => '20',
            ],
            [
                'id' => '14',
                'product_id' => '7',
                'size' => '13.5',
                'stock' => '15',
            ],
            [
                'id' => '15',
                'product_id' => '8',
                'size' => '6',
                'stock' => '7',
            ],
            [
                'id' => '16',
                'product_id' => '8',
                'size' => '6.5',
                'stock' => '10',
            ],
            [
                'id' => '17',
                'product_id' => '8',
                'size' => '7',
                'stock' => '13',
            ],
            [
                'id' => '18',
                'product_id' => '8',
                'size' => '7.5',
                'stock' => '9',
            ],
            [
                'id' => '19',
                'product_id' => '8',
                'size' => '8',
                'stock' => '21',
            ],
            [
                'id' => '20',
                'product_id' => '8',
                'size' => '8.5',
                'stock' => '17',
            ],
            [
                'id' => '21',
                'product_id' => '8',
                'size' => '9',
                'stock' => '16',
            ],
            [
                'id' => '22',
                'product_id' => '9',
                'size' => '4',
                'stock' => '26',
            ],
            [
                'id' => '23',
                'product_id' => '9',
                'size' => '4.5',
                'stock' => '13',
            ],
            [
                'id' => '24',
                'product_id' => '9',
                'size' => '5',
                'stock' => '26',
            ],
            [
                'id' => '25',
                'product_id' => '9',
                'size' => '5.5',
                'stock' => '13',
            ],
            [
                'id' => '26',
                'product_id' => '10',
                'size' => '7.5',
                'stock' => '12',
            ],
            [
                'id' => '27',
                'product_id' => '10',
                'size' => '8.5',
                'stock' => '10',
            ],
            [
                'id' => '28',
                'product_id' => '10',
                'size' => '9',
                'stock' => '7',
            ],
            [
                'id' => '29',
                'product_id' => '10',
                'size' => '9.5',
                'stock' => '15',
            ],
            [
                'id' => '30',
                'product_id' => '10',
                'size' => '10',
                'stock' => '16',
            ],
            [
                'id' => '31',
                'product_id' => '10',
                'size' => '11',
                'stock' => '21',
            ],
            [
                'id' => '32',
                'product_id' => '10',
                'size' => '11.5',
                'stock' => '19',
            ],
            [
                'id' => '33',
                'product_id' => '10',
                'size' => '12',
                'stock' => '9',
            ],
            [
                'id' => '34',
                'product_id' => '11',
                'size' => 'NS',
                'stock' => '7',
            ],
            [
                'id' => '35',
                'product_id' => '12',
                'size' => 'NS',
                'stock' => '24',
            ],
            [
                'id' => '36',
                'product_id' => '13',
                'size' => 'NS',
                'stock' => '19',
            ],
            [
                'id' => '37',
                'product_id' => '15',
                'size' => 'NS',
                'stock' => '20',
            ],
            [
                'id' => '38',
                'product_id' => '16',
                'size' => 'S',
                'stock' => '20',
            ],
            [
                'id' => '39',
                'product_id' => '16',
                'size' => 'M',
                'stock' => '10',
            ],
            [
                'id' => '40',
                'product_id' => '16',
                'size' => 'L',
                'stock' => '30',
            ],
            [
                'id' => '41',
                'product_id' => '16',
                'size' => 'XL',
                'stock' => '25',
            ],
            [
                'id' => '42',
                'product_id' => '16',
                'size' => '2XL',
                'stock' => '13',
            ],
            [
                'id' => '43',
                'product_id' => '16',
                'size' => '3XL',
                'stock' => '17',
            ],
            [
                'id' => '44',
                'product_id' => '16',
                'size' => '4XL',
                'stock' => '14',
            ],
            [
                'id' => '45',
                'product_id' => '17',
                'size' => '2XL',
                'stock' => '10',
            ],
            [
                'id' => '46',
                'product_id' => '17',
                'size' => '3XL',
                'stock' => '9',
            ],
            [
                'id' => '47',
                'product_id' => '17',
                'size' => '4XL',
                'stock' => '11',
            ],
            [
                'id' => '48',
                'product_id' => '18',
                'size' => 'S',
                'stock' => '8',
            ],
            [
                'id' => '49',
                'product_id' => '18',
                'size' => 'M',
                'stock' => '17',
            ],
            [
                'id' => '50',
                'product_id' => '18',
                'size' => 'L',
                'stock' => '20',
            ],
            [
                'id' => '51',
                'product_id' => '18',
                'size' => 'XL',
                'stock' => '24',
            ],
            [
                'id' => '52',
                'product_id' => '18',
                'size' => '2XL',
                'stock' => '12',
            ],
            [
                'id' => '53',
                'product_id' => '18',
                'size' => '3XL',
                'stock' => '17',
            ],
            [
                'id' => '54',
                'product_id' => '18',
                'size' => '4XL',
                'stock' => '9',
            ],
            [
                'id' => '55',
                'product_id' => '19',
                'size' => 'S',
                'stock' => '6',
            ],
            [
                'id' => '56',
                'product_id' => '19',
                'size' => 'M',
                'stock' => '7',
            ],
            [
                'id' => '57',
                'product_id' => '19',
                'size' => 'L',
                'stock' => '14',
            ],
            [
                'id' => '58',
                'product_id' => '19',
                'size' => 'XL',
                'stock' => '20',
            ],
            [
                'id' => '59',
                'product_id' => '19',
                'size' => '2XL',
                'stock' => '5',
            ],
            [
                'id' => '60',
                'product_id' => '19',
                'size' => '4XL',
                'stock' => '6',
            ],
            [
                'id' => '61',
                'product_id' => '20',
                'size' => 'S',
                'stock' => '11',
            ],
            [
                'id' => '62',
                'product_id' => '20',
                'size' => 'M',
                'stock' => '9',
            ],
            [
                'id' => '63',
                'product_id' => '20',
                'size' => 'L',
                'stock' => '20',
            ],
            [
                'id' => '64',
                'product_id' => '20',
                'size' => 'XL',
                'stock' => '23',
            ],
            [
                'id' => '65',
                'product_id' => '20',
                'size' => '2XL',
                'stock' => '4',
            ],
            [
                'id' => '66',
                'product_id' => '20',
                'size' => 'XS',
                'stock' => '7',
            ],
            [
                'id' => '67',
                'product_id' => '14',
                'size' => 'NS',
                'stock' => '18',
            ],
        ];

        Variant::insert($datas);
    }
}
