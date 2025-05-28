<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirect berdasarkan role user
            if (auth()->user()->role === 'superadmin') {
                return redirect()->route('beranda-superadmin');
            } elseif (auth()->user()->role === 'guru') {
                return redirect()->route('beranda-guru');
            } else {
                return redirect()->route('beranda-santri');
            }
        }

        return back()->withErrors([
            'username' => 'Kredensial tidak valid.',
        ]);
    }
}