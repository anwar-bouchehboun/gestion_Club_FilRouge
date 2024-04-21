<?php

namespace App\Repositories;

use App\Models\Club;
use App\Models\Event;
use App\Models\Comentaire;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;
use App\Interface\ComentaireInterface;
use App\Http\Requests\CometaireRequest;
use App\Models\Reservation;
use GuzzleHttp\Psr7\Request;

class ComentaireRepository implements ComentaireInterface
{
    protected $comentaire;
    public function __construct(Comentaire $comentaire)
    {
        $this->comentaire = $comentaire;
    }
    public function store(CometaireRequest $request)
    {
        $valide = $request->validated();
        $event_id = $valide['event_id'];

        $event = Event::find($event_id);

        if ($event) {
            $club = Club::where('id', $event->club_id)->first();
            $member = Reservation::where('reservable_id', $event->id)
                ->where('user_id', Auth::user()->id)
                ->count();
            if ($member === 1) {
                $comentaire = new Comentaire();
                $comentaire->user_id = Auth::User()->id;
                $comentaire->club_id = $club->id;
                $comentaire->contenu = $valide['contenu'];
                $comentaire->commentireable()->associate($event);
                $comentaire->save();
                $data = Comentaire::with('users')->where('id', $comentaire->id)->first();

                return $data;
            } else {

                return 0;
            }

        }


        // $member = Membership::where('club_id', $club->id)->where('user_id', Auth::user()->id)->count();

    }

    public function update(array $data, $id)
    {

        $comentaire = $this->comentaire->findOrFail($id);
        if ($comentaire->user_id === Auth::user()->id) {
            $comentaire->contenu = $data['contenu'];
            $comentaire->save();
            return $comentaire;
        }



    }
    public function destroy($id)
    {
        $comentaire = Comentaire::find($id);



        if ($comentaire->user_id === Auth::user()->id) {
            return $comentaire->delete();
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

}