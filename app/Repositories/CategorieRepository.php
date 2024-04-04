<?php
namespace App\Repositories;
use App\Models\Club;
use App\Models\Categorie;
use App\Interface\CategorieInterface;

class CategorieRepository implements CategorieInterface{
    protected $categorie;
    public function __construct(Categorie $categorie){
        $this->categorie=$categorie;
    }
    public function all(){

        return Categorie::with('club')->orderBy('id', 'desc')->paginate(3);

    }
   public function club(){
    return Club::all();
   }
    public function find($id){

    }

    public function create(array $data){

    }

    public function update(array $data,$id){

    }

    public function delete($id){

    }
}