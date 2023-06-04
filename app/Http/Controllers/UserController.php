<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function loginValidate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (!Hash::check($request->password, $user['password'])) {
                return back()->with('error', 'password is wrong');
            }

            Auth::login($user);
            session()->flash('success', 'yeah, login succeeded!');
            return redirect()->route('profile');;
        } else {
            return back()->with('error', 'the email is unregistered');
        }
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function registerStore(Request $request)
    {
        $validated = $request->validate([
            'name' => ['bail', 'required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'password_verification' => ['required', 'min:8']

        ]);

        if ($request->password != $request->password_verification) {
            return back()->with('error', 'password verification must be same with password form');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        session()->flash('success', 'yeah, login succeeded!');
        return redirect()->route('profile ');
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('success', 'yeah, logout succeeded!');
        return redirect()->route('auth.loginPage');
    }

    public function profilePage()
    {
        return view('page.profil');
    }
}
