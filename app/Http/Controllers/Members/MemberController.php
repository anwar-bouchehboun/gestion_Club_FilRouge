<?php

namespace App\Http\Controllers\Members;

use App\Models\Membership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MemberRequest;
use App\Services\MemberServices;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{

    public function __construct(protected MemberServices $memberServices)
    {

    }



    public function store(MemberRequest $memberRequest)
    {
        try {
            $member = $this->memberServices->store($memberRequest);

            if ($member === 1) {
                return response()->json($member);
            } else if ($member === 0) {

                return response()->json($member);
            }
        } catch (\Throwable $th) {
            // throw $th;
        }





    }
}