<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
  {
        public function writeReview()
        {


            return view('frontend.content.writeReview');
        }
    }

