<?php

namespace App\Models;

use App\Observers\BlogObserver;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected  $fillable = [
        'title',
        'slug',
        'content',
    ];

    public static function boot(): void
    {
        parent::boot();
        static::observe(BlogObserver::class);
    }
}
