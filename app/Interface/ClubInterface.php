<?php
namespace App\Interface;



interface ClubInterface{
    public function all();
    public function dataClub();

    public function find($id);
    public function categorie($id);

    public function create(array $data);

    public function update(array $data,$id);

    public function delete($id);
}
