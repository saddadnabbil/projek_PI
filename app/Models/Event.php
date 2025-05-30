<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'image',
        'event_date',
        'location',
        'status',
        'features'
    ];

    protected $casts = [
        'event_date' => 'date',
        'features' => 'array',
    ];

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($event) {
            $event->slug = Str::slug($event->title);
        });
    }
}
