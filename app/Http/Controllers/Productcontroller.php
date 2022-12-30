<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();
        $getItem = Products::where('productCode', $request['item'])->first();
        return view('viewProduct', [
            'item' => $getItem, 
            'intent' => $user->createSetupIntent()
        ]);
    }
}
