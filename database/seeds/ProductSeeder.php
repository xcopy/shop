<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $src = [
            [
                [
                    'name' => 'MacBook Air',
                    'title' => 'Light. Speed.',
                    'price' => 999
                ],
                [
                    'name' => 'MacBook Pro 13"',
                    'title' => 'Power. Moves.',
                    'price' => 1299
                ],
                [
                    'name' => 'MacBook Pro 16"',
                    'title' => 'The best for the brightest.',
                    'price' => 2399
                ],
                [
                    'name' => 'iMac',
                    'title' => 'The all-in-one for all.',
                    'price' => 1099
                ],
                [
                    'name' => 'iMac Pro',
                    'title' => 'Power to the pro.',
                    'price' => 4999
                ],
                [
                    'name' => 'Mac Pro',
                    'title' => 'Power to change everything.',
                    'price' => 5999
                ],
                [
                    'name' => 'Mac mini',
                    'title' => 'Re-engineered in no small way.',
                    'price' => 1099
                ],
                [
                    'name' => 'Pro Display XDR',
                    'title' => 'Believing is seeing.',
                    'price' => 4999
                ]
            ],
            [
                [
                    'name' => 'iPad Pro',
                    'title' => 'Your next computer is not a computer.',
                    'price' => 999
                ],
                [
                    'name' => 'iPad Air',
                    'title' => 'Power isn’t just for the pros.',
                    'price' => 499
                ],
                [
                    'name' => 'iPad',
                    'title' => 'Like a computer. Unlike any computer.',
                    'price' => 459
                ],
                [
                    'name' => 'iPad mini',
                    'title' => 'Mini just got mightier.',
                    'price' => 399
                ],
                [
                    'name' => 'Apple Pencil',
                    'title' => 'Dream it up. Jot it down.',
                    'price' => 129
                ],
                [
                    'name' => 'Keyboards for iPad',
                    'title' => 'Keyboards that have you covered.',
                    'price' => 299
                ]
            ]
        ];

        foreach ($src as $i => $products) {
            foreach ($products as $product) {
                $attrs = [
                    'category_id' => $i + 1,
                    'description' => $faker->sentences(10, true)
                ] + $product;

                Product::create($attrs);
            }
        }
    }
}
