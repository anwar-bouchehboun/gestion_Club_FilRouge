<?php
namespace App\Services;

use Illuminate\Http\Request;
use App\Interface\AuthInterface;

class UserService
{
    public function __construct(
        protected AuthInterface $clientRepository
    ) {
    }

    // public function create(array $data)
    // {
    //     return $this->clientRepository->create($data);
    // }

    // public function update($id,array $data)
    // {
    //     return $this->clientRepository->update($data, $id);
    // }

    // public function delete($id)
    // {
    //     return $this->clientRepository->delete($id);
    // }

    public function all(Request $request)
    {
        return $this->clientRepository->all($request);
    }

    // public function search(Request $request){
    //     return $this->clientRepository->search($request);
    // }
    // public function find($id)
    // {
    //     return $this->clientRepository->find($id);
    // }
}