<?php

namespace App\Http\Controllers;

use App\Models\Catgory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatgoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Catgories = Catgory::all();
        return view('categories.index', compact('Catgories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('categories.Catgory_form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        Catgory::create(
            [
                'name'=>$request->name,
                'description'=>$request->description,

            ]
        );

        return  redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $Catgories=Catgory::Find($id);
        return view('categories.one_catgory', compact('Catgories'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('categories.Catgory_form_update')->with('id', $id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, $id)
    {
         $Catgories=Catgory::FindorFail($id);
        $Catgories->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return  redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Catgory::FindorFail($id)->delete();
        return  redirect('/home');
    }


     public function index_user()
    {

        $catgories = Catgory::All();
        return view('dashboard')->with('catgories',$catgories);


    }
}
