<?php
namespace App\Interface;

use Illuminate\Http\Request;



interface AuthInterface{

    public function all(Request $request);
    // public function search(Request $request);

    // public function find($id);
    public function Count();

    public function ClientCount();


    public function NowClient();

    public function YesterdayClient();

    public function CountClientSousYesterdayCount();

    public function CountClientSous();

    public function CountClientEvent();

    public function CountClientEventYesterdayCount();



     public function create(array $data);

    public function update(array $data, $id);


    public function delete($id);

    public function get_User();


}