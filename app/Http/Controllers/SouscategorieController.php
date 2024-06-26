<?php

namespace App\Http\Controllers;

use App\Services\SousCategorieServices;
use Illuminate\Http\Request;

class SouscategorieController extends Controller
{

    public function __construct(protected SousCategorieServices $sousCategorieServices)
    {

    }
    public function index()
    {
        return view('client.sous.souscategrie');
    }
    public function show($id)
    {
        try {
            $souscategories = $this->sousCategorieServices->showsouscategorie($id);

            $categories = $this->sousCategorieServices->shwocategorie($souscategories->categorie_id);

            $existingReservation = $this->sousCategorieServices->existingReservation($id);
            // dd($existingReservation);
            // $member = $this->sousCategorieServices->MembershipValidtion($categories->club_id);

            return view('client.sous.show', compact('souscategories', 'existingReservation'));
        } catch (\Throwable $th) {
            return view('error.404');
        }

    }
}