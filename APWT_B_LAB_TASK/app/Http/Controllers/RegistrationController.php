<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function M3F1(){
        return view('login.registration');
    }

    public function M3F2(){

        $validated = $req->validate([
            'full_name' => 'required|alpha|min:3|max:30',
            'user_name' => 'required',
            'email' => 'required|max:50|min:10|email',
            'password' => 'required|alpha|min:8|max:20|confirmed',
            'password_confirm' => 'required',
            'phone' => 'required|min:11|max:20',
            'city' => 'min:3|max:20',
            'country' => 'min:3|max:20',
            'company_name' => 'min:3|max:20',
        ]);
        
    }
   
}
