<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\SousCategorieServices;
use App\Http\Requests\SousCategorieRequest;
use App\Http\Requests\UpdateSousCategorieRequest;

class AdminSousCategorieController extends Controller
{

    public function __construct(protected SousCategorieServices $sousCategorieServices)
    {

    }

    public function index()
    {
        if (Auth::User()->role == "admin") {
            $categories = $this->sousCategorieServices->categorie();
            $souscategories = $this->sousCategorieServices->all();
        }
        return view('admin.sous.sous', compact('categories', 'souscategories'));
    }

    public function store(SousCategorieRequest $sousCategorieRequest)
    {
        try {
            if (Auth::User()->role == "admin") {

                $data = $sousCategorieRequest->validated();
                if ($sousCategorieRequest->hasFile('image')) {
                    $data['image'] = $sousCategorieRequest->file('image')->store('image', 'public');

                }

                $this->sousCategorieServices->create($data);
            }

            return redirect()->back()->with([
                'message' => 'SousCategorie créée avec succès',
                'success' => true,
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est  lors de la Create   du Sous catgorie. Veuillez réessayer.',
                'success' => false,
            ]);
        }



    }

    public function update(UpdateSousCategorieRequest $sousCategorieRequest, Souscategorie $souscategorie)
    {
        try {
            if (Auth::User()->role == "admin") {
                $data = $sousCategorieRequest->validated();
                if ($sousCategorieRequest->hasFile('image')) {
                    $data['image'] = $sousCategorieRequest->file('image')->store('image', 'public');

                } else {
                    $data['image'] = $sousCategorieRequest->input('image');
                }

                $this->sousCategorieServices->update($data, $souscategorie->id);

            }
            return redirect()->back()->with([
                'message' => 'SousCategorie modifiée avec succès',
                'success' => true,
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est p lors de la modifier   du Sous catgorie. Veuillez réessayer.',
                'success' => false,
            ]);
        }



    }

    public function destroy(Souscategorie $souscategorie)
    {

        try {
            if(Auth::User()->role=="admin"){
            $this->sousCategorieServices->delete($souscategorie->id);
            }
            return redirect()->route('souscategorie.index')->with([
                'message' => 'Souscategorie supprimer avec succès',
                'success' => true,
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est  lors de la Supprimer  du Sous categorie. Veuillez réessayer.',
                'success' => false,
            ]);
        }



    }
}
