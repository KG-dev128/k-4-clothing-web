<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
         $res=DB::select('select * from  category');   
        return view("Product.create",['res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $Pro_Name = $request->input('Pro_Name');
    $Pro_Qty = $request->input('Pro_Qty');
    $Pro_Price = $request->input('Pro_Price');
    $Pro_Detail = $request->input('Pro_Detail');
    $CatId = $request->input('CatId');

    $Pro_Image = null;
    if ($request->hasFile('Pro_Image')) {
        $Pro_Image = $request->file('Pro_Image')->store('products', 'public');
    }

    DB::insert("INSERT INTO products (Pro_Name, Pro_Qty, Pro_Price, Pro_Image, Pro_Detail, CatId, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW())", 
    [
        $Pro_Name,
        $Pro_Qty,
        $Pro_Price,
        $Pro_Image,
        $Pro_Detail,
        $CatId
    ]);

    // 🔧 Fetch products to pass to the index view
    $res = DB::select("SELECT * FROM products");

    return view("Product.index", ['res' => $res]);
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
     $res=DB::select('select * from  products');   
    return view("Product.index",['res'=>$res]);
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
