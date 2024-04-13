<?php

namespace App\Http\Controllers\Members;


use App\Models\Comentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\ComentaireSousServices;
use App\Http\Requests\UpdateCometaireRequest;

class ComentaireSousController extends Controller
{

    public function __construct(protected ComentaireSousServices $comentaireServices)
    {

    }
    public function store(Request $request)
    {
        try {
               $comentaire=  $this->comentaireServices->store($request);
                 return response($comentaire, 200)->header('Content-Type', 'text/plain');
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => ' Erorr ADD commentaire ',
                'success' => false,
            ]);
        }

    }

    public function update(UpdateCometaireRequest $request, Comentaire $comentairesou)
    {

        // try {
            $data = $request->validated();
  
           $comentaire= $this->comentaireServices->update($data, $comentairesou->id);

             return response($comentaire, 200)->header('Content-Type', 'text/plain');
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with([
        //         'message' => ' Erorr  update Commentaire',
        //         'success' => false,
        //     ]);
        // }





    }
    public function destroy(Comentaire $comentairesou)
    {
        $this->comentaireServices->destroy($comentairesou->id);
        return response()->json(['commentId' => $comentairesou->id], 200);

    }
}