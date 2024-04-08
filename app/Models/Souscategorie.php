<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Souscategorie extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'price',
        'categorie_id',
        'discrption',
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class,'categorie_id');
    }
    public function reserves(): MorphMany
    {
        return $this->morphMany(Reservation::class, 'reservable');
    }

}
