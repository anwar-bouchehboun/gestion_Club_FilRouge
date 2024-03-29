<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Requests\ClubRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateClubRequest;

class AdminClubControlle extends Controller
{
    public function index()
    {
        // $clubs = Club::all();
        $clubs = Club::orderBy('id', 'desc')->paginate(5);
        return view('admin.club.club', compact('clubs'));
    }
    // crate Club
    public function store(ClubRequest $clubRequest)
    {

        $clubRequest->validated();

        if ($clubRequest->hasFile('image')) {
            $imagePath = $clubRequest->file('image')->store('image', 'public');

        }
        $createClub = Club::create([
            'club' => $clubRequest->club,
            'image' => $imagePath,
            'discrption' => $clubRequest->discrption,
        ]);
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
        $clubRequest->validated();
        if ($clubRequest->hasFile('image')) {
            $imagePath = $clubRequest->file('image')->store('image', 'public');

        } else {
            $imagePath = $clubRequest->input('image');
        }
        $updateClub = $club->update(
            [
                'club' => $clubRequest->club,
                'image' => $imagePath,
                'discrption' => $clubRequest->discrption,

            ]
        );
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

        $club->delete();
        return redirect()->back()->with([
            'message' => 'club supprimer avec succès',
            'success' => true,
        ]);

    }
}