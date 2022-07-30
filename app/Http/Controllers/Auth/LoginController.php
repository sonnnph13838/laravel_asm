<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }
    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $messages = [
            'email.required'=> 'Mời bạn nhập vào emal',
            'email.email' => 'Mời bạn nhập đúng định dạnh email',
            'password.required' => 'Mời bạn nhập password'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect('login')->withErrors($validator);
        }else{
            $email = $request->input('email');
            $password = $request->input('password');
            if(Auth::attempt(['email'=>$email, 'password'=> $password])){
                return redirect('admin');
            }else{
                Session::flash('error','email hoac pass khong dung');
                return redirect('login');
            }
        }
    }
}
