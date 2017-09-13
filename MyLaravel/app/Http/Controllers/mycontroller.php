<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function gioithieu(){
    	return view('gioithieu');
    }
    public function email(){
    	return view('email');
    }
     public function hoatdongsv(){
    	return view('hoatdongsv');
    }
     public function hoatdongcb(){
    	return view('hoatdongcb');
    }
    public function login(Request $request){
        $email= $request['email'];
        $pass= $request['pass'];
        if(Auth::attempt(['email'=>$email,'password'=>$pass]))
        {
            echo 'Đăng nhập thành công!';
        }
        else
        {
            return view('email',['error'=>'Email or Password không đúng. Xin kiểm tra lại !']);
        }
    }
}
