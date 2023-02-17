<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $object = Customers::all();
        return $object;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $object = new Customers;

        $object->first_name = $request->first_name;

        $object->last_name =  $request->last_name;

        $object->email = $request->email;

        $object->address = $request->address;

        $object->user_name = $request->user_name;

        $object->password = $request->password;

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
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $object = Customers::findOrFail($request->id);

        $object->first_name = $request->first_name;

        $object->last_name =  $request->last_name;

        $object->email = $request->email;

        $object->address = $request->address;

        $object->user_name = $request->user_name;

        $object->password = $request->password;

        $object->save();
       	return $object;

    }

    
}
