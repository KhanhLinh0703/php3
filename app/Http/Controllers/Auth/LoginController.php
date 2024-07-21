<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function addLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::loginUsingId($user->id);
            return redirect()->route('/')->with('success', 'Login successful!');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
