<?php
namespace App\Interface;

use App\Http\Requests\CometaireRequest;



interface ComentaireInterface{

    public function store(CometaireRequest $request);

    public function update(array $data, $id);

    public function destroy($id);

}
