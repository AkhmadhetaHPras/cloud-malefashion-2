<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'brand_id' => '1',
                'category_id' => '1',
                'product_name' => 'Bucket Hat',
                'slug' => 'bucket-hat',
                'yt_link' => 'http://www.youtube.com/watch?v=BJJxOiQdSXg',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa molestiae doloremque eius tempore debitis maiores voluptate quasi accusantium commodi laboriosam?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>A FUZZY  FAUX FUR BUCKET HAT WITH A METALLIC-GOLD SIGNOFF.The bucket hat has been making an impression since the 90s  and the style isnt going anywhere. This adidas version makes that extra clear in faux fur for a statement look. </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>100% polyester fur</p></div></div>',
                'short_desc' => 'The bucket hat has been making an impression since the 90s, and the style isnt going anywhere. This adidas version makes that extra clear in faux fur for a statement look.',
                'price' => 279500,
                'tags' => 'Unisex, Lifestyle',
                'rating' => 0,
                'thumbnail' => 'img/product/bucket-hat_thumbnail.jpg',
                'display1' => 'img/product/bucket-hat_display1.png',
                'display2' => 'img/product/bucket-hat_display2.png',
                'display3' => 'img/product/bucket-hat_display3.png',
                'display4' => 'img/product/bucket-hat_display4.png',
            ],
            [
                'id' => '2',
                'brand_id' => '1',
                'category_id' => '1',
                'product_name' => 'Manchester United Bottle 750 Ml',
                'slug' => 'manchester-united-bottle-750-ml',
                'yt_link' => 'http://www.youtube.com/watch?v=js8Qg-wh9Fc',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, assumenda. Impedit corporis explicabo cumque, accusantium rerum esse id laudantium a vitae eum laborum nam rem ad doloremque ducimus distinctio repudiandae reprehenderit eos ipsa ea hic veniam? Nulla sunt accusantium quae quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>MANCHESTER UNITED BOTTLE 750 ML. A BOTTLE THAT SHOWS YOU STAND WITH MAN UNITED. Stay hydrated when youre working out like your heroes from Old Trafford. This adidas football Manchester United Bottle combines an easy grip with handy volume measurements on the side. Dishwasher-safe  its also BPA-free so you only get the good stuff when you take a gulp.</p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Volume: 750 mL<br>Screw top with pull spout<br>BPA-free<br>100% polyethylene injection-moulded<br>Printed measurements on side</p></div></div>',
                'short_desc' => 'Stay hydrated when youre working out like your heroes from Old Trafford. This adidas football Manchester United Bottle combines an easy grip with handy volume measurements on the side. Dishwasher-safe  its also BPA-free  so you only get the good stuff when you take a gulp.',
                'price' => 130000,
                'tags' => 'Unisex, Football',
                'rating' => 4,
                'thumbnail' => 'img/product/manchester-united-bottle-750-ml_thumbnail.jpg',
                'display1' => 'img/product/manchester-united-bottle-750-ml_display1.png',
                'display2' => 'img/product/manchester-united-bottle-750-ml_display2.png',
                'display3' => 'img/product/manchester-united-bottle-750-ml_display3.png',
                'display4' => 'img/product/manchester-united-bottle-750-ml_display4.png',
            ],
            [
                'id' => '3',
                'brand_id' => '1',
                'category_id' => '1',
                'product_name' => 'Face Mask - Nonmedis',
                'slug' => 'face-mask-nonmedis',
                'yt_link' => 'http://www.youtube.com/watch?v=9FQjoIoPTVw',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, assumenda. Impedit corporis explicabo cumque, accusantium rerum esse id laudantium a vitae eum laborum nam rem ad doloremque ducimus distinctio repudiandae reprehenderit eos ipsa ea hic veniam? Nulla sunt accusantium quae quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>FACE COVER - NOT FOR MEDICAL USE HELP PROTECT YOUR COMMUNITY IN THIS FACE COVERING.Through the hard times and the good  we pull together as a community. Be a team player and help stop the spread in this adidas face covering. The soft  flexible fabric allows for easy breathing. Its reusable too so you can cut down on waste by tossing it in the wash</p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Main: 93% recycled polyester  7% elastane spacer<br>Not for medical use<br>Inner lining: 92% recycled polyester 8% elastane mesh<br>Product code: HC4701<br>Sizing Advice (Nosebone to Ear Measurement): 14cm - 15cm  Size M<br>Sizing Advice (Nosebone to Ear Measurement): 15cm - 16cm  Size XL<br>Sizing Advice (Nosebone to Ear Measurement): 16cm - 17cm  Size 3XL</p></div></div>',
                'short_desc' => 'Stay hydrated when youre working out like your heroes from Old Trafford. This adidas football Manchester United Bottle combines an easy grip with handy volume measurements on the side. Dishwasher-safe  its also BPA-free  so you only get the good stuff when you take a gulp.',
                'price' => 156000,
                'tags' => 'Men, Originals',
                'rating' => 4,
                'thumbnail' => 'img/product/face-mask-nonmedis_thumbnail.jpg',
                'display1' => 'img/product/face-mask-nonmedis_display1.png',
                'display2' => 'img/product/face-mask-nonmedis_display2.png',
                'display3' => 'img/product/face-mask-nonmedis_display3.png',
                'display4' => 'img/product/face-mask-nonmedis_display4.png',
            ],
            [
                'id' => '4',
                'brand_id' => '1',
                'category_id' => '1',
                'product_name' => 'Performance Bottle 750 ml',
                'slug' => 'performance-bottle-750-ml',
                'yt_link' => 'http://www.youtube.com/watch?v=iNG0qdTNkOg',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, assumenda.ad doloremque ducimus distinctio repudiandae reprehenderit eos ipsa ea hic veniam? Nulla sunt accusantium quae quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>PERFORMANCE BOTTLE 750 ML
                A BPA-FREE WATER BOTTLE THAT MAKES IT EASY TO TRACK HOW MUCH WATER YOU DRINK.
                Drinking enough water? Youll know with the adidas Performance Bottle  thanks to side volume measurements that make it easy to track your intake. Simple to hold  squeeze and fill. Just toss it in the dishwasher after every use  and its ready to go again.
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Volume: 750 mL<br>
                BPA-free squeeze water bottle<br>
                Wide opening and screw cap<br>
                100% PE injection-moulded<br>
                TPU mouth piece<br></p></div></div>',
                'short_desc' => 'Drinking enough water? Youll know with the adidas Performance Bottle  thanks to side volume measurements that make it easy to track your intake. Simple to hold  squeeze and fill. Just toss it in the dishwasher after every use  and its ready to go again.',
                'price' => 104000,
                'tags' => 'Unisex, Training',
                'rating' => 0,
                'thumbnail' => 'img/product/performance-bottle-750-ml_thumbnail.jpg',
                'display1' => 'img/product/performance-bottle-750-ml_display1.png',
                'display2' => 'img/product/performance-bottle-750-ml_display2.png',
                'display3' => 'img/product/performance-bottle-750-ml_display3.png',
                'display4' => 'img/product/performance-bottle-750-ml_display4.png',
            ],
            [
                'id' => '5',
                'brand_id' => '1',
                'category_id' => '1',
                'product_name' => 'Golf Hat Wide-Brim Sun',
                'slug' => 'golf-hat-wide-brim-sun',
                'yt_link' => 'http://www.youtube.com/watch?v=MztXakbIG9w',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, assumenda.ad doloremque ducimus distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>WIDE-BRIM GOLF SUN HAT A SUN HAT FOR THE LINKS  MADE WITH RECYCLED CONTENT. Throw some shade on your game. This adidas golf hat has a wide brim to keep the suns rays off your face and neck while moisture-absorbing AEROREADY keeps you dry. Adjust the drawcord when a breeze comes up  and swing for the pin. Made with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.</p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>One size fits most<br>
                Moisture-absorbing AEROREADY<br>
                Drawcord with toggle<br>
                100% recycled polyester dobby<br>
                Wide all-around brim<br>
                </p></div></div>',
                'short_desc' => 'Throw some shade on your game. This adidas golf hat has a wide brim to keep the suns rays off your face and neck while moisture-absorbing AEROREADY keeps you dry. Adjust the drawcord when a breeze comes up  and swing for the pin. Made with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.',
                'price' => 630000,
                'tags' => 'Men, Golf',
                'rating' => 0,
                'thumbnail' => 'img/product/golf-hat-wide-brim-sun_thumbnail.jpg',
                'display1' => 'img/product/golf-hat-wide-brim-sun_display1.png',
                'display2' => 'img/product/golf-hat-wide-brim-sun_display2.png',
                'display3' => 'img/product/golf-hat-wide-brim-sun_display3.png',
                'display4' => 'img/product/golf-hat-wide-brim-sun_display4.png',
            ],
            [
                'id' => '6',
                'brand_id' => '2',
                'category_id' => '4',
                'product_name' => 'Lite Racer Adapt 4.0 Shoes',
                'slug' => 'lite-racer-adapt-4.0-shoes',
                'yt_link' => 'http://www.youtube.com/watch?v=RY8A5fxwFLE',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>LITE RACER ADAPT 4.0 SHOES
                SLIP-ON SHOES WITH RUNNING STYLE.
                Casual style thats easy to get on and off. Youll want to wear these adidas shoes every day of the week. Inspired by classic running looks  these shoes have a bold adidas graphic on the midfoot band. A mesh upper adds breathability  and the Cloudfoam midsole is ultra comfortable.This product is made with Primegreen  a series of high-performance recycled materials. 50% of upper is recycled content. No virgin polyester.</p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Sock-like fit<br>
                Mesh upper<br>
                TPU heel counter<br>
                Product code: H04296<br>
                Slip-on construction with elastic strap<br>
                Textile lining<br>
                Cloudfoam midsole<br>
                </p></div></div>',
                'short_desc' => 'Casual style thats easy to get on and off. Youll want to wear these adidas shoes every day of the week. Inspired by classic running looks  these shoes have a bold adidas graphic on the midfoot band. A mesh upper adds breathability  and the Cloudfoam midsole is ultra comfortable.This product is made with Primegreen  a series of high-performance recycled materials. 50% of upper is recycled content. No virgin polyester.',
                'price' => 1200000,
                'tags' => 'Men',
                'rating' => 4,
                'thumbnail' => 'img/product/lite-racer-adapt-4.0-shoes_thumbnail.jpg',
                'display1' => 'img/product/lite-racer-adapt-4.0-shoes_display1.png',
                'display2' => 'img/product/lite-racer-adapt-4.0-shoes_display2.png',
                'display3' => 'img/product/lite-racer-adapt-4.0-shoes_display3.png',
                'display4' => 'img/product/lite-racer-adapt-4.0-shoes_display4.png',
            ],
            [
                'id' => '7',
                'brand_id' => '2',
                'category_id' => '4',
                'product_name' => 'Questar Flow Nxt Shoes',
                'slug' => 'questar-flow-nxt-shoes',
                'yt_link' => 'http://www.youtube.com/watch?v=Tp6Blo_8QOU',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi?</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>QUESTAR FLOW NXT SHOES
                SNEAKERS FIT TO BE YOUR DAILY DRIVERS.
                With clean design and a comfort-forward build  these adidas shoes slide right into your daily rotation. Theyre lightweight and breathable  thanks to the knit mesh upper. The Cloudfoam sole feels like walking on fluffy clouds all day. A moulded heel counter provides stability.
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Regular fit<br>
                Knit mesh upper<br>
                Textile lining<br>
                Lace closure<br>
                Light breathable feel<br>
                Moulded heel counter<br>
                </p></div></div>',
                'short_desc' => 'With clean design and a comfort-forward build  these adidas shoes slide right into your daily rotation. Theyre lightweight and breathable  thanks to the knit mesh upper. The Cloudfoam sole feels like walking on fluffy clouds all day. A moulded heel counter provides stability.',
                'price' => 1200000,
                'tags' => 'Men',
                'rating' => 0,
                'thumbnail' => 'img/product/questar-flow-nxt-shoes_thumbnail.jpg',
                'display1' => 'img/product/questar-flow-nxt-shoes_display1.png',
                'display2' => 'img/product/questar-flow-nxt-shoes_display2.png',
                'display3' => 'img/product/questar-flow-nxt-shoes_display3.png',
                'display4' => 'img/product/questar-flow-nxt-shoes_display4.png',
            ],
            [
                'id' => '8',
                'brand_id' => '2',
                'category_id' => '4',
                'product_name' => 'Humanrace Sichona Shoes',
                'slug' => 'humanrace-sichona-shoes',
                'yt_link' => 'http://www.youtube.com/watch?v=el4r0LSxM5I',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>HUMANRACE SICHONA SHOES
                A BOLD NEW SILHOUETTE FROM ADIDAS X PHARRELL WILLIAMS.
                Everything Pharrell touches is an exploration and celebration of humanity. In his latest collaboration with adidas  the Humanrace Sichona Shoes are a canvas for self-expression. They have an ultraflexible and seamless adidas Primeknit upper with Futurenatural  which allows you to move freely in any direction in comfort. Distinctive knit patterns decorate the toe  heel and sides and a "Humanrace" signoff completes the look.</p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Lace closure<br>
                Textile lining<br>
                Synthetic outsole<br>
                adidas Primeknit textile upper<br>
                Polyurethane midsole
                </p></div></div>',
                'short_desc' => 'Everything Pharrell touches is an exploration and celebration of humanity. In his latest collaboration with adidas  the Humanrace Sichona Shoes are a canvas for self-expression. They have an ultraflexible and seamless adidas Primeknit upper with Futurenatural  which allows you to move freely in any direction in comfort. Distinctive knit patterns decorate the toe  heel and sides and a "Humanrace" signoff completes the look.',
                'price' => 2800000,
                'tags' => 'Unisex, Lifestyle',
                'rating' => 0,
                'thumbnail' => 'img/product/humanrace-sichona-shoes_thumbnail.jpg',
                'display1' => 'img/product/humanrace-sichona-shoes_display1.png',
                'display2' => 'img/product/humanrace-sichona-shoes_display2.png',
                'display3' => 'img/product/humanrace-sichona-shoes_display3.png',
                'display4' => 'img/product/humanrace-sichona-shoes_display4.png',
            ],
            [
                'id' => '9',
                'brand_id' => '2',
                'category_id' => '4',
                'product_name' => 'Predator Edge.3 Laceless Firm Ground',
                'slug' => 'predator-edge.3-laceless-firm-ground',
                'yt_link' => 'http://www.youtube.com/watch?v=h39gWcsYbas',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>PREDATOR EDGE.3 LACELESS FIRM GROUND
                LACELESS  CONTROL-ENHANCING BOOTS MADE IN PART WITH RECYCLED CONTENT.
                Swerve. Power. Control. When you have the edge  the pitch is full of possibilities. See the beautiful game from a brand-new angle in adidas Predator. These laceless football boots help you dominate the ball with a Control Zone upper containing strategically placed areas of grip-enhancing print. The striking faceted outsole keeps you in charge on firm ground. Made in part with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Regular fit<br>
                Control Zone textured upper<br>
                TPU firm ground outsole<br>
                Laceless construction<br>
                Supportive mid-cut collar
                </p></div></div>',
                'short_desc' => 'Swerve. Power. Control. When you have the edge  the pitch is full of possibilities. See the beautiful game from a brand-new angle in adidas Predator. These laceless football boots help you dominate the ball with a Control Zone upper containing strategically placed areas of grip-enhancing print. The striking faceted outsole keeps you in charge on firm ground. Made in part with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.',
                'price' => 1120000,
                'tags' => 'Unisex, Football',
                'rating' => 0,
                'thumbnail' => 'img/product/predator-edge.3-laceless-firm-ground_thumbnail.jpg',
                'display1' => 'img/product/predator-edge.3-laceless-firm-ground_display1.png',
                'display2' => 'img/product/predator-edge.3-laceless-firm-ground_display2.png',
                'display3' => 'img/product/predator-edge.3-laceless-firm-ground_display3.png',
                'display4' => 'img/product/predator-edge.3-laceless-firm-ground_display4.png',
            ],
            [
                'id' => '10',
                'brand_id' => '2',
                'category_id' => '4',
                'product_name' => 'Rebelcross Spikeless Golf Shoes',
                'slug' => 'rebelcross-spikeless-golf-shoes',
                'yt_link' => 'http://www.youtube.com/watch?v=3vtf26aHZdg',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>REBELCROSS SPIKELESS GOLF SHOES
                SPIKELESS GOLF SHOES FOR PERFORMANCE AND VERSATILITY  MADE IN PART WITH RECYCLED CONTENT.
                Call these adidas golf shoes the ultimate crossover. Taking performance and versatility to a whole new level  they feature a BOOST and Lightstrike hybrid midsole that delivers lightweight cushioning and energy return through 18 holes and beyond. The Gripmore outsole offers maximum traction on the course while the Adiwear rubber provides spikeless comfort for post-round wear. Welcome to your new favourite shoe.                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Regular fit<br>
                Mixture of full grain leather and microfibre upper<br>
                Heel support clipLace closure<br>
                OrthoLite® sockliner<br>
                BOOST midsole with Lightstrike cushioning
                </p></div></div>',
                'short_desc' => 'Call these adidas golf shoes the ultimate crossover. Taking performance and versatility to a whole new level  they feature a BOOST and Lightstrike hybrid midsole that delivers lightweight cushioning and energy return through 18 holes and beyond. The Gripmore outsole offers maximum traction on the course while the Adiwear rubber provides spikeless comfort for post-round wear. Welcome to your new favourite shoe.',
                'price' => 2700000,
                'tags' => 'Men, Golf',
                'rating' => 0,
                'thumbnail' => 'img/product/rebelcross-spikeless-golf-shoes_thumbnail.jpg',
                'display1' => 'img/product/rebelcross-spikeless-golf-shoes_display1.png',
                'display2' => 'img/product/rebelcross-spikeless-golf-shoes_display2.png',
                'display3' => 'img/product/rebelcross-spikeless-golf-shoes_display3.png',
                'display4' => 'img/product/rebelcross-spikeless-golf-shoes_display4.png',
            ],
            [
                'id' => '11',
                'brand_id' => '1',
                'category_id' => '2',
                'product_name' => 'Essentials Logo Duffel Bag Extra Small',
                'slug' => 'essentials-logo-duffel-bag-extra-small',
                'yt_link' => 'http://www.youtube.com/watch?v=nGVd0HGTDVo',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>ESSENTIALS LOGO DUFFEL BAG EXTRA SMALL
                A STYLISH DUFFEL SIZED TO FIT YOUR WORKOUT NECESSITIES.
                From socks to shoes  shirt to shorts  store your workout basics in this sleek adidas duffel bag. Stash your small stuff in the zip pocket so you never have to dig around in sweaty gym clothes to find your keys. The easy-to-clean  coated material protects it from dirt and grime. This product is made with Primegreen  a series of high-performance recycled materials.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Volume: 25 litres<br>
                Adjustable padded shoulder strap<br>
                Inner pockets100% recycled polyester plain weave<br>
                Mesh side pocket<br>
                Dual carry handles with padded grip
                </p></div></div>',
                'short_desc' => 'From socks to shoes  shirt to shorts  store your workout basics in this sleek adidas duffel bag. Stash your small stuff in the zip pocket so you never have to dig around in sweaty gym clothes to find your keys. The easy-to-clean  coated material protects it from dirt and grime. This product is made with Primegreen  a series of high-performance recycled materials.',
                'price' => 344000,
                'tags' => 'Unisex, Training',
                'rating' => 0,
                'thumbnail' => 'img/product/essentials-logo-duffel-bag-extra-small_thumbnail.jpg',
                'display1' => 'img/product/essentials-logo-duffel-bag-extra-small_display1.png',
                'display2' => 'img/product/essentials-logo-duffel-bag-extra-small_display2.png',
                'display3' => 'img/product/essentials-logo-duffel-bag-extra-small_display3.png',
                'display4' => 'img/product/essentials-logo-duffel-bag-extra-small_display4.png',
            ],
            [
                'id' => '12',
                'brand_id' => '1',
                'category_id' => '2',
                'product_name' => 'Adicolor Classic Festival Bag',
                'slug' => 'adicolor-classic-festival-bag',
                'yt_link' => 'http://www.youtube.com/watch?v=wPnUz9TCzRE',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>ADICOLOR CLASSIC FESTIVAL BAG
                A VERSATILE  CONVENIENT FESTIVAL BAG MADE IN PART WITH RECYCLED MATERIALS.
                Get your groove on without worrying about your essentials. Zip and go hands-free with this adidas festival bag. The webbing strap easily clips on and off so you can carry it as a clutch or a crossbody bag. OG Trefoil logos keep it classic. Made with a series of recycled materials  and at least 60% recycled content  this product represents just one of our solutions to help end plastic waste.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p> Dimensions: 2.5 cm x 12 cm x 17 cm<br>
                Lining: 100% recycled polyester plain weave<br>
                Detachable adjustable shoulder strap<br>
                Body: 100% recycled polyester plain weave<br>
                Front zip pocket
                </p></div></div>',
                'short_desc' => 'Get your groove on without worrying about your essentials. Zip and go hands-free with this adidas festival bag. The webbing strap easily clips on and off so you can carry it as a clutch or a crossbody bag. OG Trefoil logos keep it classic. Made with a series of recycled materials and at least 60% recycled content this product represents just one of our solutions to help end plastic waste.',
                'price' => 264000,
                'tags' => 'Unisex, Lifestyle',
                'rating' => 4,
                'thumbnail' => 'img/product/adicolor-classic-festival-bag_thumbnail.jpg',
                'display1' => 'img/product/adicolor-classic-festival-bag_display1.png',
                'display2' => 'img/product/adicolor-classic-festival-bag_display2.png',
                'display3' => 'img/product/adicolor-classic-festival-bag_display3.png',
                'display4' => 'img/product/adicolor-classic-festival-bag_display4.png',
            ],
            [
                'id' => '13',
                'brand_id' => '1',
                'category_id' => '2',
                'product_name' => 'Go-To Waist Pouch',
                'slug' => 'go-to-waist-pouch',
                'yt_link' => 'http://www.youtube.com/watch?v=Af5V1iSbz14',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>GO-TO WAIST POUCH
                A GOLF WAIST POUCH WITH ORGANISING POCKETS  MADE IN PART WITH RECYCLED CONTENT.
                Keep your small essentials close by on the course with this adidas golf waist pouch. The two-way zip ensures easy access. A front zip pocket and inner mesh compartments make it simple to organise your things so you can focus on your game. Made in part with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p> Dimensions: 12.5 cm x 38 cm x 14.5 cm<br>
                100% recycled nylon plain weave<br>
                Front zip pocket<br>
                Volume: 5 L<br>
                Two-way zip closure<br>
                Two inner mesh pockets
                </p></div></div>',
                'short_desc' => 'Keep your small essentials close by on the course with this adidas golf waist pouch. The two-way zip ensures easy access. A front zip pocket and inner mesh compartments make it simple to organise your things so you can focus on your game. Made in part with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.',
                'price' => 860000,
                'tags' => 'Men, Golf',
                'rating' => 0,
                'thumbnail' => 'img/product/go-to-waist-pouch_thumbnail.jpg',
                'display1' => 'img/product/go-to-waist-pouch_display1.png',
                'display2' => 'img/product/go-to-waist-pouch_display2.png',
                'display3' => 'img/product/go-to-waist-pouch_display3.png',
                'display4' => 'img/product/go-to-waist-pouch_display4.png',
            ],
            [
                'id' => '14',
                'brand_id' => '2',
                'category_id' => '2',
                'product_name' => 'Mesh Classic Backpack',
                'slug' => 'mesh-classic-backpack',
                'yt_link' => 'http://www.youtube.com/watch?v=nGVd0HGTDVo',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>MESH CLASSIC BACKPACK
                A BACKPACK WITH AN INNER LAPTOP POCKET  MADE IN PART WITH RECYCLED CONTENT.
                A classic go-to staple gets a material upgrade in this adidas backpack. Mesh on the front zip pocket adds a pop of polished  breathable style. A big adidas Badge of Sport out front stamps the look with iconic sporty cred. Made in part with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Dimensions: 42 cm x 31 cm x 16.5 cm<br>
                100% recycled polyester plain weave<br>
                Side slip-in pockets with bungee closures<br>
                Volume: 21.25 L<br>
                Front zip pockets<br>
                Inner mesh zip pocket
                </p></div></div>',
                'short_desc' => 'A classic go-to staple gets a material upgrade in this adidas backpack. Mesh on the front zip pocket adds a pop of polished  breathable style. A big adidas Badge of Sport out front stamps the look with iconic sporty cred. Made in part with recycled content generated from production waste  e.g. cutting scraps  and post-consumer household waste to avoid the larger environmental impact of producing virgin content.',
                'price' => 640000,
                'tags' => 'Unisex, Training',
                'rating' => 0,
                'thumbnail' => 'img/product/mesh-classic-backpack_thumbnail.jpg',
                'display1' => 'img/product/mesh-classic-backpack_display1.png',
                'display2' => 'img/product/mesh-classic-backpack_display2.png',
                'display3' => 'img/product/mesh-classic-backpack_display3.png',
                'display4' => 'img/product/mesh-classic-backpack_display4.png',
            ],
            [
                'id' => '15',
                'brand_id' => '2',
                'category_id' => '2',
                'product_name' => 'Adidas Adventure Backpack Small',
                'slug' => 'adidas-adventure-backpack-small',
                'yt_link' => 'http://www.youtube.com/watch?v=u2g98Zd3K7Y',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>ADIDAS ADVENTURE BACKPACK SMALL
                A COMFY BACKPACK WITH A THROWBACK &#039;90S LOOK.
                Small backpack. Big adventure vibes. No matter where you plan to explore next  youre ready to do it in style with this adidas backpack. Inspired by archival outdoor gear  its made of durable ripstop fabric with multiple compartments for your essentials. Adventure here you come. This product is made with recycled content as part of our ambition to end plastic waste.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Dimensions: 18 cm x 26 cm x 46 cm<br>
                Shell: 100% recycled polyester ripstop<br>
                Padding: 100% polyethylene foam<br>
                Front Zip pocket<br>
                Volume: 23.25 L<br>
                Lining: 100% recycled polyester plain weave<br>
                Zip main compartment
                </p></div></div>',
                'short_desc' => 'Small backpack. Big adventure vibes. No matter where you plan to explore next  youre ready to do it in style with this adidas backpack. Inspired by archival outdoor gear  its made of durable ripstop fabric with multiple compartments for your essentials. Adventure here you come. This product is made with recycled content as part of our ambition to end plastic waste.',
                'price' => 487500,
                'tags' => 'Unisex, Lifestye',
                'rating' => 0,
                'thumbnail' => 'img/product/adidas-adventure-backpack-small_thumbnail.jpg',
                'display1' => 'img/product/adidas-adventure-backpack-small_display1.png',
                'display2' => 'img/product/adidas-adventure-backpack-small_display2.png',
                'display3' => 'img/product/adidas-adventure-backpack-small_display3.png',
                'display4' => 'img/product/adidas-adventure-backpack-small_display4.png',
            ],
            [
                'id' => '16',
                'brand_id' => '4',
                'category_id' => '3',
                'product_name' => 'Statement Heat.Rdy V-Neck Short Sleeve Shirt',
                'slug' => 'statement-heat.rdy-v-neck-short-sleeve-shirt',
                'yt_link' => 'http://www.youtube.com/watch?v=PqxtwrUDDlA',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>STATEMENT HEAT.RDY V-NECK SHORT SLEEVE SHIRT
                A V-NECK GOLF POLO SHIRT MADE WITH PARLEY OCEAN PLASTIC.
                Make a statement on the course. This adidas golf polo shirt is made with HEAT.RDY to keep you going in hot conditions. The doubleknit build gives it durable comfort. The V-neck design and allover graphic level up your links style.This garment is made with a yarn which contains 50% Parley Ocean Plastic — reimagined plastic waste  intercepted on remote islands  beaches  coastal communities and shorelines  preventing it from polluting our ocean.?This garment contains at least 40% recycled content in total.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Regular fit<br>
                100% recycled polyester doubleknit<br>
                HEAT.RDY<br>
                V-neck<br>
                Allover graphic
                </p></div></div>',
                'short_desc' => 'Make a statement on the course. This adidas golf polo shirt is made with HEAT.RDY to keep you going in hot conditions. The doubleknit build gives it durable comfort. The V-neck design and allover graphic level up your links style.This garment is made with a yarn which contains 50% Parley Ocean Plastic — reimagined plastic waste  intercepted on remote islands  beaches  coastal communities and shorelines  preventing it from polluting our ocean.?This garment contains at least 40% recycled content in total.',
                'price' => 1400000,
                'tags' => 'Men, Golf',
                'rating' => 0,
                'thumbnail' => 'img/product/statement-heat.rdy-v-neck-short-sleeve-shirt_thumbnail.jpg',
                'display1' => 'img/product/statement-heat.rdy-v-neck-short-sleeve-shirt_display1.png',
                'display2' => 'img/product/statement-heat.rdy-v-neck-short-sleeve-shirt_display2.png',
                'display3' => 'img/product/statement-heat.rdy-v-neck-short-sleeve-shirt_display3.png',
                'display4' => 'img/product/statement-heat.rdy-v-neck-short-sleeve-shirt_display4.png',
            ],
            [
                'id' => '17',
                'brand_id' => '4',
                'category_id' => '3',
                'product_name' => 'Performance Primegreen Polo Shirt',
                'slug' => 'performance-primegreen-polo-shirt',
                'yt_link' => 'http://www.youtube.com/watch?v=V_hI-red4xU',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>PERFORMANCE PRIMEGREEN POLO SHIRT
                A GOLF POLO SHIRT MADE FOR COMFORT AND STYLE.
                Whether youre headed to the driving range to work on your form or hitting the links for a round of 18  its important to feel comfortable. Keep your look classic in this adidas golf polo shirt. The stretchy  distraction-free fit ensures you can rotate through every swing of the club with confidence. This product is made with Primegreen  a series of high-performance recycled materials.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Regular fit<br>
                100% recycled polyester piqué<br>
                Three-button polo collar<br>
                Stretchy soft and smooth fabric
                </p></div></div>',
                'short_desc' => 'Whether youre headed to the driving range to work on your form or hitting the links for a round of 18  its important to feel comfortable. Keep your look classic in this adidas golf polo shirt. The stretchy  distraction-free fit ensures you can rotate through every swing of the club with confidence. This product is made with Primegreen  a series of high-performance recycled materials.',
                'price' => 750000,
                'tags' => 'Men, Golf',
                'rating' => 0,
                'thumbnail' => 'img/product/performance-primegreen-polo-shirt_thumbnail.jpg',
                'display1' => 'img/product/performance-primegreen-polo-shirt_display1.png',
                'display2' => 'img/product/performance-primegreen-polo-shirt_display2.png',
                'display3' => 'img/product/performance-primegreen-polo-shirt_display3.png',
                'display4' => 'img/product/performance-primegreen-polo-shirt_display4.png',
            ],
            [
                'id' => '18',
                'brand_id' => '3',
                'category_id' => '3',
                'product_name' => 'Play Green Spray-Dyed Polo Shirt',
                'slug' => 'play-green-spray-dyed-polo-shirt',
                'yt_link' => 'http://www.youtube.com/watch?v=2LCNqRj6tJU',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>PLAY GREEN SPRAY-DYED POLO SHIRT
                A GOLF POLO SHIRT WITH STRETCH  MADE IN PART WITH RECYCLED MATERIALS.
                Bring laid-back style to your game in this adidas golf polo shirt. The seersucker fabric shows off an all allover spray-dye design for eye-catching style on and off the course. Built-in stretch ensures freedom of movement as you play through your round. Embroidered details on the sleeve complete the look.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Regular fit<br>
                60% recycled polyester  30% recycled nylon  10% elastane seersucker<br>
                Golf embroidery on sleeve<br>
                Three-button polo collar<br>
                Allover spray dye
                </p></div></div>',
                'short_desc' => 'Bring laid-back style to your game in this adidas golf polo shirt. The seersucker fabric shows off an all allover spray-dye design for eye-catching style on and off the course. Built-in stretch ensures freedom of movement as you play through your round. Embroidered details on the sleeve complete the look.',
                'price' => 1400000,
                'tags' => 'Men, Golf',
                'rating' => 0,
                'thumbnail' => 'img/product/play-green-spray-dyed-polo-shirt_thumbnail.jpg',
                'display1' => 'img/product/play-green-spray-dyed-polo-shirt_display1.png',
                'display2' => 'img/product/play-green-spray-dyed-polo-shirt_display2.png',
                'display3' => 'img/product/play-green-spray-dyed-polo-shirt_display3.png',
                'display4' => 'img/product/play-green-spray-dyed-polo-shirt_display4.png',
            ],
            [
                'id' => '19',
                'brand_id' => '3',
                'category_id' => '3',
                'product_name' => 'Adicross Caddie T-Shirt',
                'slug' => 'adicross-caddie-t-shirt',
                'yt_link' => 'http://www.youtube.com/watch?v=vVO9QDIomGE',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>ADICROSS CADDIE T-SHIRT
                A COMFY GOLF T-SHIRT THAT SHOWS YOUR LOVE FOR THE GAME.
                Give a shoutout to your favourite caddie. This adidas golf t-shirt is made of single jersey cotton for a super-soft feel. Head to the range in comfort  and nail your swing. Our cotton products support more sustainable cotton farming.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Crewneck<br>
                Soft feel<br>
                100% cotton single jersey<br>
                Golf graphic
                </p></div></div>',
                'short_desc' => ' Give a shoutout to your favourite caddie. This adidas golf t-shirt is made of single jersey cotton for a super-soft feel. Head to the range in comfort  and nail your swing. Our cotton products support more sustainable cotton farming.',
                'price' => 570000,
                'tags' => 'Men, Golf',
                'rating' => 0,
                'thumbnail' => 'img/product/adicross-caddie-t-shirt_thumbnail.jpg',
                'display1' => 'img/product/adicross-caddie-t-shirt_display1.png',
                'display2' => 'img/product/adicross-caddie-t-shirt_display2.png',
                'display3' => 'img/product/adicross-caddie-t-shirt_display3.png',
                'display4' => 'img/product/adicross-caddie-t-shirt_display4.png',
            ],
            [
                'id' => '20',
                'brand_id' => '4',
                'category_id' => '3',
                'product_name' => 'Donovan Mitchell X Xbox Tee',
                'slug' => 'donovan-mitchell-x-xbox-tee',
                'yt_link' => 'http://www.youtube.com/watch?v=BgASX6-RRH0',
                'description' => '<div class="product__details__tab__content"><p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit aliquam tempora repudiandae reprehenderit eos quas odio! nobis saepe sequi? distinctio repudiandae reprehenderit eos quas odio! Ducimus repudiandae reprehenderit eos quas odio!magnam, fugit distinctio repudiandae reprehenderit eos quas odio! Ducimus magnam, fugit</p><div class="product__details__tab__content__item"><h5>Products Infomation</h5><p>DONOVAN MITCHELL X XBOX TEE
                A B-BALL T-SHIRT FROM DONOVAN MITCHELL AND XBOX.
                Basketball and video games have been joined at the hip ever since teammates frequented arcades after practice. This adidas t-shirt is no different. It celebrates Donovan Mitchells love for gaming with a screenprinted chest graphic of Spida and the Xbox logo split into the X  Y  B and A buttons on the controller.Our cotton products support more sustainable cotton farming.                                
                </p></div><div class="product__details__tab__content__item"><h5>Spesification</h5><p>Regular fit<br>
                100% cotton single jersey<br>
                Crewneck<br>
                Front graphic with Donovan Mitchell logo
                </p></div></div>',
                'short_desc' => 'Basketball and video games have been joined at the hip ever since teammates frequented arcades after practice. This adidas t-shirt is no different. It celebrates Donovan Mitchells love for gaming with a screenprinted chest graphic of Spida and the Xbox logo split into the X  Y  B and A buttons on the controller.Our cotton products support more sustainable cotton farming.',
                'price' => 480000,
                'tags' => 'Men, Basketball',
                'rating' => 0,
                'thumbnail' => 'img/product/donovan-mitchell-x-xbox-tee_thumbnail.jpg',
                'display1' => 'img/product/donovan-mitchell-x-xbox-tee_display1.png',
                'display2' => 'img/product/donovan-mitchell-x-xbox-tee_display2.png',
                'display3' => 'img/product/donovan-mitchell-x-xbox-tee_display3.png',
                'display4' => 'img/product/donovan-mitchell-x-xbox-tee_display4.png',
            ],

        ];

        Product::insert($datas);
    }
}
