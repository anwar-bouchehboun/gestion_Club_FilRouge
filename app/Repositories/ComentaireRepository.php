<?php

namespace App\Repositories;

use App\Models\Club;
use App\Models\Event;
use App\Models\Comentaire;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;
use App\Interface\ComentaireInterface;
use App\Http\Requests\CometaireRequest;



class ComentaireRepository implements ComentaireInterface
{
    public function store(CometaireRequest $request)
    {
        $valide = $request->validated();

        $event = Event::find($valide['event_id']);
        $club = Club::where('id', $event->club_id)->first();
        $member = Membership::where('club_id', $club->id)->where('user_id', Auth::user()->id)->count();

        if ($member === 1) {
            $comentaire = new Comentaire();
            $comentaire->user_id = Auth::User()->id;
            $comentaire->club_id = $club->id;
            $comentaire->contenu = $valide['contenu'];
            $comentaire->commentireable()->associate($event);
            $comentaire->save();
        } else {

            return 0;
        }
    }
}
