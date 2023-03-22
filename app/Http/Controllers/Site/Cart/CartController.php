<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::where('deleted_at', '=', null)->where('user_id', Auth::user()->id)->get();
        $products = Product::where('deleted_at', null)->orderBy('product_id', 'DESC')->take(50)->get();
        return view('site.cart.cart', ['items' => $items, 'products' => $products]);
    }

    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'productId' => 'required|integer',
            'variantId' => 'nullable|integer',
            'qty' => 'required|integer',
        ]);

        try {
            if(!Auth::check()) {
                return response()->json(['icon' => 'warning', 'title' => 'Please login']);
            }elseif($request->qty > 0){
                $productId = $request->productId;
                $variantId = $request->variantId;
                $qty = $request->qty;

                Cart::create(['product_id' => $productId, 'variant_id' => $variantId, 'qty' => $qty, 'user_id' => Auth::user()->id]);
            }else{
                return response()->json(['icon' => 'warning', 'title' => 'Please fill the correct quantity']);
            }
        } catch (\Throwable $th) {
            return response()->json(['icon' => 'error', 'title' => $th->getMessage()]);
        }
        return response()->json(['icon' => 'success', 'title' => 'Added to the Cart']);
    }

    public function removeFromCart(Request $request)
    {
        try {
            Cart::where('cart_id', $request->id)->where('user_id', Auth::user()->id)->first()->delete();
        } catch (\Throwable $th) {
            return response()->json(['status' => false]);
        }
        return response()->json(['status' => true]);
    }
}
