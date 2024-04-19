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
        $club_User=$this->userService->get_User_Club();
        //   dd($club_User);
        return view('client.profile.profile', compact('profile','club_User'));
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


    public function updateprofile(UpdateProfileRequest $request)
    {

       $this->userService->updateprofile($request);

            return response()->json(['message' => 'Profile updated successfully'], 200);



    }

    public function Set_Pssword(Request $request)
    {

        $this->userService->Set_Pssword($request);
        return redirect()->back()->with([
            'message' => 'Votre profil a été mis à jour avec succès.',
            'success' => true,
        ]);


    }


    public function destroy(string $id)
    {

    }
}