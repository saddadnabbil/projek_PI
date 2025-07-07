<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'image',
        'features',
        'price',
        'is_active'
    ];

    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($service) {
            $service->slug = Str::slug($service->name);
        });
        
        static::updating(function ($service) {
            $service->slug = Str::slug($service->name);
        });
    }

    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    public function getSeoDescriptionAttribute()
    {
        return strip_tags($this->description);
    }
}
