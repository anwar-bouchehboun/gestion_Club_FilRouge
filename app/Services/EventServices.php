<?php

namespace App\Services;

use App\Interface\EventInterface;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateEventRequest;

class EventServices
{
    public function __construct(protected EventInterface $eventInterface)
    {

    }

    public function store(StoreEventRequest $storeEventRequest, StoreImageRequest $storeImageRequest)
    {
        $this->eventInterface->store($storeEventRequest, $storeImageRequest);
    }

    public function update(UpdateEventRequest $updateEventRequest, StoreImageRequest $storeImageRequest, $id)
    {

        return $this->eventInterface->update($updateEventRequest, $storeImageRequest, $id);
    }

    public function delete($id)
    {
        return $this->eventInterface->delete($id);
    }

    public function all()
    {
         return $this->eventInterface->all();
    }

    public function club(){
        return $this->eventInterface->club();
    }


    public function find($id)
    {
        return $this->eventInterface->find($id);
    }
}
