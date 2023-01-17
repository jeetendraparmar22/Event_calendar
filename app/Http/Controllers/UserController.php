<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // login page
    public function index()
    {
        return view('login');
    }

    // Register page
    public function register()
    {
        return view('register');
    }

    // create user
    public function createUser(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|numeric|digits:10',
            'password' => 'required|
                           min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$@#%]).*$/|
                           max:16'

        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect('register')->with('success', 'User register successfully');
    }


    // Athenticatate to user

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'error' => 'Email or Password is wrong'
        ]);
    }

    // Logout method
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
