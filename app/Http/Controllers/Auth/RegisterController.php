<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            // 'role'=>'required'
            'image' => 'required',

        ]);
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('image', 'public');
        }

        Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $validated['image']
        ]);

        // Alert::success('Succes', 'Compte has been Create');
        return redirect()->route('login.index')->with('success', 'Compte has been created');


    }
}