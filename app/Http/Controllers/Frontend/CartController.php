<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use App\Models\Cart;
class CartController extends Controller
{


    public function index(){


        $carts = Cart::where('user_id',auth()->user()->id)->get();
        $cartQuantity = $carts->sum('quantity');
        $sub_total = 0;

        foreach ($carts as $cart){
            $sub_total += $cart->foodItem->price * $cart->quantity;
        }

        $tax = $sub_total*(5/100);
        $grandtotal = $sub_total+$tax;


        return view('frontend.content.cartView',compact('carts','sub_total','tax', 'grandtotal'));
    }

    public function addToCart($id){

        $foodItem = FoodItem::find($id);

        $user_id = auth()->user()->id;

        $checkAlreadyExistItem = Cart::where('food_items_id',$id)->where('user_id',$user_id)->first();


        if(!$checkAlreadyExistItem){
            $cartData = [
                'food_items_id' =>$foodItem->id,
                'quantity' =>1,
                'user_id'=>auth()->user()->id,
            ];
            Cart::create($cartData);
        }else{

                $oldQuantity = $checkAlreadyExistItem->quantity;

                $checkAlreadyExistItem->update([
                    'quantity' =>$oldQuantity + 1
                ]);

        }

        return redirect()->back()->with('success','Add To cart Successful');
    }

    public function sorryMsg()
    {

        return view('frontend.content.sorryMsg');
    }
    //
}