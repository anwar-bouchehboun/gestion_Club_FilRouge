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
        $clubs = $this->clubService->find($id);
        $cateogires=$this->clubService->categorie($id);
        $events=$this->clubService->event($id);
        $images=$this->clubService->image($id);

              return view('client.categorie.categorie', compact('cateogires','clubs','events','images'));
    }


}
