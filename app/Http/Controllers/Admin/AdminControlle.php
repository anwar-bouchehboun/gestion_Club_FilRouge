<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Carbon\Carbon;
use App\Models\Club;
use App\Models\Event;
use App\Models\Client;
use App\Models\Categorie;
use App\Models\Membership;
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
        $client=Client::count();
        $MemberClient = Membership::count();
        $currentDate = Carbon::today();
        $newClientsCount = Client::whereDate('created_at', '=', $currentDate)->count();
        $newClientsYesterdayCount = Client::whereDate('created_at', Carbon::yesterday())->count();
        $CountClientSous=Reservation::with('users')->where('reservable_type','App\Models\Souscategorie')->count();
        $CountClientSousYesterdayCount = Reservation::with('users')->whereDate('created_at', Carbon::yesterday())->where('reservable_type','App\Models\Souscategorie')->count();

        $CountClientEvent=Reservation::with('users')->where('reservable_type','App\Models\Event')->count();
        $CountClientEventYesterdayCount = Reservation::with('users')->whereDate('created_at', Carbon::yesterday())->where('reservable_type','App\Models\Event')->count();
        // $clubsWithCategoryCount = Club::withCount('categorie')->get();
    //     $arryclub = [];

    //     foreach ($clubsWithCategoryCount as $club) {
    //         $arryclub[] ="['club',".$club->club."],['categorie',".$club->categorie_count."]";
    //     }

    //     // dd($arryclub);

    //   $d=$clubsWithCategoryCount;
    //   dd($d);


        $categorie = Categorie::count();
        $Souscategorie = Souscategorie::count();
         $data="['club',".$clubs."],['categorie',".$categorie."],['Souscategorie',".$Souscategorie."],['Events',".$events."]";
        return view('admin.dashbord', compact('data','client','MemberClient','newClientsCount','newClientsYesterdayCount','CountClientSous','CountClientSousYesterdayCount','CountClientEvent','CountClientEventYesterdayCount'));
    }
}