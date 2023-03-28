<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('deleted_at', '=', null);
        if($request->has('category')){
            $category_id = SubCategory::where('name', '=', $request->category)->first()->sub_category_id;
            $products = $products->where('sub_category_id', '=', $category_id );
        }
        if($request->has('search')){
            $products = $products->where('title', 'like', "%{$request->get('search')}%");
        }

        $products = $products->paginate(20);
        $parentCategories = Category::where('deleted_at', '=', null)->get();
        return view('site.cart.product-list', ['products' => $products, 'parentCategories' => $parentCategories]);
    }

    public function viewProduct($id)
    {
        $Product = Product::where('deleted_at', '=', null)->where('product_id', $id)->first();
        $suggestions = Product::where('deleted_at', '=', null)->where('sub_category_id', $Product->sub_category_id)->get();
        $parentCategories = Category::where('deleted_at', '=', null)->get();
        return view('site.cart.single-product', ['product' => $Product, 'suggestions' => $suggestions, 'parentCategories' => $parentCategories]);
    }
}
