<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    //

    public function index(){
        return view('client.club');
    }
}
