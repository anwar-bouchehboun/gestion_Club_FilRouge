<?php

namespace App\Services;

use App\Models\Club;
use App\Interface\MemberInterface;
use App\Http\Requests\MemberRequest;



class MemberServices
{


    public function __construct(
        protected MemberInterface $memberInterface
    ) {
    }
    public function store(MemberRequest $memberRequest)
    {
        return $this->memberInterface->store($memberRequest);
    }






}