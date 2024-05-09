<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login',);
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $dataValid = $request->validate([
            'email' => ['required', 'unique:users'],
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'sim' => 'required',
            'password' => 'required',

        ]);
        User::create($dataValid);
        return redirect('/login')->with('success', 'Akun Berhasil Dibuat');
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with(
            'error',
            'Email dan katasandi tidak sesuai !',
        )->onlyInput('error');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
