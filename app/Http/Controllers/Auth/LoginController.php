<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
        $credencials= $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        if(Auth::attempt($credencials)){
            return redirect()->route('dashboard');
        }
        return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withInput(request(['email']));
    }
}
