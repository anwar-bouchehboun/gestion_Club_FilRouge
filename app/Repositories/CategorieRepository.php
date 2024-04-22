<?php
namespace App\Repositories;

use App\Models\Club;
use App\Models\Categorie;
use App\Interface\CategorieInterface;

class CategorieRepository implements CategorieInterface
{
    protected $categorie;
    public function __construct(Categorie $categorie)
    {
        $this->categorie = $categorie;
    }
    public function all()
    {
        return Categorie::with('club')->orderBy('id', 'desc')->get();

    }
    public function club()
    {
        return Club::all();
    }
    public function find($id)
    {
        return $this->categorie->find($id);
    }

    public function create(array $data)
    {
        return $this->categorie->create($data);
    }

    public function update(array $data, $id)
    {
        $categorie = $this->categorie->findOrFail($id);
        $categorie->update($data);
        return $categorie;
    }

    public function delete($id)
    {
        $categorie = $this->categorie->findOrFail($id);
        $categorie->delete();
        return $categorie;
    }
}