<?php

namespace Database\Seeders;

use App\Models\DetailOrder;
use Illuminate\Database\Seeder;

class DetailOrderSeeder extends Seeder
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
                'order_id' => '1',
                'variant_id' => '5',
                'quantity' => 1,
                'subtotal' => 156000,
            ],
            [
                'id' => '2',
                'order_id' => '1',
                'variant_id' => '6',
                'quantity' => '1',
                'subtotal' => '156000',
            ],
            [
                'id' => '3',
                'order_id' => '2',
                'variant_id' => '4',
                'quantity' => 1,
                'subtotal' => 130000,
            ],
            [
                'id' => '4',
                'order_id' => '3',
                'variant_id' => '12',
                'quantity' => 2,
                'subtotal' => 2400000,
            ],
            [
                'id' => '5',
                'order_id' => '4',
                'variant_id' => '24',
                'quantity' => 1,
                'subtotal' => 1120000,
            ],
            [
                'id' => '6',
                'order_id' => '5',
                'variant_id' => '2',
                'quantity' => 1,
                'subtotal' => 279500,
            ],
            [
                'id' => '7',
                'order_id' => '6',
                'variant_id' => '24',
                'quantity' => 1,
                'subtotal' => 1120000,
            ],
            [
                'id' => '8',
                'order_id' => '6',
                'variant_id' => '14',
                'quantity' => 1,
                'subtotal' => 1200000,
            ],
            [
                'id' => '9',
                'order_id' => '6',
                'variant_id' => '6',
                'quantity' => 1,
                'subtotal' => 156000,
            ],
            [
                'id' => '10',
                'order_id' => '7',
                'variant_id' => '6',
                'quantity' => 2,
                'subtotal' => 312000,
            ],
            [
                'id' => '11',
                'order_id' => '7',
                'variant_id' => '1',
                'quantity' => 1,
                'subtotal' => 279500,
            ],
            [
                'id' => '12',
                'order_id' => '8',
                'variant_id' => '2',
                'quantity' => 3,
                'subtotal' => 838500,
            ],
            [
                'id' => '13',
                'order_id' => '9',
                'variant_id' => '31',
                'quantity' => 1,
                'subtotal' => 2700000,
            ],
            [
                'id' => '14',
                'order_id' => '10',
                'variant_id' => '20',
                'quantity' => 1,
                'subtotal' => 2800000,
            ],
            [
                'id' => '15',
                'order_id' => '11',
                'variant_id' => '6',
                'quantity' => 1,
                'subtotal' => 156000,
            ],
            [
                'id' => '16',
                'order_id' => '12',
                'variant_id' => '12',
                'quantity' => 2,
                'subtotal' => 2400000,
            ],
            [
                'id' => '17',
                'order_id' => '12',
                'variant_id' => '7',
                'quantity' => 1,
                'subtotal' => 156000,
            ],
            [
                'id' => '18',
                'order_id' => '12',
                'variant_id' => '10',
                'quantity' => 2,
                'subtotal' => 1260000,
            ],
        ];

        DetailOrder::insert($datas);
    }
}
