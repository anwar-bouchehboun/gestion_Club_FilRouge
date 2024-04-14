<?php

namespace App\Repositories;

use App\Models\Club;
use App\Models\Event;
use App\Models\Comentaire;
use App\Models\Membership;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Interface\ComentaireSousInterface;
use App\Models\Souscategorie;
use Illuminate\Http\Request as HttpRequest;

class ComentaireSousRepository implements ComentaireSousInterface
{
    protected $comentaire;
    public function __construct(Comentaire $comentaire)
    {
        $this->comentaire = $comentaire;
    }
    public function store(Request $request)
    {
        $valide = $request->all();
        // dd($valide);
        $sous = Souscategorie::find($valide['sous_id']);
        $club = Club::find($valide['club_id']);
        // dd($sous,$club,$valide);
        $this->all($valide['sous_id']);

        $member = Membership::where('club_id', $club->id)->where('user_id', Auth::user()->id)->count();

        if ($member === 1) {
            $comentaire = new Comentaire();
            $comentaire->user_id = Auth::User()->id;
            $comentaire->club_id = $club->id;
            $comentaire->contenu = $valide['contenu'];
            $comentaire->commentireable()->associate($sous);
            $comentaire->save();

            $data=Comentaire::with('users')->where('id',$comentaire->id)->first();

            return $data;
        } else {

            return 0;
        }
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
    public function destroy($id){
        $comentaire = $this->comentaire->findOrFail($id);
        if ($comentaire->user_id === Auth::user()->id && Auth::check()) {
        $comentaire->delete();
        return $comentaire;
        }
    }
    public function all($id){
       return Comentaire::with('users')->where('commentireable_id',$id)->orderBy('id','desc')->get();
    }

}