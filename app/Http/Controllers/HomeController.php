<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            error_log('got in');
            
            if (Auth::attempt($credentials)) {
                error_log('passed');
                switch (Auth::user()->role) {
                    case 1:
                        return redirect()->intended(route('estadistica.productos'));
                        break;
                    case 2:
                        return redirect()->intended(route('producto.todos'));
                        break;
                    case 3:
                        return redirect()->intended(route('venta.todos'));
                        break;
                }
            }
        }
        return view('Auth.login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
