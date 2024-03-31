<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Club;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;

class AdminEventController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        // $categories=Categorie::paginate(3);
         $events = Event::with('club')->orderBy('id', 'desc')->paginate(3);
        // dd($events);
        return view('admin.Event.event', compact('clubs','events'));
    }

    public function store(StoreEventRequest $storeEventRequest)
    {
        $validate=$storeEventRequest->validated();
        // $twoDaysAfter = Carbon::yesterday()->diffForHumans();
        // dd($twoDaysAfter);
        $crateevent=Event::create($validate);
        if ($crateevent) {
            return redirect()->back()->with([
                'message' => 'Event créée avec succès',
                'success' => true,
            ]);
        }

    }


    // delete
    public function destroy(Event $event)
    {

        $event->delete();
        return redirect()->back()->with([
            'message' => 'Event Suppimer avec succès',
            'success' => true,
        ]);

    }
}