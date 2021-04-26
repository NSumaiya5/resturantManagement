<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function viewGalley()
    {
        $gallerys=Gallery::all();

        return view('frontend.content.viewGalley',compact('gallerys'));
    }

}
