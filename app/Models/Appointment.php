<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'message',
    ];

    // You can add any additional methods or relationships here if needed
}
