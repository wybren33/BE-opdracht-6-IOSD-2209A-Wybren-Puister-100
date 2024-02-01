<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Allergeen;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('magazijn', 'productperallergeens')->get();

        return view('overzicht', ['products' => $products]);
    }
}
