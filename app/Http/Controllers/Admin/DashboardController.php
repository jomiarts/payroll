<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct() 
     {
         $this->middleware('auth:admin');
     }
   

    public function versionone()
    {
        return view('dashboard.v1');
    }
    
}
