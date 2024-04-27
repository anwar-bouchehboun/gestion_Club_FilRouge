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
use App\Models\Reservation;
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
        $SousUser=$this->userService->get_DataUser_Souscategorie();
      

        return view('client.profile.profile', compact('profile','club_User','SousUser'));
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


    public function deleteclub(Request $request)
    {

       $this->userService->deleteclub($request);
       return response()->json(['message' => 'Profile Delete Club  successfully'], 200);


    }
}