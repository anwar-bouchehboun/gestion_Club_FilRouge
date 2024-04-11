<?php
namespace App\Interface;

use App\Http\Requests\MemberRequest;

interface MemberInterface
{
  
    public function store(MemberRequest $memberRequest);

}
