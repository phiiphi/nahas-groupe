<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Vitae;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view("backend.products.index",compact('product'));
    }

    public function application()
    {
        $vitaes = Vitae::all();
        return view("backend.application.index",compact('vitaes'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.products.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feilds = $this->validate($request,[
            'location'          =>  'required',
            'price'             =>  'required', 
            'description'       =>  'required', 
            'status'            =>  'required', 
            'image_one'         => 'required',
            'image_two'         => 'required',
            'image_three'       => 'required',
            'image_four'       => 'required',

        ]);

        $image_one = $request->file('image_one')->getClientOriginalName();
        $path = $request->file('image_one')->storeAs('public/uploads', $image_one);


        $image_two = $request->file('image_two')->getClientOriginalName();
        $path = $request->file('image_two')->storeAs('public/uploads', $image_two);

        $image_three = $request->file('image_three')->getClientOriginalName();
        $path = $request->file('image_three')->storeAs('public/uploads', $image_three);

        $image_four = $request->file('image_four')->getClientOriginalName();
        $path = $request->file('image_four')->storeAs('public/uploads', $image_four);
        
        $user = Product::create([
            'location'      => $feilds['location'],
            'price'         => $feilds['price'],
            'description'   => $feilds['description'],
            'status'        => $feilds['status'],
            "image_one"     => $image_one,
            "image_two"     => $image_two,
            "image_three"   => $image_three,
            "image_four"    => $image_four

        
        ]);
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('backend.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
