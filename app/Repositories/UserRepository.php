<?php

namespace App\Repositories;

use App\Interface\AuthInterface;
use App\Models\Client;
use App\Models\User;


class UserRepository implements AuthInterface
{
    protected $user;

    public function __construct(Client $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        return $this->user->all();
    }

    public function find($id)
    {
        return $this->user->find($id);
    }

    public function create(array $data)
    {
        return $this->user->create($data);
    }

    public function update(array $data,$id)
    {
        $user = $this->user->findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = $this->user->findOrFail($id);
        $user->delete();
        return $user;
    }
}