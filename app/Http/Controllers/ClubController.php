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
        // try {
            $clubs = $this->clubService->find($id);

            $categories = $this->clubService->categorie($clubs->id);
             $events = $this->clubService->event($clubs->id);
             $images = null;
           if($events){
            $images = $this->clubService->image($events->id);
           }

            return view('client.categorie.categorie', compact('clubs', 'categories','events','images'));


    }



}