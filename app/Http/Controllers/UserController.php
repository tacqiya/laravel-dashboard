<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);
 
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        if($user) {
            return redirect('/login')->with('success', 'Registration successful! Please log in.');
        }
        return redirect('/register')->with('error', 'Failed to register account.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }
    
        return redirect('/adminlogin')->with('error', 'Invalid credentials. Please try again.');
    }

    public function logout(Request $request) {
        return redirect('login')->with(Auth::logout());
      }

    public function home() {
        return view('home');
    }

    public function dashboard() {
        $data['page'] = 'dashboard';
        return view('dashboard', $data);
    }

}
