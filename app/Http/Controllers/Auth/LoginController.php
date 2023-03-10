<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // so login page
    public function index()
    {
        return view('auth.login');
    }

    // login
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // sign the user in and so message if login details bad
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) return back()->with('status', 'Invalid login details');

        return redirect()->route('dashboard');
    }
}
