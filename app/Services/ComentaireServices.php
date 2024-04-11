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



   public function store(CometaireRequest $request){
      $this->comentaireInterface->store($request);
   }

}
