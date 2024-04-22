<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $user=Auth::User()->id;
        $valide = $request->validate([
            'club_id'=>"required",
            'rating'=>"required",
        ]);
           $c= Rating::create([
                'club_id'=>$valide['club_id'],
                'rating'=>$valide['rating'],
                'user_id'=>$user
            ]);


    }
}