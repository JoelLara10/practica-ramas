<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthControllerWid extends Controller
{
    public function showLoginForm()
    {
        return view('auth.loginwid');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirige al usuario a la página de inicio después del login
            return redirect()->intended('dashboard');
        }

        // Si las credenciales son incorrectas
        return redirect()->back()->withErrors(['login_error' => 'Credenciales incorrectas.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/loginwid');
    }
}
