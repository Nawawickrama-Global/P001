<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('deleted_at', '=', null);
        if($request->has('category')){
            $category_id = Category::where('name', '=', $request->category)->first()->category_id;
            $products = $products->where('category_id', '=', $category_id );
        }

        $products = $products->paginate(20);
        return view('site.cart.product-list', ['products' => $products]);
    }

    public function viewProduct($id)
    {
        $Product = Product::where('deleted_at', '=', null)->where('product_id', $id)->first();
        $suggestions = Product::where('deleted_at', '=', null)->where('category_id', $Product->category_id)->get();
        return view('site.cart.single-product', ['product' => $Product, 'suggestions' => $suggestions]);
    }
}
