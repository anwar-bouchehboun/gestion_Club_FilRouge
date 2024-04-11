<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Club extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $cascadeDeletes = ['categorie','event','users'];

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'club',
        'image',
        'discrption',
    ];
    public function categorie(){
        return $this->hasMany(Categorie::class,'club_id');
    }
    public function event(){
        return $this->hasMany(Event::class,'club_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'user_id');
    }
}