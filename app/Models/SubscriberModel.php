<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriberModel extends Model
{
    protected $fillable = ['email'];
    protected $table = 'subscribers'; // 
}
