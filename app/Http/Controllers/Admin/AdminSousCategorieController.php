<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSousCategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        // $categories=Categorie::paginate(3);
        // dd($categories);
        return view('admin.sous.sous',compact('categories'));
    }
    public function store(){
        
    }
}