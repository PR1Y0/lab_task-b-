<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function M2F1(Request $req){

        $req->session()->flush();
        return redirect('/login');
    }
}
