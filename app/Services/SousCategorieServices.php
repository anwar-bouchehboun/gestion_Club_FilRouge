<?php
namespace App\Services;

use App\Interface\SousCategorieInterface;

class SousCategorieServices
{
    public function __construct(protected SousCategorieInterface $sousCategorieInterface)
    {

    }

    public function create(array $data)
    {
        return $this->sousCategorieInterface->create($data);
    }

    public function update(array $data, $id)
    {

        return $this->sousCategorieInterface->update($data, $id);
    }

    public function delete($id)
    {
        return $this->sousCategorieInterface->delete($id);
    }

    public function all()
    {
        return $this->sousCategorieInterface->all();
    }
    public function categorie(){
        return $this->sousCategorieInterface->categorie();
    }

    public function find($id)
    {
        return $this->sousCategorieInterface->find($id);
    }
}