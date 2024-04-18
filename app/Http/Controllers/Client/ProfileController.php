<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

use App\Http\Requests\UpdateProfileRequest;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function __construct(protected UserService $userService)
    {

    }
    public function index()
    {
        $profile = $this->userService->get_User();

        return view('client.profile.profile', compact('profile'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {

    }


    public function update(UpdateProfileRequest $request)
    {

        $validatedData = $request->validated();

        if ($validatedData) {
            $userId = Auth::user()->id;
            $user = User::find($userId);

            $user->update($validatedData);

            return response()->json(['message' => 'Profile updated successfully'], 200);


        } else {
            return response()->json(['message' => 'Profile Error successfully'], 500);

        }

    }

    public function Set_Pssword(Request $request)
    {
        $userId = auth()->user()->id;
        $validPasswoed = $request->validate([
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        if (isset($validPasswoed['password'])) {
            $validPasswoed['password'] = Hash::make($validPasswoed['password']);
        }
        $profile = User::where('id', $userId)->firstOrFail();
        $profile->update($validPasswoed);
        return redirect()->back()->with([
            'message' => 'Votre profil a été mis à jour avec succès.',
            'success' => true,
        ]);


    }

    public function destroy(string $id)
    {

    }
}
