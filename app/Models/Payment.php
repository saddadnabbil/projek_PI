<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'amount',
        'payment_method',
        'proof_image',
        'status'
    ];
}