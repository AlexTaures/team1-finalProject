<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Admins;


class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $admin = Admins::all();
        return $admin; 

    }
    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //

        $admin= new Admins;
        $admin->user_name = $request->user_name;
        $admin->password = $request->password;

        if($admin!= null){
            $admin->save();
            return $admin;
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

        $admin = Admins::findOrFail($request->id);
        $admin->user_name = $request->user_name;
        $admin->password = $request->password;

        $admin->save();
        return $admin;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
