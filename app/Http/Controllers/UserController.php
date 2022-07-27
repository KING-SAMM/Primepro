<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// use Illuminate\Foundation\Auth\User;
use App\Models\User;

class UserController extends Controller
{
    // Show registration form
    public function create()
    {
        return view('users.register');
    }

    // Store the created User
    public function store(Request $request)
    {
        // Validate the data
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required | confirmed | min:6'
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create the user
        $user = User::create($formFields);

        // Automatically login the created user
        auth()->login($user);

        // Redirect with flas message
        return redirect('/')->with('message', 'User created and logged in');
    }

    // Logout user out
    public function logout(Request $request)
    {
        auth()->logout();

        // Invalidate user seesion and regenerate csrf token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect to home page with flash message
        return redirect('/')->with('message', 'You have been logged out');
    }

    // Show login form
    public function login()
    {
        return view('users.login');
    }

    // Authenticate and login User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        // Login user 
        if (auth()->attempt($formFields))
        {
            // Regenerate session id
            $request->session()->regenerate();

            // Redirect to home
            return redirect('/')->with('message', 'You are now logged in');
        }

        // If login attempt fails display error message only in email field
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
}
