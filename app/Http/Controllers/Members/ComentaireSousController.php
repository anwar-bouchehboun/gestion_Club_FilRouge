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
                'message' => ' Erorr ',
                'success' => false,
            ]);
        }

    }

    public function update(UpdateCometaireRequest $request, Comentaire $comentaire)
    {

        try {
            $data = $request->validated();
            $this->comentaireServices->update($data, $comentaire->id);

                 return redirect()->back()->with([
                     'message' => 'Commentire on a modifier',
                     'success' => true,
                 ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                'message' => ' Erorr ',
                'success' => false,
            ]);
        }





    }
    public function destroy(Comentaire $comentaire)
    {
        $this->comentaireServices->destroy($comentaire->id);
        return redirect()->back()->with([
            'message' => 'Commentire on a Supprimer',
            'success' => true,
        ]);

    }
}