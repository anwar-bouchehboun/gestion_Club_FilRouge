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
        try {
            $data = $categorieRequest->validated();
            if ($categorieRequest->hasFile('image')) {
                $data['image'] = $categorieRequest->file('image')->store('image', 'public');

            }
            $createClub = $this->cateogireServices->create($data);
            if ($createClub) {
                return redirect()->back()->with([
                    'message' => 'Catégorie créée avec succès',
                    'success' => true,
                ]);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est produite lors de la création du categorie. Veuillez réessayer.',
                'success' => false,
            ]);
        }



    }
    // update catrgorie
    public function update(UpdateCategorieRequest $categorieRequest, Categorie $categorie)
    {

        try {
            $data = $categorieRequest->validated();
            if ($categorieRequest->hasFile('image')) {
                $data['image'] = $categorieRequest->file('image')->store('image', 'public');

            } else {
                $data['image'] = $categorieRequest->input('image');
            }
            $updateCategorie = $this->cateogireServices->update($data, $categorie->id);

            if ($updateCategorie) {
                return redirect()->back()->with([
                    'message' => 'Catégorie modifiée avec succès',
                    'success' => true,
                ]);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est produite lors de la Modifiection du categorie. Veuillez réessayer.',
                'success' => false,
            ]);
        }

    }
    // delete categorie
    public function destroy(Categorie $categorie)
    {

        try {
            $this->cateogireServices->delete($categorie->id);

            return redirect()->back()->with([
                'message' => 'Catégorie Suppimer avec succès',
                'success' => true,
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => 'Une erreur s\'est produite lors de la Supprimer  du club. Veuillez réessayer.',
                'success' => false,
            ]);
        }

    }
}
