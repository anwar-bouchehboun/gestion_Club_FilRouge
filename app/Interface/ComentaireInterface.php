<?php
namespace App\Interface;

use App\Http\Requests\CometaireRequest;



interface ComentaireInterface{

    public function store(CometaireRequest $request);

}
