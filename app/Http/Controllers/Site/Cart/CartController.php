<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'productId' => 'required|integer',
            'variantId' => 'required|integer',
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
}
