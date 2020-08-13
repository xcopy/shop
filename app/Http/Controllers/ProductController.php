<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index() {
        return view('product.index', [
            'products' => Product::all(),
            'colors' => ['royalblue', 'limegreen', 'salmon', 'orange', 'purple', 'darkslategray']
        ]);
    }
}
