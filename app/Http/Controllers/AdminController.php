<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            $type= Auth()->user()->type;
            if($type=='user'){
                return view('dashboard');
            }
            elseif ($type=='admin'){
                return view('admin.index');

            }
            else{
                return  redirect()->back();
            }
        }

    }
}
