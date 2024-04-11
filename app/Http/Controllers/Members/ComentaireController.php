<?php

namespace App\Http\Controllers\Members;

use App\Models\Club;
use App\Models\Event;
use App\Models\Comentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CometaireRequest;

class ComentaireController extends Controller
{
    public function store(CometaireRequest $request)
    {

        $valide = $request->validated();
        $event = Event::find($valide['event_id']);
        $club = Club::where('id', $event->club_id)->first();
        $comentaire = new Comentaire();
        $comentaire->user_id = Auth::User()->id;
        $comentaire->club_id = $club->id;
        $comentaire->contenu = $valide['contenu'];
        $comentaire->commentireable()->associate($event);
        $comentaire->save();



    }
}