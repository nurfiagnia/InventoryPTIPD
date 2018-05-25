<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $req){
    	if(Auth::guard('admins')->attempt([
    		'username' => $req->username,
    		'password' => $req->password
    	])) {
    		return redirect('/Dashboard Admin');
    	}
    }

    function logout(){
    	if(Auth::guard('admins')->check()){
    		Auth::guard('admins')->logout();
    	}

    	return redirect('/login');
    }
}
