<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Services\ClubServices;
use App\Http\Requests\ClubRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateClubRequest;

class AdminClubControlle extends Controller
{

    public function __construct(
        protected ClubServices $clubService
    ) {
    }

    public function index()
    {

        $clubs = $this->clubService->all();
        if(Auth::User()->role=="admin"){
            return view('admin.club.club', compact('clubs'));
        }



    }
    // crate Club
    public function store(ClubRequest $clubRequest)
    {

        try {
            if(Auth::User()->role=="admin"){
            $data = $clubRequest->validated();
            if ($clubRequest->hasFile('image')) {
                $data['image'] = $clubRequest->file('image')->store('image', 'public');
            }
            // create Club
            $createClub = $this->clubService->create($data);

            if ($createClub) {
                return redirect()->back()->with([
                    'message' => 'club créée avec succès',
                    'success' => true,
                ]);

            }
        }
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est  lors de la création du club. Veuillez réessayer.',
                'success' => false,
            ]);
        }


    }
    //  Update club
    public function update(UpdateClubRequest $clubRequest, Club $club)
    {
        try {
            if(Auth::User()->role=="admin"){
            $id = $club->id;
            $data = $clubRequest->validated();
            if ($clubRequest->hasFile('image')) {
                $data['image'] = $clubRequest->file('image')->store('image', 'public');

            } else {
                $data['image'] = $clubRequest->input('image');
            }

            $updateClub = $this->clubService->update($data, $id);
            if ($updateClub) {
                return redirect()->back()->with([
                    'message' => 'Club modifiée avec succès',
                    'success' => true,
                ]);

            }
        }
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est  lors de la Modification  du club. Veuillez réessayer.',
                'success' => false,
            ]);
        }


    }

    // delete club
    public function destroy(Club $club)
    {

        try {
            if(Auth::User()->role=="admin"){
            $this->clubService->delete($club->id);
            return redirect()->route('club.index')->with([
                'message' => 'club supprimer avec succès',
                'success' => true,
            ]);
        }
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est  lors de la Supprimer  du club. Veuillez réessayer.',
                'success' => false,
            ]);
        }


    }

}