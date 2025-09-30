<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(Request $request)
    {
        $auth = $request->validate([
            'username' => ['required',  'integer'],
            'password' => 'required'
        ]);
        return "hello world";
    }
}
