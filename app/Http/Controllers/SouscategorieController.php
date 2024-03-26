<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SouscategorieController extends Controller
{
    public function index(){
        return view('client.souscategrie');
    }
}
