<?php

namespace App\Repositories;

use App\Interface\ClubInterface;
use App\Models\Club;


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

    public function find($id)
    {
        return $this->club->find($id);
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
