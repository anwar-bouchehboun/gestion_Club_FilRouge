<?php
namespace App\Services;
use App\Repositories\RepositoryInterface;
class UserService
{
    public function __construct(
        protected RepositoryInterface $clientRepository
    ) {
    }

    public function create(array $data)
    {
        return $this->clientRepository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->clientRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->clientRepository->delete($id);
    }

    // public function all()
    // {
    //     return $this->clientRepository->all();
    // }

    public function find($id)
    {
        return $this->clientRepository->find($id);
    }
}