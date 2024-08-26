<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);
 
        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
 
        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // $credentials = array(
        //     'email'  => $request->get('email'),
        //     'password' => $request->get('password')
        //    );
    // dd($request);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
    
        return redirect('/adminlogin')->with('error', 'Invalid credentials. Please try again.');
    }
}
