<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Catgory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $Catgories = Catgory::all();
        $services = Service::all();
        return view('services.show', compact('services','Catgories'));
    }
    ///index user
     public function index_user()
    {  
        $catgories = Catgory::all();
        $services = Service::all();
        return view('dashboard', compact('services','catgories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('services.create-service');

    }

    /**
     * Store a newly created resource in storage.
     */
   public function insert(Request $request)
    {
        try {
            Service::create([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);

            return redirect('/services')->with('success', 'Service created successfully!');
        } catch (QueryException $e) {
            Log::error('Error inserting service: ' . $e->getMessage());
            return redirect()->back()->withErrors(['msg' => 'Failed to create service. Please try again.']);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
         $Catgories = Catgory::all();
         $services=Service::Find($id);
        return view('services.one_service', compact('services','Catgories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('services.update-service')->with('id', $id);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $services=Service::FindorFail($id);
        $services->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'category_id'=>$request->category_id,

        ]);
        return  redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Service::FindorFail($id)->delete();
        return  redirect('/services');
    }
}
