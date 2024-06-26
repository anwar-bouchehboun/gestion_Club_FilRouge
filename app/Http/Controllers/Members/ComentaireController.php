<?php

namespace App\Http\Controllers\Members;

use App\Models\Club;
use App\Models\Event;
use App\Models\Comentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ComentaireServices;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CometaireRequest;
use App\Http\Requests\UpdateCometaireRequest;

class ComentaireController extends Controller
{

    public function __construct(protected ComentaireServices $comentaireServices)
    {

    }
    public function store(CometaireRequest $request)
    {
        try {

            $comentaire = $this->comentaireServices->store($request);
            return response()->json($comentaire);

        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => ' Erorr ',
                'success' => false,
            ]);
        }

    }

    public function update(UpdateCometaireRequest $request, Comentaire $comentaire)
    {

        try {
            $data = $request->validated();
            $comentaire = $this->comentaireServices->update($data, $comentaire->id);

            return response($comentaire, 200)->header('Content-Type', 'text/plain');
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => ' Erorr ',
                'success' => false,
            ]);
        }





    }
    public function destroy(Comentaire $comentaire)
    {
   try {
    $this->comentaireServices->destroy($comentaire->id);
    return response()->json(['commentId' => $comentaire->id], 200);

   } catch (\Throwable $th) {
    return redirect()->back()->with([
        'message' => 'Commentire ne pas Supprime Supprimer',
        'success' => false,
    ]);
   }


    }
}
