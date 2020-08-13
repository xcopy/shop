<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index($category = null) {
        /** @var $category Category|null */
        $category = $category
            ? Category::findBySlugOrFail($category)
            : null;

        $query = $category
            ? $category->products()
            : Product::query();

        $products = $query->with('category')->get();

        return view('product.index', compact('category', 'products'));
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
