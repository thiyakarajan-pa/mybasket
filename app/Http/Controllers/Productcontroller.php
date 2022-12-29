<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Products;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::where('status', '1')->get();
        return view('index', ['products' => $products]);
    }

    public function getItem(Request $request)
    {
        $getItem = Products::where('productCode', $request['item'])->first();
        return view('viewProduct', ['item' => $getItem]);
    }
}
