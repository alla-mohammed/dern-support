<?php

namespace App\Http\Controllers;

use App\Models\Requst;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class RequstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requsts = Requst::all();
        return view('requests', compact('requsts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('form-request')->with('id', $id);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storee(Request $request)
    {
         Requst::create(
            [
                'customer_name'=>$request->customer_name,
                'description'=>$request->description,
                'service_id'=>$request->service_id,
                'price'=>$request->price,

            ]
        );

        return  redirect('/requsts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
      public function edit($id)
    {
        return view('requsts-update-form')->with('id', $id);
        
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request,  $id)
    {
        $requsts=Requst::FindorFail($id);
        $requsts->update([
           'customer_name'=>$request->customer_name,
                'description'=>$request->description,
                'service_id'=>$request->service_id,
                'price'=>$request->price,

        ]);
        return  redirect('/requsts');
    }
    /**
     * Remove the specified resource from storage.
     */
     public function destroy( $id)
    {
        Requst::FindorFail($id)->delete();
        return  redirect('/requsts');
    }
}
