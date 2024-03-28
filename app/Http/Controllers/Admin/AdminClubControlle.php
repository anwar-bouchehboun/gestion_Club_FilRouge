<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Requests\ClubRequest;
use App\Http\Controllers\Controller;

class AdminClubControlle extends Controller
{
    public function index()
    {
        // $clubs = Club::all();
        $clubs = Club::paginate(3);
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
            return redirect()->back()->with('success', 'Club created');

        }

    }
//  Update club
    public function update(ClubRequest $clubRequest, Club $club)
    {

        $clubRequest->validated();
        if ($clubRequest->hasFile('image')) {
            $imagePath = $clubRequest->file('image')->store('image', 'public');

        } else {
            $imagePath = $clubRequest->input('image');
        }
     $updateClub  = $club->update(
            [
                'club' => $clubRequest->club,
                'image' => $imagePath,
                'discrption' => $clubRequest->discrption,

            ]
        );
        if ($updateClub) {
            return redirect()->back()->with('success', 'Club update');

        }

    }
    // delete club
    public function destroy(Club $club)
    {

        $club->delete();
        return redirect()->back()->with('success', 'Club Delleting');

    }
}