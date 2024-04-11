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

class ComentaireController extends Controller
{

    public function __construct(protected ComentaireServices $comentaireServices){

    }
    public function store(CometaireRequest $request)
    {
         $this->comentaireServices->store($request);
    }
}
