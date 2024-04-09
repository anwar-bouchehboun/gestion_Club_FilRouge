<?php

namespace App\Http\Controllers;

use App\Services\SousCategorieServices;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function __construct(protected SousCategorieServices $sousCategorieServices ){

    }
    public function index(){
        return view('client.categorie.categorie');
    }
    public function show($id){
        
        $categories=  $this->sousCategorieServices->shwocategorie($id);

      $souscategories=  $this->sousCategorieServices->find($categories->id);

      return view('client.sous.souscategrie',compact('categories','souscategories'));

    }
}