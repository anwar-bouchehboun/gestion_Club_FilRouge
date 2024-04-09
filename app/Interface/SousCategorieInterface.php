<?php
namespace App\Interface;

use Illuminate\Http\Request;

interface SousCategorieInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function categorie();

    public function shwocategorie($id);

    public function showsouscategorie($id);

    public function reservesous($sousId);

    public function findFail(Request $request);

}