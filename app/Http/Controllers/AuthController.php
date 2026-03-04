<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// tambahkan ini
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

// valisiasi input login
    public function login(Request $request)
    {
        // Validate the request data
        // isinya sesuaikan sama isi halaman login. ini isi validasinya email required jadi biar harus diisi.
        // password yang diinput minimal 6 karakter
        // fungsi validate ini akan otomatis mengembalikan response ke halaman login dengan error message jika validasi gagal karena tidak sesuai.
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

// Proses login
        // Attempt to authenticate the user
        if (auth::attempt($validator)) {
            // setiap yang login dapet sesi baru terus, kita bisa atur sesi seberalamanya disini
            // dia diarahkan ke halaman admin dengan pesan sukses
            $request->session()->regenerate();
            return redirect()->intended('/admin')->with('success','Login Berhasil');
        }

        // ketika gagal login
        return back()->withErrors([
            'email' => 'Email dan password tidak sesuai.'
        ]);
    }

    // untuk log out
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // validasi input registrasi,dari user
          $validator = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $validator['name'],
            'email' => $validator['email'],
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil. Silahkan login.');

    }

}
