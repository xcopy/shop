<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Mac', 'iPad', 'iPhone', 'Apple Watch', 'AirPods', 'iPod touch', 'Apple TV'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
