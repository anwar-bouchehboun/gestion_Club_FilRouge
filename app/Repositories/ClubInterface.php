<?php

namespace App\Repositories;

use App\Models\Club;

interface ClubInterface
{


    public function find($id);

    public function create(array $data);

    public function update(array $data,$id);

    public function delete($id);
}