<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home');
    }

    public function about() {
        return view('pages.about');
    }
    public function services() {
        return view('pages.services');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function location() {
        return view('pages.location');
    }
    // public function gallery() {
    //     $product = Product::all();
    //     return view('pages.galary', compact('product'));
    // }

    // Show all listings
    public function gallery() {
        return view('pages.galary', [
            'product' => Product::latest()->paginate(6)
        ]);
    }

    public function backend() {
        return view('backend.index');
    }
}
