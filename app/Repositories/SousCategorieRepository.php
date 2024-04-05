<?php
namespace App\Repositories;

use
App\Interface\SousCategorieInterface;
use App\Models\Categorie;
use App\Models\Souscategorie;

class SousCategorieRepository implements SousCategorieInterface
{
    protected $souscategorie;

    public function __construct(Souscategorie $souscategorie)
    {
        $this->souscategorie = $souscategorie;
    }


    public function all()
    {
        return Souscategorie::with('categorie')->orderBy('id', 'desc')->paginate(4);

    }
    public function categorie()
    {
       return $categories = Categorie::all();
    }
    public function find($id)
    {
        return $this->souscategorie->find($id);
    }

    public function create(array $data)
    {
        return $this->souscategorie->create($data);
    }

    public function update(array $data, $id)
    {
        $categorie = $this->souscategorie->findOrFail($id);
        $categorie->update($data);
        return $categorie;
    }

    public function delete($id)
    {
        $categorie = $this->souscategorie->findOrFail($id);
        $categorie->delete();
        return $categorie;
    }
}