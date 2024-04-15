<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Reservation extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    // protected $cascadeDeletes = ['reserve'];
    // protected $dates = ['deleted_at'];

    protected $fillable = [

        'user_id',
        'reservable',



    ];


    public function reservable()
    {
        return $this->morphTo();
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
