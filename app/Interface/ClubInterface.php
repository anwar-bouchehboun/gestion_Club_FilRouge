<?php
namespace App\Interface;
use Illuminate\Http\Request;



interface ClubInterface{
    public function all();

    public function dataClub();

    public function find($id);

    public function findfail($id);


    public function categorie($id);

    public function create(array $data);

    public function update(array $data,$id);

    public function delete($id);

    public function event($id);

    public function image($id);

    public function commentaire($id,$event);

    public function existingReservation($events);

    public function storerating(Request $request);

    public function rating_User($id);

    public function rating_club_Avg($id);

    public function event_club($id);
}
