<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function M1F1(){
        return view('login.index');
    }

    public function M1F2(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required|max:255|email',
            'password' => 'required|string|min:8|max:20',
        ]);

        // echo "Succesful";

        $user = user::where('email', $req->email)
            ->where('password', $req->password)
            ->first();
        
            if(isset($user)){
                $req->session()->put('user_name', $user->user_name);
                return redirect('/admin');

                if($user->password != $req->password)
                {
                    return redirect('/login')->with('msg', 'password is incorrect');
                }
            }else{
                $req->session()->flash('msg', 'invaild username or password');
                return redirect('/login')->with('msg', 'email or password is incorrect');
            }

    }
}
