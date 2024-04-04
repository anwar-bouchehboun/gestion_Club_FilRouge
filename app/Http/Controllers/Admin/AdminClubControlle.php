<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Requests\ClubRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClubRequest;
use App\Services\ClubServices;

class AdminClubControlle extends Controller
{

    public function __construct(
        protected ClubServices $clubService
    ) {
    }


    public function index()
    {
        // $clubs = Club::all();
        $clubs = Club::orderBy('id', 'desc')->paginate(5);
        return view('admin.club.club', compact('clubs'));
    }
    // crate Club
    public function store(ClubRequest $clubRequest)
    {

        $data = $clubRequest->validated();
        if ($clubRequest->hasFile('image')) {
            $data['image'] = $clubRequest->file('image')->store('image', 'public');
        }
        $createClub = $this->clubService->create($data);

        if ($createClub) {

            return redirect()->back()->with([
                'message' => 'club créée avec succès',
                'success' => true,
            ]);

        }

    }
    //  Update club
    public function update(UpdateClubRequest $clubRequest, Club $club)
    {
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
    // delete club
    public function destroy(Club $club)
    {

        $this->clubService->delete($club->id);
        // $club->delete();
        return redirect()->back()->with([
            'message' => 'club supprimer avec succès',
            'success' => true,
        ]);

    }
}