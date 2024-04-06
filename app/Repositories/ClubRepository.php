<?php

namespace App\Repositories;

use App\Models\Club;
use App\Models\Categorie;
use App\Interface\ClubInterface;


class ClubRepository implements ClubInterface
{
    protected $club;
    public function __construct(Club $club)
    {
        $this->club = $club;
    }
    public function all()
    {
        return Club::orderBy('id', 'desc')->paginate(4);
    }
    public function dataClub()
    {
        return Club::paginate(6);
    }

    public function find($id)
    {
        $club = Club::where('id', $id)->first();

        return $club;

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

}