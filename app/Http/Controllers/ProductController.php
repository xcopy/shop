<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        return view('product.index', [
            'products' => Product::all(),
            'colors' => ['royalblue', 'limegreen', 'salmon', 'orange', 'purple', 'darkslategray']
        ]);
    }

    public function show($category, $product) {
        /** @var $category Category */
        $category = Category::findBySlugOrFail($category);

        /** @var $product Product */
        $product = $category
            ->products()
            ->where('slug', $product)
            ->firstOrFail();

        return view('product.show', compact('category', 'product'));
    }
}
