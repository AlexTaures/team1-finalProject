<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products;

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->amount = $request->input('amount');
        $product->price = $request->input('price');
        $product->admission_date = $request->input('admission_date');
        $product->expiration_date = $request->input('expiration_date');
        $product->brand_id = $request->input('brand_id');
        $product->presentation_id = $request->input('presentation_id');

        $product->save();

        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->amount = $request->input('amount');
        $product->price = $request->input('price');
        $product->admission_date = $request->input('admission_date');
        $product->expiration_date = $request->input('expiration_date');
        $product->presentation_id = $request->input('presentation_id');
        $product->save();

        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
