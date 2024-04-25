<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Models\Club;
use App\Models\User;
use App\Models\Event;
use App\Models\Client;
use App\Models\Categorie;
use App\Models\Membership;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Souscategorie;
use App\Interface\AuthInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\UpdateProfileRequest;

class UserRepository implements AuthInterface
{
    protected $user;

    public function __construct(Client $user)
    {
        $this->user = $user;
    }

    // search admin
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

    public function create(array $data)
    {
        return $this->user->create($data);
    }
    
    public function update(array $data, $id)
    {    //profile
        $user = $this->user->findOrFail($id);
        $user->update($data);
        return $user;
    }

    // Admin
    public function delete($id)
    {
        $user = $this->user->findOrFail($id);
        $user->delete();
        return $user;
    }


    public function Count()
    {
        $clubs = Club::count();
        $events = Event::count();
        $categorie = Categorie::count();
        $Souscategorie = Souscategorie::count();
        $data = "['club'," . $clubs . "],['categorie'," . $categorie . "],['Souscategorie'," . $Souscategorie . "],['Events'," . $events . "]";
        return $data;

    }
    public function ClientCount()
    {
        return Client::count();
    }


    public function NowClient()
    {
        $currentDate = Carbon::today();
        $newClientsCount = Client::whereDate('created_at', '=', $currentDate)->count();
        return $newClientsCount;
    }

    public function YesterdayClient()
    {
        $newClientsYesterdayCount = Client::whereDate('created_at', Carbon::yesterday())->count();
        return $newClientsYesterdayCount;

    }

    public function CountClientSousYesterdayCount()
    {
        $CountClientSousYesterdayCount = Reservation::with('users')->whereDate('created_at', Carbon::yesterday())->where('reservable_type', 'App\Models\Souscategorie')->count();
        // dd($CountClientSousYesterdayCount);
        return $CountClientSousYesterdayCount;
    }

    public function CountClientSous()
    {
        $CountClientSous = Reservation::with('users')->where('reservable_type', 'App\Models\Souscategorie')->count();
        return $CountClientSous;

    }

    public function CountClientEvent()
    {
        $CountClientEvent = Reservation::with('users')->where('reservable_type', 'App\Models\Event')->count();
        return $CountClientEvent;
    }

    public function CountClientEventYesterdayCount()
    {
        $CountClientEventYesterdayCount = Reservation::with('users')->whereDate('created_at', Carbon::yesterday())->where('reservable_type', 'App\Models\Event')->count();
        return $CountClientEventYesterdayCount;
    }
    public function get_User()
    {
        return User::where('id', Auth::User()->id)->first();
    }

    public function Set_Pssword(Request $request)
    {

        $userId = auth()->user()->id;
        $validPasswoed = $request->validate([
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        if (isset($validPasswoed['password'])) {
            $validPasswoed['password'] = Hash::make($validPasswoed['password']);
        }
        $profile = User::where('id', $userId)->firstOrFail();
        return $profile->update($validPasswoed);
    }


    public function updateprofile(UpdateProfileRequest $request)
    {

        $validatedData = $request->validated();


        $userId = Auth::user()->id;
        $user = User::find($userId);

        return $user->update($validatedData);

    }
    public function get_User_Club()
    {

        $memberUser = Membership::with('users', 'club')->where('user_id', Auth::User()->id)->get();
        return $memberUser;
    }
    public function deleteclub(Request $request)
    {
        $userId = $request->userId;
        $membership = Membership::where('user_id', Auth::user()->id)->findOrFail($userId);
        return $membership->delete();

    }
    public function destroy($id)
    {
        //  for Sous Categorie
        $userDelete = Reservation::findOrFail($id);
        return $userDelete->delete();


    }

    public function get_DataUser_Souscategorie()
    {
        return Reservation::with('users', 'reservable')->where('user_id', Auth::User()->id)
            ->where('reservable_type', 'App\Models\Souscategorie')->get();
    }
    public function get_rservation_Event()
    {
        $statsitque_reserve_event = Reservation::select(DB::raw("count(reservable_id) as reservation_count"), "events.name")
            ->with("reservable")
            ->join("events", "reservations.reservable_id", "=", "events.id")
            ->groupBy("events.name")
            ->get();

        $reservationCounts = [];
        $reservationNames = [];

        foreach ($statsitque_reserve_event as $reservation) {

            $count = $reservation->reservation_count;

            $reservationCounts[] = $count;
        }
        foreach ($statsitque_reserve_event as $reservation) {

            $name = $reservation->name;

            $reservationNames[] = $name;
        }
        return compact('reservationNames','reservationCounts');
    }
}