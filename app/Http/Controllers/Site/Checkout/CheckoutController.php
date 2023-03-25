<?php

namespace App\Http\Controllers\Site\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderVariation;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\ShippingMethod;
use App\Models\Variation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $product_id = $request->product_id;
        $product = Product::find($product_id);
        $variations = [];
        if ($request->has('variation_id')) {
            $variations[] = ['variation_id' => $request->variation_id];
        }
        foreach ($product->productAttr as $key => $attr) {
            $attr = $attr->attribute->name;
            $attr = str_replace(' ', '_', $attr);
            $product_attr_id = $request->$attr;
            if ($product_attr_id != null) {
                $variations[] = ['variation_id' => $product_attr_id];
            }
        }

        $size = $request->size;
        $qty = $request->qty;
        $variant_id = $request->variation_id;
        session()->put('order', ['product_id' => $product_id, 'qty' => $qty, 'size' => $size, 'variant_id' => $variant_id, 'variations' => $variations]);
        $shippingMethods = ShippingMethod::get();
        return view('site.cart.checkout', ['shippingMethods' => $shippingMethods]);
    }

    public function placeOrder(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'town' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'shipping_method_id' => 'required',
        ]);

        try {
            $orderData = session()->get('order');
            $variations = $orderData['variations'];
            $size = ProductVariation::find($orderData['size']);
            $totalAmount = $size->sales_price;

            DB::transaction(function () use ($request, $totalAmount, $orderData, $variations) {
                $order = Order::create(['user_id' => Auth::user()->id, 'total_amount' => $totalAmount] + $request->all());
                $orderItem = OrderItem::create(['order_id' => $order->order_id, 'product_id' => $orderData['product_id'], 'variant_id' => $orderData['variant_id'], 'qty' => $orderData['qty']]);
                foreach ($variations as $key => $value) {
                    $variation = Variation::find($value['variation_id']);
                    OrderVariation::create(['order_item_id' => $orderItem->order_item_id, 'variation_id' => $value['variation_id']]);
                    $totalAmount += $totalAmount*$variation->percentage / 100;
                }
                $order->update(['total_amount' => $totalAmount]);
                toast('Order placed'.$totalAmount, 'success');
            });
        } catch (\Throwable $th) {
            toast($th->getMessage(), 'error');
        }

        return back();
    }
}
