<?php
namespace App\Services;

use App\Interface\CategorieInterface;

class CateogireServices 
{
    public function __construct(protected CategorieInterface $categorieInterface)
    {
    }

    public function all()
    {
        return $this->categorieInterface->all();
    }
    public function club()
    {
        return $this->categorieInterface->club();
    }
    public function create($data){
        return $this->categorieInterface->create($data);
    }
    public function update(array $data, $id)
    {

        return $this->categorieInterface->update($data, $id);
    }

    public function delete($id)
    {
        return $this->categorieInterface->delete($id);
    }

    public function find($id)
    {
        return $this->categorieInterface->find($id);
    }

}