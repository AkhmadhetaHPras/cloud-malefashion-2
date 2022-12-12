<?php

namespace Database\Seeders;

use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
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
                'user_id' => '9',
                'order_id' => '1',
                'product_id' => '3',
                'post_date' => Carbon::parse('16-05-2022'),
                'review' => 'Loved the colors and variety. Breathable, comfortable, with adjustable toggles for cinching the ear loops for a closer and more regular fit. It is a very exact fit for a narrow or medium-width face, however, so if you have a wider jaw or need to do a lot of talking while masked, this one could act a little more like a muzzle. They are wonderful and I would highly recommend, just not for wide jaws or lots of masked conversation.',
                'rating' => 4,
            ],
            [
                'id' => '2',
                'user_id' => '1',
                'order_id' => '2',
                'product_id' => '2',
                'post_date' => Carbon::parse('20-06-2022'),
                'review' => 'So far this product is GREAT, and not to mention GORGEOUS! I bought this water bottle and I am already very happy with it. It came with 3 different lids, 2 straws, and very nice packaging. Just looking at the box, I knew I was getting a high quality product so when I got everything out, I was already impressed.',
                'rating' => 4,
            ],
            [
                'id' => '3',
                'user_id' => '2',
                'order_id' => '3',
                'product_id' => '6',
                'post_date' => Carbon::parse('22-06-2022'),
                'review' => 'I work for FedEx as a courier. Purchased these shoes specifically for work and only use them when Im on the clock. I avg around 15k-20k steps per day according to my fitbit and give shoes a run for their money while working in all weather conditions, doing heavy lifting, pushing and pulling hand trucks, climbing in and out of the vehicle with non-slip steal flooring. I need lightweight and durable shoes, and for the price, these are some quality shoes. Anyone on their feet for hours at work.. hospitality, service industry, warehouse (provided you dont need safety shoes), you cant go wrong with a pair of these. I cant speak for anyone else, but Ive had nothing but good luck with all my previous under armour shoes and will continue to keep purchasing them.',
                'rating' => 4,
            ],
            [
                'id' => '4',
                'user_id' => '3',
                'order_id' => '4',
                'product_id' => '12',
                'post_date' => Carbon::parse('22-06-2022'),
                'review' => '',
                'rating' => 4,
            ],
        ];

        Review::insert($datas);
    }
}
