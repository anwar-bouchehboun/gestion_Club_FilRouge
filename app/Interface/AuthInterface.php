<?php
namespace App\Interface;

use Illuminate\Http\Request;



interface AuthInterface{

    public function all(Request $request);
    // public function search(Request $request);

    // public function find($id);

     public function create(array $data);

    public function update(array $data, $id);


    public function delete($id);
}