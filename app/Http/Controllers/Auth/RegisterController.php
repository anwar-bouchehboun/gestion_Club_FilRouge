<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
             'password' => ['required', 'confirmed', Password::defaults()],
            // 'role'=>'required'
            'image' => 'required', // Exemple de validation pour les images

        ]);

         Client::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
          $user=Client::all();
        dd($user);



    }
}