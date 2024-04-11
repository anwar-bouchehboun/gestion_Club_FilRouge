<?php

namespace App\Repositories;

use App\Models\Club;
use App\Models\Membership;
use App\Interface\MemberInterface;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Auth;



class MemberRepository implements MemberInterface
{
    protected $member;
    public function __construct(Membership $membership)
    {
        $this->member = $membership;
    }
    public function store(MemberRequest $memberRequest)
    {

        $club_id = $memberRequest->input('club_id');
        $user_id = Auth::user()->id;
        $member= Membership::where('user_id', $user_id)->where('club_id', $club_id)->count();
        if($member>0){
           return 1;
        }else{
         Membership::create([
                        'club_id' => $club_id,
                        'user_id' => $user_id,
                        'status' => 1
                    ]);
                    return 0;
        }


    }


}