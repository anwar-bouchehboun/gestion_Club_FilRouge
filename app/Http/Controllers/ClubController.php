<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    //

    public function index(){
        return view('client.club');
    }
    // public function show(){
    //     return view('client.categorie.categorie');
    // }
}