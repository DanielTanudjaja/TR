<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Account;

class AccountController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        if (!\Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return back()->withErrors(['username' => 'Username anda tidak valid!', 'password' => 'Password anda salah!']);
        }

        // dd(\Auth::attempt(['username' => $request->username, 'password' => $request->password]));

        if (Auth::user()->level == '1') {
            return redirect('/pageadmin/dashboard');
        } else if (Auth::user()->level == '0') {
            return redirect('/pageuser/profile');
        }
    }

    public function getRegister()
    {
        return view('regis');
    }

    public function Register(Request $request)
    {
        Account::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
        ]);
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/landingpage');
    }
}
