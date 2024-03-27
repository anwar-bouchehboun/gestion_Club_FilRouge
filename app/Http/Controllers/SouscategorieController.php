<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SouscategorieController extends Controller
{
    public function index(){
        return view('client.sous.souscategrie');
    }
    public function show(){
        return view('client.sous.show');
    }
}