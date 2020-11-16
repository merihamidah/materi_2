<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller {
    function showLogin(){
        return view('loginp3');
    } 
    function loginProcess(){
        if(Auth::attempt(['email'=> request('email'),'password'=> request('password')])){
            return redirect('home')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal,silahkan cek email dan password anda');
        }
    } 
    function logout(){
        Auth::logout();
        return redirect('loginp3');
    }
     function showRegistration(){
        return view('register');

    }
    function registerProcess(){
        $user = new User;
        $user->username = request('username');
        $user->email = request('email');
        $user->nama = request('nama');
        $user->password = bcrypt(request('password'));
        $user->save();
        
       return redirect('loginp3')->with('success','Data Berhasil Ditambahkan');
    }

     function showForgot(){
        return view('forgot');
    }
}