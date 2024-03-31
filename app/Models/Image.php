<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'image',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}