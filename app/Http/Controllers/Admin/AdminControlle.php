<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Club;
use App\Models\Event;
use App\Models\Client;
use App\Models\Categorie;
use App\Models\Membership;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use App\Services\UserService;
use App\Interface\AuthInterface;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

// use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminControlle extends Controller
{
    public function __construct(protected UserService $userService)
    {

    }
    public function index()
    {

        //Stistique Chart js
        $data = $this->userService->Count();

        //  statsitque cards
        $client = $this->userService->ClientCount();
        $MemberClient = Membership::count();
        //register
        $newClientsCount = $this->userService->NowClient();
        $newClientsYesterdayCount = $this->userService->YesterdayClient();
        //rerser Sous
        $CountClientSous = $this->userService->CountClientSous();
        $CountClientSousYesterdayCount = $this->userService->CountClientSousYesterdayCount();
        //reseve event
        $CountClientEvent = $this->userService->CountClientEvent();
        $CountClientEventYesterdayCount = $this->userService->CountClientEventYesterdayCount();

        // reservecountEvent
        $reserve = $this->userService->get_rservation_Event();
        // compact reservecountEvent
        $reservationCounts = $reserve['reservationCounts'];
        $reservationNames = $reserve['reservationNames'];

        return view('admin.dashbord', compact('data', 'client', 'MemberClient', 'newClientsCount', 'newClientsYesterdayCount', 'CountClientSous', 'CountClientSousYesterdayCount', 'CountClientEvent', 'CountClientEventYesterdayCount', "reservationCounts", "reservationNames"));
    }
}
















// $clubsWithCategoryCount = Club::withCount('categorie')->get();
//     $arryclub = [];

//     foreach ($clubsWithCategoryCount as $club) {
//         $arryclub[] ="['club',".$club->club."],['categorie',".$club->categorie_count."]";
//     }

//     // dd($arryclub);

//   $d=$clubsWithCategoryCount;
//   dd($d);