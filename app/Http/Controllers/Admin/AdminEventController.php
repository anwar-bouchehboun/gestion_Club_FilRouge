<?php

namespace App\Http\Controllers\Admin;

use App\Services\EventServices;
use Carbon\Carbon;
use App\Models\Club;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $clubs = $this->eventServices->club();

        $events = $this->eventServices->all();

        return view('admin.Event.event', compact('clubs', 'events'));
    }
    // insert event
    public function store(StoreEventRequest $storeEventRequest, StoreImageRequest $storeImageRequest)
    {
        $this->eventServices->store($storeEventRequest, $storeImageRequest);

        return redirect()->back()->with([
            'message' => 'Event créée avec succès',
            'success' => true,
        ]);
        // }

    }
    // update
    public function update(Event $event, UpdateEventRequest $updateEventRequest, StoreImageRequest $storeImageRequest)
    {

        $this->eventServices->update($updateEventRequest,$storeImageRequest,$event->id);

        return redirect()->back()->with([
            'message' => 'Event mis à jour avec succès',
            'success' => true,
        ]);
    }


    // delete
    public function destroy(Event $event)
    {

       $this->eventServices->delete($event->id);
        return redirect()->route('event.index')->with([
            'message' => 'Event Suppimer avec succès',
            'success' => true,
        ]);

    }
}
