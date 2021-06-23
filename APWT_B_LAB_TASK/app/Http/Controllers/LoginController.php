<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function M1F1(){
        return view('login.index');
    }

    function verify(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required|max:255|email',
            'password' => 'required|string|min:8|max:20',
        ]);

        echo "Succesful";

    }
}
