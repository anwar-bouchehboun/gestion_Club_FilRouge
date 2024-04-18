<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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


    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        
      if($validatedData){
        $userId = Auth::user()->id;
        $user = User::find($userId);

        $user->update($validatedData);

        return response()->json(['message' => 'Profile updated successfully'], 200);


      }else{
        return response()->json(['message' => 'Profile Error successfully'], 500);

      }




    }


    public function destroy(string $id)
    {

    }
}