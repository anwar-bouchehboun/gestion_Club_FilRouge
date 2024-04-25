<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Event;
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

        try {
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
            // check deja reserve
            $existingReservation = $this->clubService->existingReservation($events->id);
            $images = $this->clubService->image($events->id);
            // affiche commentaire
            $commentaires = $this->clubService->commentaire($id, $events->id);
        }
        // rating club
        $rating_percentage=$this->clubService->rating_club_Avg($id);
        $rating=$this->clubService->rating_User($id);
        $data_events=   $this->clubService->event_club($id);

        return view('client.categorie.categorie', compact('data_events','rating_percentage','rating','existingReservation', 'club', 'clubs', 'categories', 'events', 'images', 'commentaires'));


        } catch (\Throwable $th) {
            return view('error.404');
        }


    }



}