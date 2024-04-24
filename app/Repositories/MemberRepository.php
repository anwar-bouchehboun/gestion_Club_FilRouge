<?php

namespace App\Repositories;

use App\Models\Club;
use App\Mail\badgeEmail;
use App\Models\Membership;
use App\Interface\MemberInterface;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;



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

        // Check if the user is already a member
        $member = Membership::where('user_id', $user_id)->where('club_id', $club_id)->count();

        if ($member > 0) {
            return 1; // User is already a member
        } else {
            $user_member = Membership::create([
                'club_id' => $club_id,
                'user_id' => $user_id,
                'status' => 1
            ]);

            $user = Membership::with('club', 'users')->where('id', $user_member->id)->first();

            // Send email
            $subject = 'Badge Club';
            $body = $user->club->club;

            $userEmail = $user->users->email;
            Mail::to($userEmail)->send(new badgeEmail($subject, $body, $user));

            return 0; // Membership created and email sent successfully
        }




    }

    public function Reserve_Badge($subject, $body, $id)
    {

    }
}
