<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $cascadeDeletes = ['image'];

    protected $dates = ['deleted_at'];


    protected $fillable = [
        'name',
        'prix',
        'date',
        'local',
        'club_id',
        'discrption',
    ];




    public function image(){
        return $this->hasMany(Image::class,'event_id');
    }
    public function club(){
        return $this->belongsTo(Club::class,'club_id');
    }
    public function reserves(): MorphMany
    {
        return $this->morphMany(Reservation::class, 'reservable');
    }
}