<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Services\CateogireServices;

class AdminCatgorieController extends Controller
{


    public function __construct(protected CateogireServices $cateogireServices)
    {

    }



    public function index()
    {
     
        $categories = $this->cateogireServices->all();
        $clubs = $this->cateogireServices->club();
        // $clubs = $data['clubs'];
        // $categories = $data['categories'];

        // dd($categories);
        return view('admin.categorie.categorie', compact('clubs', 'categories'));
    }
    public function store(CategorieRequest $categorieRequest)
    {

        $create = $categorieRequest->validated();



        //   dd($categorieRequest->all());
        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('image', 'public');

        }
        $createClub = Categorie::create([
            'name' => $categorieRequest->name,
            'image' => $imagePath,
            'club_id' => $categorieRequest->club_id,
            'discrption' => $categorieRequest->discrption,
        ]);
        if ($createClub) {
            return redirect()->back()->with([
                'message' => 'Catégorie créée avec succès',
                'success' => true,
            ]);
        }
        // else {
        //     return redirect()->back()->with('error', 'Failed to create categorie');
        // }

    }
    // update catrgorie
    public function update(UpdateCategorieRequest $categorieRequest, Categorie $categorie)
    {
        // dd( $categorieRequest->all());
        $update = $categorieRequest->validated();


        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('image', 'public');

        } else {
            $imagePath = $categorieRequest->input('image');
        }
        $updateCategorie = $categorie->update([
            'name' => $categorieRequest->name,
            'image' => $imagePath,
            'club_id' => $categorieRequest->club_id,
            'discrption' => $categorieRequest->discrption,
        ]);
        if ($updateCategorie) {
            return redirect()->back()->with([
                'message' => 'Catégorie modifiée avec succès',
                'success' => true,
            ]);
        }

    }
    // delete categorie
    public function destroy(Categorie $categorie)
    {

        $categorie->delete();
        return redirect()->back()->with([
            'message' => 'Catégorie Suppimer avec succès',
            'success' => true,
        ]);

    }
}