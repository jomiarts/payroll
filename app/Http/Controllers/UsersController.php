<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function index() 
    {
        $users = User::all();
        return view('dashboard.users.all')->with('users', $users);

    }
}
