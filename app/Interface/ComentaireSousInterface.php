<?php
namespace App\Interface;

use Illuminate\Http\Request;

// use App\Http\Requests\CometaireRequest;



interface ComentaireSousInterface{

    public function store(Request $request);

    public function update(array $data, $id);

    public function destroy($id);


}