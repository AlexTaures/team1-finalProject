<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Sales;
class ControllerSale extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::all();
        return $sales;
    }

    /**
     * Show the form for creating a new resource.
     * * @param  \Illuminate\Http\Request  $r equest
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $object = new Sales;

        $object->products = $request->products;

        $object->sale_date =  $request->sale_date;

        $object->total_sale = $request->total_sale;

        $object->customer_id = $request->customer_id;
         if($object!= null){
            $object->save();
            return $object;
             }else{
            return "Error, we can't push the information to the database";
    }  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $object = Sales::findOrFail($request->id);

        $object->products = $request->products;

        $object->sale_date =  $request->sale_date;

        $object->total_sale = $request->total_sale;

        $object->customer_id = $request->customer_id;
        $object->save();
       	return $object;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
