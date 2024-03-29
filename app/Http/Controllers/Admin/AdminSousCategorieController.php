<?php

namespace App\Http\Controllers\Admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use App\Http\Controllers\Controller;
use App\Http\Requests\SousCategorieRequest;
use App\Http\Requests\UpdateSousCategorieRequest;

class AdminSousCategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $souscategories = Souscategorie::with('categorie')->orderBy('id', 'desc')->paginate(5);
        return view('admin.sous.sous', compact('categories','souscategories'));
    }

    public function store(SousCategorieRequest $sousCategorieRequest)
    {
        // dd($sousCategorieRequest->all());
        $sousCategorieRequest->validated();
        if ($sousCategorieRequest->hasFile('image')) {
            $imagePath = $sousCategorieRequest->file('image')->store('image', 'public');

        }
        $create = Souscategorie::create([
            'name'=>$sousCategorieRequest->name,
            'image'=>$imagePath,
            'price'=>$sousCategorieRequest->price,
            'categorie_id'=>$sousCategorieRequest->categorie_id,
            'discrption'=> $sousCategorieRequest->discrption,
        ]);
        if( $create){
            return redirect()->back()->with([
                'message' => 'SousCategorie créée avec succès',
                'success' => true,
            ]);
        }

    }

    public function update(UpdateSousCategorieRequest $sousCategorieRequest,Souscategorie $souscategorie)
    {
        // dd($sousCategorieRequest->all());
        $sousCategorieRequest->validated();
        if ($sousCategorieRequest->hasFile('image')) {
            $imagePath = $sousCategorieRequest->file('image')->store('image', 'public');

        } else {
            $imagePath = $sousCategorieRequest->input('image');
        }
        $update = $souscategorie->update([
            'name'=>$sousCategorieRequest->name,
            'image'=>$imagePath,
            'price'=>$sousCategorieRequest->price,
            'categorie_id'=>$sousCategorieRequest->categorie_id,
            'discrption'=> $sousCategorieRequest->discrption,
        ]);
        if( $update){
            return redirect()->back()->with([
                'message' => 'SousCategorie modifiée avec succès',
                'success' => true,
            ]);
        }

    }

    public function destroy(Souscategorie $souscategorie)

   {

        $souscategorie->delete();
        return redirect()->back()->with([
            'message' => 'Souscategorie supprimer avec succès',
            'success' => true,
        ]);

    }
}