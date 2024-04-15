<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use App\Interface\AuthInterface;


class UserRepository implements AuthInterface
{
    protected $user;

    public function __construct(Client $user)
    {
        $this->user = $user;
    }

    public function all(Request $request)
    {
        $searchTerm = $request->input('search');
        if ($searchTerm) {
            $data = Reservation::with('users', 'reservable')
                ->where('reservable_type', 'App\Models\Souscategorie')
                ->where(function ($query) use ($searchTerm) {
                    $query->whereHas('users', function ($userQuery) use ($searchTerm) {
                        $userQuery->where('name', 'LIKE', "%{$searchTerm}%");
                    })
                        ->orWhereHas('reservable', function ($reservableQuery) use ($searchTerm) {
                            $reservableQuery->where('name', 'LIKE', "%{$searchTerm}%");
                        });
                })
                ->get();

        } else {

            $data = Reservation::with('users', 'reservable')->where('reservable_type', 'App\Models\Souscategorie')->get();
        }

        return $data;
    }
    // public function search(Request $request)
    // {
    //     $searchTerm = $request->input('search');

    //     $data = Reservation::with('users', 'reservable')
    //         ->where('reservable_type', 'App\Models\Souscategorie')
    //         ->where(function ($query) use ($searchTerm) {
    //             $query->whereHas('users', function ($userQuery) use ($searchTerm) {
    //                     $userQuery->where('name', 'LIKE', "%{$searchTerm}%");
    //                 })
    //                 ->orWhereHas('reservable', function ($reservableQuery) use ($searchTerm) {
    //                     $reservableQuery->where('name', 'LIKE', "%{$searchTerm}%");
    //                 });
    //         })
    //         ->get();


    // }

    // public function find($id)
    // {
    //     return $this->user->find($id);
    // }

    // public function create(array $data)
    // {
    //     return $this->user->create($data);
    // }

    // public function update(array $data,$id)
    // {
    //     $user = $this->user->findOrFail($id);
    //     $user->update($data);
    //     return $user;
    // }

    // public function delete($id)
    // {
    //     $user = $this->user->findOrFail($id);
    //     $user->delete();
    //     return $user;
    // }
}