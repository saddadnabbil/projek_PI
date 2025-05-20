<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'email',
        'phone',
        'date',
        'status',
        'notes'
    ];

    protected $casts = [
        'date' => 'datetime'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
