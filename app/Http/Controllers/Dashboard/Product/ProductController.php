<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductVariation;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct()
    {
        $categories = SubCategory::where('deleted_at', null)->get();
        $brands = Brand::where('deleted_at', null)->get();
        $attributes = Attribute::where('deleted_at', null)->get();
        return view('dashboard.product.add', ['brands' => $brands, 'categories' => $categories, 'attributes' => $attributes]);
    }

    public function viewProduct()
    {
        $products = Product::where('deleted_at', null)->get();
        return view('dashboard.product.view', ['products' => $products]);
    }

    public function addNewProduct(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'sku' => 'required|max:255',
            'sub_category_id' => 'required',
            'feature_img' => 'required|image|mimes:jpeg,png,jpg',
            'product_img' => 'required|image|mimes:jpeg,png,jpg',
            'short_description' => 'required',
            'long_description' => 'required',
            'sales_price1' => 'required',
            'stock1' => 'required',
        ]);

        if($request->hasFile('feature_img')){
            $feature_img = date('Y-m-d-H-i-s') . $request->file('feature_img')->getClientOriginalName();
            $request->file('feature_img')->storeAs('images', $feature_img, 'public');
        }

        if($request->hasFile('product_img')){
            $product_img = date('Y-m-d-H-i-s') . $request->file('product_img')->getClientOriginalName();
            $request->file('product_img')->storeAs('images', $product_img, 'public');
        }

        try {

            DB::transaction(function() use ($feature_img, $product_img, $request) {
                $product = Product::create(['feature_image' => $feature_img, 'product_image' => $product_img] + $request->all());

                for ($i=1; $i <= $request->item_count; $i++) { 
                    $size = 'size'.$i;
                    $size = $request->$size;
                    $sales_price = 'sales_price'.$i;
                    $sales_price = $request->$sales_price;
                    $stock = 'stock'.$i;
                    $stock = $request->$stock;

                    ProductVariation::create([
                        'product_id' => $product->product_id,
                        'size' => $size,
                        'sales_price' => $sales_price,
                        'stock' => $stock,
                    ]);
                }

                $attributes = Attribute::where('deleted_at', null)->get();
                foreach ($attributes as $key => $attribute) {
                    $attr = 'attr'.$attribute->attribute_id;
                    if($request->has($attr)){
                        ProductAttribute::create([
                            'product_id' => $product->product_id,
                            'attribute_id' => $attribute->attribute_id,
                        ]);
                    }
                }
            });

            toast('Product Added', 'success');
        } catch (\Throwable $th) {
            toast($th->getMessage(), 'warning');
        }

        return redirect()->back();
    }

    public function deleteProduct($id)
    {
        try {
            Product::find($id)->delete();
            toast('Product Deleted', 'success');
        } catch (\Throwable $th) {
            toast($th->getMessage(), 'warning');
        }

        return back();
    }
}
