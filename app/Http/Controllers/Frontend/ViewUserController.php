<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewUserController extends Controller
{
    public function viewLoginRegistration()
    {

        return view('frontend.content.loginRegistration');
    }
    public function userRegistration()
    {

        return view('frontend.content.registration');
    }
    public function registration(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'=>'required',
            'email'=>'email|required|unique:users',
             'password'=>'required|min:6'
         ]);
        //  dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'password'=>bcrypt($request->password)
         ]);
         return redirect()->route('login.registration.from')->with('success','User Registration Successful.');


    }

    public function userLogin(Request $request)
    {
//        dd($request->all());
//validate input
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //authenticate
        $credentials = $request->only('email', 'password');
//   dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('homepage');
        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);

    }
    public function goUserLogin()
    {

        return view('frontend.content.loginRegistration');
    }

    public function userLogout()
    {
        Auth::logout();

        return redirect()->route('login.registration.from');

    }
public function profile()
{
    return view('frontend.content.profile');

}


    public function userProfile($id)
    {


        $orderViews = Order::where('user_id',auth()->user()->id)->get();

        return view('frontend.content.userProfile',compact('orderViews'));
    }



    public function reservationProfile($id)
    {
      $reservationViews = Reservation::where('user_id',auth()->user()->id)->get();

        // dd($reservationViews);
        return view('frontend.content.reservationProfile',compact('reservationViews'));
    }

    public function customerOrderView($id)
 {
        $orderViews = Order::find($id);
      $orderList = OrderDetail::where('order_id', $orderViews->id)->get();
         $total = $orderList->sum('sub_total');
          $tax = $total * (5 / 100);
        $grand_total = $total + $tax;
        // $showOrder = OrderDetail :: where('user_id',auth()->user()->id)->get();
        return view('frontend.content.customerOrderView',compact('orderViews','orderList','total','tax','grand_total'));

        // dd($orderViews);
    }
}

