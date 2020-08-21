<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Category;
use App\Models\Product;

class ProductTest extends TestCase
{
    public function testProductPageFound()
    {
        /** @var $product Product */
        $product = Product::with('category')->first();

        $response = $this->get(sprintf('/%s/%s', $product->category->slug, $product->slug));

        $response->assertStatus(200);
    }

    public function testProductPageNotFound()
    {
        $category = Category::find(1);

        /** @var $product Product */
        $product = Category::find(2)->products->first();

        $response = $this->get(sprintf('/%s/%s', $category->slug, $product->slug));

        $response->assertStatus(404);
    }
}
