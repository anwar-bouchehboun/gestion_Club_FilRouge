<?php
namespace App\Interface;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateEventRequest;

interface EventInterface
{
    public function all();

    public function find($id);

    public function club();

    public function update(UpdateEventRequest $updateEventRequest, StoreImageRequest $storeImageRequest, $id);

    public function delete($id);



    public function store(StoreEventRequest $storeEventRequest, StoreImageRequest $storeImageRequest);
}
