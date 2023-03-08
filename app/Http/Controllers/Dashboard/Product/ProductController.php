<?php

namespace App\Http\Controllers\Dashboard\Product;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductVariation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct()
    {
        $attributes = Attribute::where('deleted_at', null)->get();
        $categories = Category::where('deleted_at', null)->get();
        return view('dashboard.product.add', ['attributes' => $attributes, 'categories' => $categories]);
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
            'product_type' => 'required',
            'category_id' => 'required',
            'feature_img' => 'required|image|mimes:jpeg,png,jpg',
            'product_img' => 'required|image|mimes:jpeg,png,jpg',
            'short_description' => 'required',
            'long_description' => 'required',
            'regular_price' => 'required_if:product_type,==,single',
            'sale_price' => 'required_if:product_type,==,single',
            'stock' => 'required_if:product_type,==,single',
            'regular_price1' => 'required_if:product_type,==,variant',
            'sales_price1' => 'required_if:product_type,==,variant',
            'stock1' => 'required_if:product_type,==,variant',
            'img1' => 'required_if:product_type,==,variant',
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
            if($request->type == 'single'){
                Product::create(['feature_image' => $feature_img, 'product_image' => $product_img] + $request->all());
            }else{
                $count = $request->item_count;
                $product = Product::create(['feature_image' => $feature_img, 'product_image' => $product_img] + $request->all());

                DB::transaction(function() use ($product, $count, $request) {
                    for ($i=1; $i <= $count; $i++) { 
                        $regular_price = 'regular_price'.$i;
                        $regular_price = $request->$regular_price;
                        $sales_price = 'sales_price'.$i;
                        $sales_price = $request->$sales_price;
                        $stock = 'stock'.$i;
                        $stock = $request->$stock;
                        $color = 'color'.$i;
                        $color = $request->$color;
                        $img = 'img'.$i;
    
                        $attrCount = 'attribute'.$i.'-count';
                        $attrCount = $request->$attrCount;
    
                        if($request->hasFile($img)){
                            $image = date('Y-m-d-H-i-s') . $request->file($img)->getClientOriginalName();
                            $request->file($img)->storeAs('images', $image, 'public');
                        }
    
                        for ($j=1;  $j <= $attrCount; $j++) {
                            $attribute = 'attribute'.$i.'_'.$j;
                            $attribute = $request->$attribute;
                            $attribute_id = 'attribute_id'.$i.'_'.$j;
                            $attribute_id = $request->$attribute_id;
    
                            ProductAttribute::create([
                                'product_id' => $product->product_id,
                                'attribute_id' => $attribute_id,
                                'value' => $attribute,
                            ]);
                        }
                        
                        ProductVariation::create([ 
                            'regular_price' => $regular_price,
                            'product_id' => $product->product_id,
                            'sales_price' => $sales_price,
                            'stock' => $stock,
                            'color' => $color,
                            'image' => $image
                        ]);
                    }
                });
            }
            
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
