<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function regform(){
        return view('auth.reg');
    }

    public function regsubmit(Request $request){
       User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>bcrypt($request->password),
       
       ]);
       return back();
    }

    public function login(){
        return view('auth.login');
    }

    public function loginsubmit(Request $request){
        $credentials = $request->except('_token');
        $authentication = auth()->attempt($credentials);
      
        if($authentication){
            return to_route('dashboard');
        }
        else{
            return to_route('login');
        }
    }

    public function logout(){
        auth()->logout();
        return to_route('login');
    }
    
}

