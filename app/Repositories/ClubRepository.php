<?php

namespace App\Repositories;

use App\Models\Club;
use App\Models\Event;
use App\Models\Image;
use App\Models\Rating;
use App\Models\Categorie;
use App\Models\Comentaire;
use App\Models\Membership;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Interface\ClubInterface;
use Illuminate\Support\Facades\Auth;

class ClubRepository implements ClubInterface
{
    protected $club;
    public function __construct(Club $club)
    {
        $this->club = $club;
    }
    public function all()
    {
        return Club::orderBy('id', 'desc')->get();
    }
    public function dataClub()
    {

        return Club::all();
    }

    public function find($id)
    {

        if(Auth::check()){
            $club = Membership::with('club', 'users')
            ->where('club_id', $id)
            ->where('user_id', Auth::user()->id)
            ->count();

        return $club;

        }
        return null;




    }
    public function findfail($id)
    {
        return Club::where('id', $id)->first();
    }
    public function categorie($id)
    {

        return Categorie::where('club_id', $id)->get();
    }

    public function create(array $data)
    {
        return $this->club->create($data);
    }

    public function update(array $data, $id)
    {
        $club = $this->club->findOrFail($id);
        $club->update($data);
        return $club;
    }

    public function delete($id)
    {
        $club = $this->club->findOrFail($id);
        $club->delete();
        return $club;
    }
    public function event($id)
    {

        return Event::with('club')
            ->where('club_id', $id)
            ->orderBy('id', 'desc')
            ->first();


    }
    public function image($id)
    {
        return Image::where('event_id', $id)->get();


    }

    public function commentaire($id, $event)
    {
        return Comentaire::with('commentireable', 'users')
            ->where('club_id', $id)
            ->where('commentireable_id', $event)
            ->orderBy('id', 'desc')->get();
    }
    public function existingReservation($events)
    {
        if (Auth::check()) {
            $existingReservation = Reservation::where('user_id', Auth::User()->id)
                ->where('reservable_id', $events)
                ->where('reservable_type', 'App\Models\Event')
                ->count();
            return $existingReservation;
        }
        return null;

    }

    public function storerating(Request $request){
        $user = Auth::User()->id;
        $valide = $request->validate([
            'club_id' => "required",
            'rating' => "required",
        ]);
        $rating = Rating::create([
            'club_id' => $valide['club_id'],
            'rating' => $valide['rating'],
            'user_id' => $user
        ]);
        return $rating;
    }
    public function rating_User($id){

        if (Auth::check()) {
            $user = Auth::user();
            $rating=Rating::where('user_id',$user->id)->where('club_id', $id)->latest()->first();
            return $rating;
        }
        return null;
    }
    public function rating_club_Avg($id){

        $rating_club = Rating::where('club_id', $id)->avg('rating');
        $rating_percentage  = number_format($rating_club, 1);
        return $rating_percentage;
    }

}
