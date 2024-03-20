<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($admin) {
            $admin->forceFill(['type' => self::class]);
        });
    }
    public static function  booted()
    {
        static::addGlobalScope('Admin', function ($builder) {
            $builder->where('type', self::class);
        });
    }
}
