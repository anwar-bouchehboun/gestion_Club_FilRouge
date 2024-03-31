<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
// use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminControlle extends Controller
{
    public function index()
    {
        $clubs = Club::with('categorie')->count();
        $Notcategorie = Club::whereDoesntHave('categorie')->count();
        $categorie = Categorie::with('souscategorie')->count();
        $notSouscategorie = Categorie::whereDoesntHave('souscategorie')->count();
         $data="['club',".$clubs."],['ClubNotcategorie',".$Notcategorie."],['categorie',".$categorie."],['notSouscategorie',".$notSouscategorie."]";
        return view('admin.dashbord', compact('clients','data'));
    }
}