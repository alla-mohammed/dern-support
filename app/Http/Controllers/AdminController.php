<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Ensure the user is authenticated
        if (Auth::check()) {
            // Retrieve the user type
            $type = Auth::user()->type;
            // Redirect based on user type
            if ($type === 'user') {
                return  redirect('dashboard');
            } elseif ($type === 'admin') {
                 return redirect('category');
            } else {
                return redirect()->back()->withErrors(['msg' => 'Unauthorized access.']);
            }
        } else {
            // Redirect to login if not authenticated
            return redirect()->route('login');
        }
    }
}
