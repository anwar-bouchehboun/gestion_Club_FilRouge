<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comentaire extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    // protected $cascadeDeletes = ['users'];

    // protected $dates = ['deleted_at'];
    protected $fillable = [
        'club_id',
        'user_id',
        'commentireable',
    ];


    public function commentireable()
    {
        return $this->morphTo();
    }
    public function users(){
        return $this->belongsTo(User::class ,'user_id');
    }

}
