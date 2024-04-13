<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Interface\ComentaireSousInterface;


class ComentaireSousServices
{


    public function __construct(
        protected ComentaireSousInterface $comentaireInterface
    ) {
    }



    public function store(Request $request)
    {
        return $this->comentaireInterface->store($request);
    }
    public function update(array $data, $id)
    {
        return  $this->comentaireInterface->update($data, $id);


    }
   public function destroy($id){
    return  $this->comentaireInterface->destroy($id);
   }
}