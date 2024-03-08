<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
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

    public function register()
    {
        return view('auth.register');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function postregister(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'level' => "Peminjam",
            'email' => $request->email,
            'password' => bcrypt($request->password),
            "remember_token" => Str::random(60),
        ]);
        return redirect("/login");
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
