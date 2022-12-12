<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
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
                'address_id' => '9',
                'total' => 312000,
                'order_date' => Carbon::parse('08-05-2022'),
                'delivery_date' => Carbon::parse('10-05-2022'),
                'note' => '',
                'status' => 'Completed',
            ],
            [
                'id' => '2',
                'address_id' => '1',
                'total' => 130000,
                'order_date' => Carbon::parse('16-06-2022'),
                'delivery_date' => Carbon::parse('17-06-2022'),
                'note' => '',
                'status' => 'Completed',
            ],
            [
                'id' => '3',
                'address_id' => '2',
                'total' => 2400000,
                'order_date' => Carbon::parse('16-06-2022'),
                'delivery_date' => Carbon::parse('17-06-2022'),
                'note' => '',
                'status' => 'Completed',
            ],
            [
                'id' => '4',
                'address_id' => '3',
                'total' => 1120000,
                'order_date' => Carbon::parse('16-06-2022'),
                'delivery_date' => Carbon::parse('17-06-2022'),
                'note' => '',
                'status' => 'Completed',
            ],
            [
                'id' => '5',
                'address_id' => '4',
                'total' => 279500,
                'order_date' => Carbon::parse('16-06-2022'),
                'delivery_date' => Carbon::parse('18-06-2022'),
                'note' => '',
                'status' => 'Completed',
            ],
            [
                'id' => '6',
                'address_id' => '9',
                'total' => 2476000,
                'order_date' => Carbon::parse('18-06-2022'),
                'delivery_date' => Carbon::parse('20-06-2022'),
                'note' => '',
                'status' => 'Sent',
            ],
            [
                'id' => '7',
                'address_id' => '10',
                'total' => 591500,
                'order_date' => Carbon::parse('21-06-2022'),
                'delivery_date' => null,
                'note' => '',
                'status' => 'Processed',
            ],
            [
                'id' => '8',
                'address_id' => '5',
                'total' => 838500,
                'order_date' => Carbon::parse('22-06-2022'),
                'delivery_date' => null,
                'note' => '',
                'status' => 'Processed',
            ],
            [
                'id' => '9',
                'address_id' => '7',
                'total' => 2700000,
                'order_date' => Carbon::parse('22-06-2022'),
                'delivery_date' =>null,
                'note' => '',
                'status' => 'Processed',
            ],
            [
                'id' => '10',
                'address_id' => '6',
                'total' => 2800000,
                'order_date' => Carbon::parse('24-06-2022'),
                'delivery_date' => null,
                'note' => '',
                'status' => 'Processed',
            ],
            [
                'id' => '11',
                'address_id' => '8',
                'total' => 156000,
                'order_date' => Carbon::parse('26-06-2022'),
                'delivery_date' => null,
                'note' => '',
                'status' => 'Waiting Confirmation',
            ],
            [
                'id' => '12',
                'address_id' => '11',
                'total' => 3816000,
                'order_date' => Carbon::parse('26-06-2022'),
                'delivery_date' => null,
                'note' => '',
                'status' => 'Waiting Confirmation',
            ],
        ];

        Order::insert($datas);
    }
}
