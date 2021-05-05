<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\DB;
use Throwable;

class OrderController extends Controller
{
    public function order()

    {
        $carts = Cart::where('user_id',auth()->user()->id)->get();
        $cartQuantity = $carts->sum('quantity');
        $sub_total = 0;

        foreach ($carts as $cart){
            $sub_total += $cart->foodItem->price * $cart->quantity;
        }

        $tax = $sub_total*(5/100);
        $grandtotal = $sub_total+$tax;

        return view('frontend.content.order',compact('carts','sub_total','tax', 'grandtotal'));
    }
    public function orderConfirm(Request $request)
    {
        $request->validate([
            'delivery_address' => 'required',
        ]);
        // dd($request->all());
        $total =0;
        $orderData = [
            'user_id'=>auth()->user()->id,
            'delivery_address'=>$request->input('delivery_address'),
            'payment_method'=>$request->input('paymentMethod'),
            'total'=>0,
        ];

  //  dd($orderData);


        $carts = Cart::where('user_id',auth()->user()->id)->get();

        DB::beginTransaction();
        try{

         $order = Order::create($orderData);

            foreach($carts as $cart){

                OrderDetail::create([
                    'order_id'=>$order->id,
                    'food_item_id'=>$cart->food_items_id,
                    'quantity'=>$cart->quantity,
                    'sub_total'=>$cart->foodItem->price * $cart->quantity
                ]);
            }

            $carts->each(function($item) {
                $item->delete();
            });
            DB::commit();

        }catch(Throwable $e){
            //  dd($e->getMessage());
            DB::rollback();

        }

    }
}
