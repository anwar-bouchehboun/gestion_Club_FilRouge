<?php

namespace App\Http\Controllers;

use App\Services\SousCategorieServices;
use Illuminate\Http\Request;

class SouscategorieController extends Controller
{

    public function __construct(protected SousCategorieServices $sousCategorieServices){

    }
    public function index(){
        return view('client.sous.souscategrie');
    }
    public function show($id){
      $souscategories=  $this->sousCategorieServices->showsouscategorie($id);
        return view('client.sous.show',compact('souscategories'));
    }
}