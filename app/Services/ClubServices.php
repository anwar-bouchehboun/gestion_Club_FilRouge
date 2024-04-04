<?php

namespace App\Services;

use App\Models\Club;
use App\Repositories\ClubInterface;


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

    // public function all()
    // {
    //     return $this->clientRepository->all();
    // }

    public function find($id)
    {
        return $this->clubtRepository->find($id);
    }


}
