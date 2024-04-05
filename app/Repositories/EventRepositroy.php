<?php
namespace App\Repositories;

use App\Models\Club;
use App\Models\Event;
use App\Interface\EventInterface;
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
        return Event::with('club')->orderBy('id', 'desc')->paginate(3);
    }

    public function club()
    {
        return Club::all();
    }
    public function find($id)
    {

    }

    // public function create(array $data){

    // }

    public function update(UpdateEventRequest $updateEventRequest, StoreImageRequest $storeImageRequest, $id)
    {

    }

    public function delete($id)
    {

    }

    public function store(StoreEventRequest $storeEventRequest, StoreImageRequest $storeImageRequest)
    {

        $validate = $storeEventRequest->validated();
        $validateimage = $storeImageRequest->validated();

        if ($storeImageRequest->hasFile('image')) {
            $crateevent = Event::create($validate);
            foreach ($storeImageRequest->file('image') as $image) {
                $path = $image->store('image', 'public');
                $v = $crateevent->image()->create([
                    // 'path' => $path,
                    'image' => $path,
                ]);
            }

        }

    }

}