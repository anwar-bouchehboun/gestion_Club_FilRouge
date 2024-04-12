<?php

namespace App\Services;

use App\Models\Club;
use App\Interface\ComentaireInterface;
use App\Http\Requests\CometaireRequest;


class ComentaireServices
{


    public function __construct(
        protected ComentaireInterface $comentaireInterface
    ) {
    }



    public function store(CometaireRequest $request)
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