<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Services\ClubServices;

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

        $categories = $this->clubService->categorie($club->id);
        $events = $this->clubService->event($club->id);
        $images = null;
        $commentaires = null;
        $existingReservation = null;




        if ($events) {
            $existingReservation = $this->clubService->existingReservation($events->id);

            $images = $this->clubService->image($events->id);
            $commentaires = $this->clubService->commentaire($id, $events->id);

        }


        return view('client.categorie.categorie', compact('existingReservation', 'club', 'clubs', 'categories', 'events', 'images', 'commentaires'));


    }



}