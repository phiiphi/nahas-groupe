<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //
    //
    public function index()
    {
        $users = User::all();
        return view("backend.users.index",compact('users'));
    }


    // Show Register/Create Form
    public function create() {
        return view('backend.users.register');
    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

     // Create New User
     public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect()->route('product.index');

    }

    public function edit($id)
    {
        //
        $user = User::find($id)->findOrFail($id);
        return view("backend.users.edit",compact('user'));
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/product')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }
}
