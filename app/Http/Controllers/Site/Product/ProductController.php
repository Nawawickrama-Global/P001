<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('deleted_at', '=', null)->paginate(20);
        return view('site.cart.product-list', ['products' => $products]);
    }

    public function viewProduct($id)
    {
        $Product = Product::where('deleted_at', '=', null)->where('product_id', $id)->first();
        return view('site.cart.single-product', ['product' => $Product]);
    }
}
