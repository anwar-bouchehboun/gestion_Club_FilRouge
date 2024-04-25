<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreClientCompte;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class RegisterController extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {
    }


    public function create(): View
    {
        return view('auth.register');
    }
    public function store(StoreClientCompte $request)
    {
        try{
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('image', 'public');
        }
        $client = $this->userService->create($data);

        // Alert::success('Succes', 'Compte has been Create');
        return redirect()->route('login.index')->with('success', 'Compte has been created');
    } catch (\Throwable $th) {
        return redirect()->route('register')->with([
            'message' => 'Une erreur s\'est  lors de la register. Veuillez réessayer.',
            'success' => false,
        ]);
    }

    }
}