<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            $userRole = Auth::user()->role;
            // dd($userRole);
            if ($userRole == "admin") {
                return redirect()->route('Dashbord');
            } elseif ($userRole == "client") {
                return redirect()->route('home');
            }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
    public function destroy(Request $request): RedirectResponse
    {
       
            $user = Auth::guard('web')->user();


            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();


            return redirect()->route('home');



    }

}