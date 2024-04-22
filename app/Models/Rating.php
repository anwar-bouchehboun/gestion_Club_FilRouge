<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
            'club_id',
            'rating',
            'user_id'
          ]
    ;

    public function users()
    {
        return $this->belongsTo(User::class ,'user_id');
    }

    public function club()
    {
        return $this->belongsTo(Club::class,'club_id');
    }
}
