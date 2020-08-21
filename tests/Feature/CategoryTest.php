<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    public function testCategoryPageFound()
    {
        $category = Category::first();

        $response = $this->get('/'.$category->slug);

        $response->assertStatus(200);
    }

    public function testCategoryPageNotFound()
    {
        $response = $this->get('/404');

        $response->assertStatus(404);
    }
}
