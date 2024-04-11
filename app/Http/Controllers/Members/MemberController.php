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
                return redirect()->back()->with([
                    'message' => 'vous aves deja members  Club ',
                    'success' => false,
                ]);
            } else if ($member === 0)  {

                return redirect()->back()->with([
                    'message' => 'Bien venu Club  avec succès',
                    'success' => true,
                ]);
            }
        } catch (\Throwable $th) {
            // throw $th;
        }





    }
}
