<?php

namespace App\Services;

use Illuminate\Http\Request;
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


    public function find(Request $request)
    {
        return $this->eventInterface->find($request);
    }

    public function reserveevent($request){
       return $this->eventInterface->reserveevent($request);
    }

    public function Event_club($id){
        return $this->eventInterface->Event_club($id);
    }
    public function Reserve_Ticket($subject,$body,$id){
        return $this->eventInterface->Reserve_Ticket($subject,$body,$id);

    }
    public function updateStatus($id){
        return $this->eventInterface->updateStatus($id);
    }
}