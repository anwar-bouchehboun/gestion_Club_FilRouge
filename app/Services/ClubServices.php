<?php

namespace App\Services;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Interface\ClubInterface;


class ClubServices
{


    public function __construct(
        protected ClubInterface $clubtRepository
    ) {
    }



    public function create(array $data)
    {
        return $this->clubtRepository->create($data);
    }

    public function update(array $data, $id)
    {

        return $this->clubtRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->clubtRepository->delete($id);
    }

    public function all()
    {
        return $this->clubtRepository->all();
    }
    public function dataClub()
    {
        return $this->clubtRepository->dataClub();
    }

    public function find($id)
    {

        return $this->clubtRepository->find($id);
    }
    public function categorie($id)
    {
        return $this->clubtRepository->categorie($id);
    }
    public function event($id)
    {
        return $this->clubtRepository->event($id);


    }
    public function image($id)
    {
        return $this->clubtRepository->image($id);

    }
    public function commentaire($id, $event)
    {
        return $this->clubtRepository->commentaire($id, $event);

    }
    public function findfail($id)
    {
        return $this->clubtRepository->findfail($id);
    }
    public function existingReservation($events)
    {
        return $this->clubtRepository->existingReservation($events);

    }

    public function storerating(Request $request)
    {
        return $this->clubtRepository->storerating($request);

    }
    public function rating_User($id)
    {
        return $this->clubtRepository->rating_User($id);
    }
    public function rating_club_Avg($id)
    {
        return $this->clubtRepository->rating_club_Avg($id);
    }

    public function event_club($id){
        return $this->clubtRepository->event_club($id);
    }
}