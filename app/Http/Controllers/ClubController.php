<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Rating;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Services\ClubServices;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{

    public function __construct(
        protected ClubServices $clubService
    ) {
    }

    public function index()
    {


        return view('client.club.club');
    }


    public function search(Request $request)
    {

        $searchTerm = $request->input('search');
        if ($searchTerm) {
            $clubs = Club::where('club', 'LIKE', "%{$searchTerm}%")->get();

        } else {

            $clubs = $this->clubService->dataClub();
        }


        return response()->json($clubs);
    }


    public function show($id)
    {

        // memebership
        $clubs = $this->clubService->find($id);

        //  frsit club
        $club = $this->clubService->findfail($id);

        //cateogrie
        $categories = $this->clubService->categorie($club->id);
        // event chaque club
        $events = $this->clubService->event($club->id);
        $images = null;
        $commentaires = null;
        $existingReservation = null;




        if ($events) {
            $existingReservation = $this->clubService->existingReservation($events->id);

            $images = $this->clubService->image($events->id);
            $commentaires = $this->clubService->commentaire($id, $events->id);

        }

        $rating_percentage=$this->clubService->rating_club_Avg($id);


        $rating=$this->clubService->rating_User($id);

        return view('client.categorie.categorie', compact('rating_percentage','rating','existingReservation', 'club', 'clubs', 'categories', 'events', 'images', 'commentaires'));


    }



}