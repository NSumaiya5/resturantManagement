<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class ViewGalleryController extends Controller
{
    public function viewGallery()
    {
        $gallerys=Gallery::all();

        return view('frontend.content.viewGallery',compact('gallerys'));
    }


}
