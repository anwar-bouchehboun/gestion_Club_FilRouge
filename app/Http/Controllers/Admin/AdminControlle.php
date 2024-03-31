<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use App\Models\Event;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use App\Http\Controllers\Controller;

// use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminControlle extends Controller
{
    public function index()
    {
        //Stistique Chart js
        $clubs = Club::count();
        $events = Event::count();
        // $Notcategorie = Club::whereDoesntHave('categorie')->count();
        $categorie = Categorie::count();
        $Souscategorie = Souscategorie::count();
         $data="['club',".$clubs."],['categorie',".$categorie."],['Souscategorie',".$Souscategorie."],['Events',".$events."]";
        return view('admin.dashbord', compact('data'));
    }
}
