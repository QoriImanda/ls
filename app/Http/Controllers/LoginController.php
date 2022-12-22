<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'loginss'
        ]);
    }

    public function register()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'password' => Hash::make($request->input('password')),
            'role' => $request->role,
        ]);

        return redirect()->route('login');
    }


    public function post(Request $request)
    {
        $cre = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($cre)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back();

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}