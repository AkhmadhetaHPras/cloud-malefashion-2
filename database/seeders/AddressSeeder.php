<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
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
                'user_id' => '1',
                'name' => 'Yukina Sato',
                'telp' => '085678154235',
                'street_address' => '15 Mawar Street',
                'postal_code' => '65132',
                'city' => 'Malang',
                'province' => 'East Java',
            ],
            [
                'user_id' => '2',
                'name' => 'Bram Widantyo',
                'telp' => '087898765243',
                'street_address' => '1 Ngadiluwih Street',
                'postal_code' => '66191',
                'city' => 'Blitar',
                'province' => 'East Java',
            ],
            [
                'user_id' => '3',
                'name' => 'Rosi Latansa Salsabela',
                'telp' => '084561782912',
                'street_address' => '20 Mawar Street',
                'postal_code' => '64181',
                'city' => 'Kediri',
                'province' => 'East Java',
            ],
            [
                'user_id' => '4',
                'name' => 'Akhmadheta Hafid Prasetyawan',
                'telp' => '087186218126',
                'street_address' => '8 Melati Street',
                'postal_code' => '66194',
                'city' => 'Blitar',
                'province' => 'East Java',
            ],
            [
                'user_id' => '5',
                'name' => 'Dionisius Yudha',
                'telp' => '081628162751',
                'street_address' => '13 Sangar Street',
                'postal_code' => '62280',
                'city' => 'Lamongan',
                'province' => 'East Java',
            ],
            [
                'user_id' => '6',
                'name' => 'Ibrahim Wisnuarta',
                'telp' => '084267152751',
                'street_address' => '17 Gathot Subroto Street',
                'postal_code' => '60222',
                'city' => 'Surabaya',
                'province' => 'East Java',
            ],
            [
                'user_id' => '7',
                'name' => 'Huda Krisna',
                'telp' => '081297612391',
                'street_address' => '5A Warujayeng Street',
                'postal_code' => '40281',
                'city' => 'Bandung',
                'province' => 'West Java',
            ],
            [
                'user_id' => '8',
                'name' => 'Paundra Wibatsu',
                'telp' => '086254371256',
                'street_address' => '18B Putungan Street',
                'postal_code' => '13330',
                'city' => 'Jakarta',
                'province' => 'DKI Jakarta',
            ],
            [
                'user_id' => '9',
                'name' => 'Izunada Alfan',
                'telp' => '081286562888',
                'street_address' => '22 Setono Street',
                'postal_code' => '61263',
                'city' => 'Sidoarjo',
                'province' => 'East Java',
            ],
            [
                'user_id' => '9',
                'name' => 'Saiful Darma',
                'telp' => '087286186189',
                'street_address' => '12 Setono Street',
                'postal_code' => '61263',
                'city' => 'Sidoarjo',
                'province' => 'East Java',
            ],
            [
                'user_id' => '10',
                'name' => 'Novianda Riani',
                'telp' => '081267852772',
                'street_address' => '11C Imam Bonjol Street',
                'postal_code' => '66183',
                'city' => 'Blitar',
                'province' => 'East Java',
            ],
        ];

        Address::insert($datas);
    }
}
