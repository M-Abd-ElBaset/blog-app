<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!auth()->attempt($attributes)) {
            throw ValidationValidationException::withMessages(['email' => "Your provided credentials couldn't be passed"]);
            // return back()->withInput()->withErrors(['email' => "Your provided credentials couldn't be passed"]);
        }
        session()->regenerate();
        return redirect(RouteServiceProvider::HOME)->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
