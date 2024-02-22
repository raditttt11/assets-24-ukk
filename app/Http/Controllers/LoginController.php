<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/buku');
        }
    }
}


//     public function postlogin(Request $request)
//     {
//         if (Auth::attempt($request->only('email', 'password'))) {
//             return redirect('dashboard.buku');
//         }
//         return redirect('auth.login')->with('error', 'Username atau Password salah !');
//     }
// }