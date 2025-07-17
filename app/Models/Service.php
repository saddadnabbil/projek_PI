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

    public function setFeaturesAttribute($value)
    {
        if (is_string($value)) {
            // Jika string, ubah jadi array dengan explode koma
            $this->attributes['features'] = json_encode(array_map('trim', explode(',', $value)));
        } elseif (is_array($value)) {
            $this->attributes['features'] = json_encode($value);
        } else {
            $this->attributes['features'] = json_encode([]);
        }
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
