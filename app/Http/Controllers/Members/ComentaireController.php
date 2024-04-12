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
            $this->comentaireServices->store($request);
            return redirect()->back();
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