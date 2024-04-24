<?php
namespace App\Interface;

use App\Http\Requests\MemberRequest;

interface MemberInterface
{

    public function store(MemberRequest $memberRequest);
    public function Reserve_Badge($subject, $body, $id);
}