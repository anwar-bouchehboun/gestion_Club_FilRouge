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
        $categories=Categorie::with('club')->paginate(3);
        // dd($categories);
        return view('admin.categorie.categorie',compact('clubs','categories'));
    }
    public function store(CategorieRequest $categorieRequest)
    {

        $categorieRequest->validated();
//   dd($categorieRequest->all());
        if ($categorieRequest->hasFile('image')) {
            $imagePath = $categorieRequest->file('image')->store('image', 'public');

        }
        $createClub = Categorie::create([
            'name'=>$categorieRequest->name,
            'club_id' => $categorieRequest->club_id,
            'image' => $imagePath,
            'discrption' => $categorieRequest->discrption,
        ]);
        if ($createClub) {
            return redirect()->back()->with('success', 'categorie created');

        }

    }

}
