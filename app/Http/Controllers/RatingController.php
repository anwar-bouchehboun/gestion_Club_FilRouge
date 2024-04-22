<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Services\ClubServices;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function __construct(
        protected ClubServices $clubService
    ) {
    }
    public function store(Request $request)
    {
       $rating=$this->clubService->storerating($request);
        return response()->json($rating);

    }
}
