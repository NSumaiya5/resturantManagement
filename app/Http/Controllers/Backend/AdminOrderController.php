<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function adminOrder(Request $request)
    {
        //   dd($request->all());
        $orders = Order::all();

return view('backend.content.orderManage',compact('orders'));
    }

    public function orderAccept($id, $status){
        $orders = Order::find($id);
        $orders->update([
            'status' => $status
        ]);
        return redirect()->back();

    }


    public function adminOrderView($id)
    {

        //   dd($request->all());
        $orderViews = Order::find($id);
        $orderList = OrderDetail::where('order_id', $orderViews->id)->get();
        $total = $orderList->sum('sub_total');
        $tax = $total *(5/100);
        $grand_total = $total + $tax;
        // $tax = $orderList->sub_total


        //  dd($total);


        // $productPrice=0;

        // foreach($orderList as $item){
        //     $subtotal = $item->sub_total;
        //     $productPrice=$productPrice+$subtotal;
        // }

        // $tax = $subtotal*(5/100);



        // $total = $productPrice+$tax;

        return view('backend.content.adminOrderView',compact('orderViews','orderList','total','tax','grand_total'));
}

}
