<?php

namespace App\Http\Controllers;
use App\Models\Brands;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ControllerBrand extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brands = Brands::all();
        return $brands; 

    }
    /**
     * Show the form for creating a new resource.
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

        //

        $brand = new Brands;
        $brand->brand_name = $request->brand_name;

        if($brand!= null){
            $brand->save();
            return $brand;
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

        $brand = Brands::findOrFail($request->id);

        $brand->brand_name = $request->brand_name;
        $brand->save();
        return $brand;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

