<?php
namespace App\Repositories;

use
App\Interface\SousCategorieInterface;
use App\Models\Categorie;
use App\Models\Membership;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use Illuminate\Support\Facades\Auth;

class SousCategorieRepository implements SousCategorieInterface
{
    protected $souscategorie;

    public function __construct(Souscategorie $souscategorie)
    {
        $this->souscategorie = $souscategorie;
    }


    public function all()
    {
        return Souscategorie::with('categorie')->orderBy('id', 'desc')->paginate(3);

    }
    public function categorie()
    {
        return Categorie::all();
    }


    public function create(array $data)
    {
        return $this->souscategorie->create($data);
    }

    public function update(array $data, $id)
    {
        $categorie = $this->souscategorie->findOrFail($id);
        $categorie->update($data);
        return $categorie;
    }

    public function delete($id)
    {
        $categorie = $this->souscategorie->findOrFail($id);
        $categorie->delete();
        return $categorie;
    }
    public function find($id)
    {
        return Souscategorie::with('categorie')->where('categorie_id', $id)->get();
    }
    public function shwocategorie($id)
    {

        return Categorie::with('club')->where('id', $id)->first();

    }
    public function showsouscategorie($id)
    {

        return Souscategorie::with('categorie')->where('id', $id)->first();

    }
    public function findFail(Request $request)
    {
       $sous= Souscategorie::where('id', $request->sous)->first();

       $club=$this->shwocategorie($sous->categorie_id);

    $member= $this->MembershipValidtion($club->club_id);

       if($member==0){
        return 0;
       }else{
        return  $sous;

       }


    }
    public function reservesous($sousId)
    {

        $sous = Souscategorie::find($sousId);
        $user_id = Auth::user()->id;
        $reservation = new Reservation();
        $reservation->user_id = $user_id;
        $reservation->status = 1;
        $reservation->reservable()->associate($sous);
        $reservation->save();
        if ($reservation) {
            $reservation = Reservation::with('reservable')->where('id', $reservation->id)->first();
            return $reservation;
        }
    }
    public function MembershipValidtion($clubid){

        $member=Membership::where('club_id',$clubid)->where('user_id',Auth::User()->id)->count();

        return $member ;
    }


}