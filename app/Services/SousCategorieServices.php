<?php
namespace App\Services;

use Illuminate\Http\Request;
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
    public function shwocategorie($id){
        return $this->sousCategorieInterface->shwocategorie($id);
    }
    public function showsouscategorie($id){
        return $this->sousCategorieInterface->showsouscategorie($id);

    }
    public function reservesous($request){


        return $this->sousCategorieInterface->reservesous($request);


    }
    public function findFail(Request $request)
    {
        // dd($request);
        return $this->sousCategorieInterface->findFail($request);
    }
    public function MembershipValidtion($clubid){
        return $this->sousCategorieInterface->MembershipValidtion($clubid);

    }
    public function SouscaegoriePayer($id){
        return $this->sousCategorieInterface->SouscaegoriePayer($id);
    }
    public function existingReservation($sous){
        return $this->sousCategorieInterface->existingReservation($sous);
    }
}