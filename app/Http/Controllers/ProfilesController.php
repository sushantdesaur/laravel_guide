<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class profilesController extends Controller
{
    public function index($user)
    {   
        $user = User::findOrFail($user);
        return view('home', ['user' => $user,
        ]);
    }
}
