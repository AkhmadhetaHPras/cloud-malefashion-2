<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'role' => 'Admin',
                'username' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin123'),
                'name' => 'Yukina Sato',
                'telp' => '085678154235',
                'gender' => 'Female',
                'birth' => Carbon::parse('20-01-1990'),
                'photo' => 'img/profile/1.png',
            ],
            [
                'role' => 'Admin',
                'username' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin321'),
                'name' => 'Bram Widantyo',
                'telp' => '087898765243',
                'gender' => 'Male',
                'birth' => Carbon::parse('19-07-1994'),
                'photo' => 'img/profile/2.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'rosilatansa',
                'email' => 'rosilatansa@gmail.com',
                'password' => Hash::make('latansarosi'),
                'name' => 'Rosi Latansa Salsabela',
                'telp' => '084561782912',
                'gender' => 'Female',
                'birth' => Carbon::parse('10-09-2002'),
                'photo' => 'img/profile/3.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'hafidpras',
                'email' => 'hafid@gmail.com',
                'password' => Hash::make('hafidganteng'),
                'name' => 'Akhmadheta Hafid Prasetyawan',
                'telp' => '087186218126',
                'gender' => 'Male',
                'birth' => Carbon::parse('16-09-2009'),
                'photo' => 'img/profile/4.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'dionibra',
                'email' => 'dion@gmail.com',
                'password' => Hash::make('dions123'),
                'name' => 'Dionisius Yudha',
                'telp' => '081628162751',
                'gender' => 'Male',
                'birth' => Carbon::parse('28-02-2002'),
                'photo' => 'img/profile/5.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'ibrawisnu',
                'email' => 'wisnu@gmail.com',
                'password' => Hash::make('ibraw15nu'),
                'name' => 'Ibrahim Wisnuarta',
                'telp' => '084267152751',
                'gender' => 'Male',
                'birth' => Carbon::parse('07-08-1998'),
                'photo' => 'img/profile/6.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'huda000',
                'email' => 'huda@gmail.com',
                'password' => Hash::make('hudakh72'),
                'name' => 'Huda Krisna',
                'telp' => '081297612391',
                'gender' => 'Male',
                'birth' => Carbon::parse('17-09-2000'),
                'photo' => 'img/profile/7.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'anonimus',
                'email' => 'anonim@gmail.com',
                'password' => Hash::make('anonimus1'),
                'name' => 'Paundra Wibatsu',
                'telp' => '086254371256',
                'gender' => 'Male',
                'birth' => Carbon::parse('07-07-1997'),
                'photo' => 'img/profile/8.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'izzunada',
                'email' => 'izzun@gmail.com',
                'password' => Hash::make('zunazun'),
                'name' => 'Izunada Alfan',
                'telp' => '081286562888',
                'gender' => 'Male',
                'birth' => Carbon::parse('12-12-1990'),
                'photo' => 'img/profile/9.png',
            ],
            [
                'role' => 'Customer',
                'username' => 'novianda',
                'email' => 'noviandar@gmail.com',
                'password' => Hash::make('noviandariani'),
                'name' => 'Novianda Riani',
                'telp' => '081267852772',
                'gender' => 'Female',
                'birth' => Carbon::parse('01-01-2001'),
                'photo' => 'img/profile/10.png',
            ],
        ];

        User::insert($datas);
    }
}
