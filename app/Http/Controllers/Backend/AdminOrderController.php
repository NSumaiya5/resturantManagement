<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\OrderConformation;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminOrderController extends Controller
{
    public function adminOrder(Request $request)
    {
        //   dd($request->all());
        $orders = Order::where('status', '!=', 'cancle')->get();

        // dd($orders);

        return view('backend.content.orderManage', compact('orders'));
    }

    // public function orderAccept($id, $status)
    // {
    //     $orders = Order::find($id);

    //     $customer = User::where('id', $orders->user_id)->first();
    //     // dd($customer);
    //     $orders->update([
    //         'status' => $status

    //     ]);

    //     Mail::to($customer->email)->send(new OrderConformation($orders));
    //     return redirect()->back();
    // }


    public function adminOrderView($id)
    {

        //   dd($request->all());
        $orderViews = Order::find($id);
        $orderList = OrderDetail::where('order_id', $orderViews->id)->get();
        $total = $orderList->sum('sub_total');
        $tax = $total * (5 / 100);
        $grand_total = $total + $tax;
        // $tax = $orderList->sub_total


        //  dd($total);




        return view('backend.content.adminOrderView', compact('orderViews', 'orderList', 'total', 'tax', 'grand_total'));
    }

    public function orderPaid($id, $status)
    {

        $orders = Order::find($id);
        $customer = User::where('id', $orders->user_id)->first();

        // dd($status);


        if($status == 'unpaid'){
            $orders->update([
                'status' => 'cancle',
                'paid_status' => $status
            ]);
        }else{
            $orders->update([
                'status' => 'confirm',
                'paid_status' => $status
            ]);
        }


        // dd($status);
        Mail::to($customer->email)->send(new OrderConformation($orders));
        return redirect()->back();
    }
}
