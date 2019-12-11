<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function index() 
    {
        $users = User::all();
        return view('dashboard.users.all')
        ->with('users', $users);

    }

    public function show($id) {
        
        $user = User::find($id);
        return view('dashboard.users.show')->with('user', $user);
    }


    public function edit($id) {
        //return $id;
        $user = User::find($id);
        return view('dashboard.users.edit')->with('user', $user);
    }
}
