<?php
namespace App\Repositories;

use App\Models\Club;
use App\Models\Event;
use App\Models\Image;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Interface\EventInterface;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateEventRequest;

class EventRepositroy implements EventInterface
{


    protected $event;
    public function __construct(Event $event)
    {
        $this->event = $event;
    }
    public function all()
    {
        return Event::with('club')->orderBy('id', 'desc')->paginate(4);
    }

    public function club()
    {
        return Club::all();
    }
    public function find(Request $request)
    {

      return Event::where('id',$request->event)->first();

    }

    // public function create(array $data){

    // }

    public function update(UpdateEventRequest $updateEventRequest, StoreImageRequest $storeImageRequest, $id)
    {
        $validatedData = $updateEventRequest->validated();
       $event=Event::findOrFail($id);

        $event->update($validatedData);

        if ($storeImageRequest->hasFile('image')) {
            foreach ($storeImageRequest->file('image') as $image) {
                $path = $image->store('image', 'public');
                $id->image()->create([
                    'image' => $path,
                ]);
            }
        }


    }

    public function delete($id)
    {
        $event = $this->event->findOrFail($id);
        $event->delete();
        return $event;
    }

    public function store(StoreEventRequest $storeEventRequest, StoreImageRequest $storeImageRequest)
    {

        $validate = $storeEventRequest->validated();
        $validateimage = $storeImageRequest->validated();

        if ($storeImageRequest->hasFile('image')) {
            $crateevent = Event::create($validate);
            foreach ($storeImageRequest->file('image') as $image) {
                $path = $image->store('image', 'public');
              $crateevent->image()->create([
                    // 'path' => $path,
                    'image' => $path,
                ]);
            }

        }

    }
    public function reserveevent($eventId){
        $event = Event::find($eventId);
        $user_id = Auth::user()->id;
        $reservation = new Reservation();
        $reservation->user_id = $user_id;
        $reservation->status = 1;
        $reservation->reservable()->associate($event);
        $reservation->save();
        if ($reservation) {
               $reservation=Reservation::with('reservable')->where('id',$reservation->id)->first();
               return $reservation;
        }
    }



}