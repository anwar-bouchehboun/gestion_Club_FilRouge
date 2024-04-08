<?php
namespace App\Interface;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateEventRequest;

interface EventInterface
{
    public function all();

    public function find(Request $request);

    public function club();

    public function update(UpdateEventRequest $updateEventRequest, StoreImageRequest $storeImageRequest, $id);

    public function delete($id);

    public function reserveevent($eventId);
    
    public function store(StoreEventRequest $storeEventRequest, StoreImageRequest $storeImageRequest);
}
