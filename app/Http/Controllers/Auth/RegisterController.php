<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            //'password2' => 'required'
        ];
        $messages = [
            'email.required' => 'Mời bạn nhập vào emal',
            'email.email' => 'Mời bạn nhập đúng định dạnh email',
            'password.required' => 'Mời bạn nhập password',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect('register')->withErrors($validator);
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            $params = [];
            $params['cols'] = $request->post();
            unset($params['cols']['_token']);
            $modelSv = new Users();
            $res = $modelSv->register($params);
            if ($res == null) {
                return redirect()->route('register');
            } elseif ($res > 0) {
                Session::flash('success', 'Them moi thanh cong nguoi dung');
                return redirect('login');
            } else {
                Session::flash('error', 'Loi them moi nguoi dung');
                return redirect()->route('register');
            }
        }
    }
}
