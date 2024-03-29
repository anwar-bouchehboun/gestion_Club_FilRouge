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

        $create = $categorieRequest->validated();


        //   dd($categorieRequest->all());
        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('image', 'public');

        }
        $createClub = Categorie::create([
            'name' => $categorieRequest->name,
            'image' => $imagePath,
            'club_id' => $categorieRequest->club_id,
            'discrption'=>$categorieRequest->discrption,
        ]);
        if ($createClub) {
            return redirect()->back()->with('success', 'categorie created');
        }
        // else {
        //     return redirect()->back()->with('error', 'Failed to create categorie');
        // }

    }
    // update catrgorie
    public function update(CategorieRequest $categorieRequest, Categorie $categorie)
    {
        // dd( $categorieRequest->all());
        $update = $categorieRequest->validated();
        if(!$update){
            return redirect()->back()->with('info', 'Problem validtion');

        }

        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('image', 'public');

        } else {
            $imagePath = $categorieRequest->input('image');
        }
        $updateCategorie = $categorie->update([
            'name' => $categorieRequest->name,
            'image' => $imagePath,
            'club_id' => $categorieRequest->club_id,
            'discrption'=>$categorieRequest->discrption,
        ]);
        if ($updateCategorie) {
            return redirect()->back()->with('success', 'categorie update');
        }

    }
    // delete categorie
    public function destroy(Categorie $categorie)
    {

        $categorie->delete();
        return redirect()->back()->with('success', 'Categorie Delleting');

    }
}