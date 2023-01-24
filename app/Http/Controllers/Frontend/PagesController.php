<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vitae;

class PagesController extends Controller
{
    //
    public function home() {
        return view('home', [
            'products' => Product::latest()->paginate(6)
        ]);
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
    public function faq() {
        return view('pages.faq');
    }
    public function careers() {
        return view('pages.careers');
    }


    public function fileUploadPost(Request $request)
    {
        $feilds = $request->validate([
            'name'      =>  'required',
            'email'     => 'required|string|email|max:255|unique:vitaes,email',
            'job_type'  =>  'required',
            'phone'     =>  'required',
            'message'   =>  'required',
            'file' => 'required|mimes:pdf|max:2048',
        ]);
  
        $fileName = time().'.'.$request->file->extension();  
        $request->file->storeAs('public/cvs', $fileName);
   
        $user = Vitae::create([
            'name'          => $feilds['name'],
            'email'         => $feilds['email'],
            'job_type'      => $feilds['job_type'],
            'phone'         => $feilds['phone'],
            'message'       => $feilds['message'],
            "cv"            => $fileName
        
        ]);

        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
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
