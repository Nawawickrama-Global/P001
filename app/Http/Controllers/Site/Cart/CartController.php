<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\CouponUser;
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
            if (!Auth::check()) {
                return response()->json(['icon' => 'warning', 'title' => 'Please login']);
            } elseif ($request->qty > 0) {
                $productId = $request->productId;
                $variantId = $request->variantId;
                $qty = $request->qty;

                Cart::create(['product_id' => $productId, 'variant_id' => $variantId, 'qty' => $qty, 'user_id' => Auth::user()->id]);
            } else {
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
            return response()->json(['remove' => false]);
        }
        return response()->json(['remove' => true]);
    }

    public function plusQty(Request $request)
    {
        try {
            Cart::where('cart_id', $request->id)->where('user_id', Auth::user()->id)->first()->increment('qty');
            $item = Cart::where('cart_id', $request->id)->where('user_id', Auth::user()->id)->first();
        } catch (\Throwable $th) {
            return response()->json(['qty' => 0]);
        }

        return response()->json(['qty' => $item->qty]);
    }

    public function minusQty(Request $request)
    {
        try {
            $item = Cart::where('cart_id', $request->id)->where('user_id', Auth::user()->id)->first();
            if ($item->qty > 1) {
                Cart::where('cart_id', $request->id)->where('user_id', Auth::user()->id)->first()->decrement('qty');
            }
        } catch (\Throwable $th) {
            return response()->json(['qty' => 0]);
        }

        return response()->json(['qty' => $item->qty - 1]);
    }

    public function applyCoupon(Request $request)
    {
        $this->validate($request, [
            'couponCode' => 'required'
        ]);
        // Check Coupon Code
        $date = date('Y-m-d');
        $coupon = Coupon::where('name', $request->couponCode)->whereDate('start_date', '<=', $date)->whereDate('end_date', '>=', $date)->where('status', 'active')->first();
        // $usersCount = CouponUser::where('coupon_id', $coupon->coupon_id)->count();
        $usersCount = 1;
        if (!empty($coupon) && $usersCount <= $coupon->number_of_users) {
            session()->put('coupon', ['id' => $coupon->coupon_id, 'code' => $coupon->name, 'amount' => $coupon->value, 'type' => $coupon->type]);
            toast('Coupon applied', 'success');
        } else {
            toast('Invalid coupon code', 'error');
        }
        return back();
    }
}
