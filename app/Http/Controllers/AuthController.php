<?php

// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('username', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('dashboard');
    //     }

    //     return back()->withErrors([
    //         'username' => 'The provided credentials do not match our records.',
    //     ]);
    // }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil user yang sedang login
            $user = Auth::user();
            Log::info('User logged in: ', ['user' => $user]);

            // Periksa role_id dan arahkan ke halaman yang sesuai
            switch ($user->role_id) {
                case 1:
                    Log::info('Redirecting to admin dashboard');
                    return redirect()->intended('/dashboard');
                case 2:
                    Log::info('Redirecting to admin dashboard');
                    return redirect()->intended('/dashboard');
                case 3:
                    Log::info('Redirecting to crew dashboard');
                    return redirect()->intended('/dashboard_crew');
                default:
                    Log::info('Invalid role, logging out');
                    Auth::logout();
                    return back()->withErrors([
                        'username' => 'Your account does not have the appropriate role.',
                    ]);
            }
        }

        Log::info('Invalid credentials');
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/homepage');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,roleid', // Konsisten dengan role_id
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id, // Konsisten dengan role_id
        ]);

        return redirect('/manajemen_akun');
    }

}    