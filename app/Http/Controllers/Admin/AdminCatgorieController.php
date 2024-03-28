<?php

namespace App\Http\Controllers\Admin;

use App\Models\Club;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;

class AdminCatgorieController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        // $categories=Categorie::paginate(3);
        $categories = Categorie::with('club')->orderBy('id', 'desc')->paginate(3);
        // dd($categories);
        return view('admin.categorie.categorie', compact('clubs', 'categories'));
    }
    public function store(CategorieRequest $categorieRequest)
    {

       $create= $categorieRequest->validated();
        //   dd($categorieRequest->all());
        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('image', 'public');

        }
        $createClub = Categorie::create($create);
        if ($createClub) {
            return redirect()->back()->with('success', 'categorie created');

        }

    }
    // update catrgorie
    public function update(CategorieRequest $categorieRequest, Categorie $categorie)
    {
        // dd( $categorieRequest->all());
    $update=    $categorieRequest->validated();

        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('image', 'public');

        } else {
            $imagePath = $categorieRequest->input('image');
        }
        $updateCategorie = $categorie->update($update );
        if ($updateCategorie) {
            return redirect()->back()->with('success', 'Club update');
        }

    }
    // delete categorie
    public function destroy(Categorie $categorie)
    {

        $categorie->delete();
        return redirect()->back()->with('success', 'Club Delleting');

    }
}
