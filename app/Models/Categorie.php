<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $cascadeDeletes = ['categorie'];

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'image',
        'club_id',
        'discrption',
    ];
    public function club(){
        return $this->belongsTo(Club::class,'club_id');
    }
    public function souscategorie(){
        return $this->hasMany(Souscategorie::class,'categorie_id');
    }

}