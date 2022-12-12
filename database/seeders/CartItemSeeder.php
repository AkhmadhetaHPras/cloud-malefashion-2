<?php

namespace Database\Seeders;

use App\Models\CartItem;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'id' => '1',
                'user_id' => '3',
                'variant_id' => '1',
                'quantity' => '1',
                'subtotal' => 279500,
            ],
            [
                'id' => '2',
                'user_id' => '3',
                'variant_id' => '6',
                'quantity' => '2',
                'subtotal' => 312000,
            ],
            [
                'id' => '3',
                'user_id' => '3',
                'variant_id' => '7',
                'quantity' => '1',
                'subtotal' => 156000,
            ],
            [
                'id' => '4',
                'user_id' => '3',
                'variant_id' => '2',
                'quantity' => '1',
                'subtotal' => 279500,
            ],
            [
                'id' => '5',
                'user_id' => '5',
                'variant_id' => '2',
                'quantity' => '1',
                'subtotal' => 279500,
            ],
            [
                'id' => '6',
                'user_id' => '5',
                'variant_id' => '6',
                'quantity' => '2',
                'subtotal' => 312000,
            ],
            [
                'id' => '7',
                'user_id' => '5',
                'variant_id' => '10',
                'quantity' => '1',
                'subtotal' => 630000,
            ],
            [
                'id' => '8',
                'user_id' => '6',
                'variant_id' => '4',
                'quantity' => '1',
                'subtotal' => 130000,
            ],
            [
                'id' => '9',
                'user_id' => '6',
                'variant_id' => '17',
                'quantity' => '1',
                'subtotal' => 2800000,
            ],
            [
                'id' => '10',
                'user_id' => '7',
                'variant_id' => '30',
                'quantity' => '1',
                'subtotal' => 2700000,
            ],
            [
                'id' => '11',
                'user_id' => '7',
                'variant_id' => '2',
                'quantity' => '1',
                'subtotal' => 279500,
            ],
            [
                'id' => '12',
                'user_id' => '8',
                'variant_id' => '6',
                'quantity' => '1',
                'subtotal' => 156000,
            ],
            [
                'id' => '13',
                'user_id' => '8',
                'variant_id' => '11',
                'quantity' => '1',
                'subtotal' => 1200000,
            ],
            [
                'id' => '14',
                'user_id' => '8',
                'variant_id' => '10',
                'quantity' => '1',
                'subtotal' => 630000,
            ],
            [
                'id' => '15',
                'user_id' => '9',
                'variant_id' => '8',
                'quantity' => '2',
                'subtotal' => 208000,
            ],
            [
                'id' => '16',
                'user_id' => '9',
                'variant_id' => '16',
                'quantity' => '1',
                'subtotal' => 2800000,
            ],
            [
                'id' => '17',
                'user_id' => '9',
                'variant_id' => '17',
                'quantity' => '1',
                'subtotal' => 2800000,
            ],
            [
                'id' => '18',
                'user_id' => '10',
                'variant_id' => '2',
                'quantity' => '3',
                'subtotal' => 838500,
            ],
            [
                'id' => '19',
                'user_id' => '10',
                'variant_id' => '6',
                'quantity' => '1',
                'subtotal' => 156000,
            ],
        ];

        CartItem::insert($datas);
    }
}
