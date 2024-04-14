<?php

namespace App\Http\Controllers;

use App\Models\Club;
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
        $clubs = $this->clubService->dataClub();


        return view('client.club.club', compact('clubs'));
    }

    public function show($id)
    {
         // memebership
         $clubs = $this->clubService->find($id);
        
        //  frsit club
        $club = $this->clubService->findfail($id);

        $categories = $this->clubService->categorie($club->id);
        // dd($categories);
        $events = $this->clubService->event($club->id);
        $images = null;
        $commentaires = null;
        if ($events) {
            $images = $this->clubService->image($events->id);
            $commentaires = $this->clubService->commentaire($id, $events->id);

        }

        //    dd($commentaires);
        return view('client.categorie.categorie', compact('club', 'clubs', 'categories', 'events', 'images', 'commentaires'));


    }



}