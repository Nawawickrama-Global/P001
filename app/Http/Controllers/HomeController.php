<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::where('deleted_at', '=', null)->orderBy('product_id', 'DESC')->paginate(20);
        $categories = Category::where('deleted_at', '=', null)->get();
        $parentCategories = Category::where('deleted_at', '=', null)->get();
        $brands = Brand::where('deleted_at', '=', null)->get();
        return view('site.home.home', ['products' => $products, 'categories' => $categories, 'brands' => $brands, 'parentCategories' => $parentCategories]);
    }
}
