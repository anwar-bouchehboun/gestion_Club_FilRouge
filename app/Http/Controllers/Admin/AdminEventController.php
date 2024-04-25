<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Club;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Services\EventServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateEventRequest;

class AdminEventController extends Controller
{
    public function __construct(protected EventServices $eventServices)
    {

    }
    public function index()
    {
        if(Auth::User()->role=="admin"){
        $clubs = $this->eventServices->club();

        $events = $this->eventServices->all();
        }
        return view('admin.Event.event', compact('clubs', 'events'));
    }
    // insert event
    public function store(StoreEventRequest $storeEventRequest, StoreImageRequest $storeImageRequest)
    {
        if(Auth::User()->role=="admin"){
        $this->eventServices->store($storeEventRequest, $storeImageRequest);
        }
        return redirect()->back()->with([
            'message' => 'Event créée avec succès',
            'success' => true,
        ]);
        // }

    }
    // update
    public function update(Event $event, UpdateEventRequest $updateEventRequest, StoreImageRequest $storeImageRequest)
    {
        if(Auth::User()->role=="admin"){
        $this->eventServices->update($updateEventRequest,$storeImageRequest,$event->id);
        }
        return redirect()->back()->with([
            'message' => 'Event mis à jour avec succès',
            'success' => true,
        ]);
    }


    // delete
    public function destroy(Event $event)
    {
        if(Auth::User()->role=="admin"){
       $this->eventServices->delete($event->id);
        }
        return redirect()->route('event.index')->with([
            'message' => 'Event Suppimer avec succès',
            'success' => true,
        ]);

    }
    public function updateStatus($id){
        if(Auth::User()->role=="admin"){

       $this->eventServices->updateStatus($id);
    }
                return redirect()->route('event.index')->with([
                    'message' => 'Event Status update  avec succès',
                    'success' => true,
                ]);


    }
}