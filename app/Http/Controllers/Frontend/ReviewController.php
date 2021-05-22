<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
  {
        public function writeReview()
        {


            return view('frontend.content.writeReview');
        }
        public function submitReview(Request $request)
        {
            // dd($request)
            Review::create([

                'user_id'=>auth()->user()->id,
                'rate'=>$request->input('rate'),
                 'message'=>$request->input('message'),
            ]);
            return redirect()->back();


        }
        // public function viewReview()
        // {
        //     $review=Review::all();

        //     return view('frontend.content.viewGallery',compact('gallerys'));
        // }



    }







