<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'day', 'name', 'products', 'date_first', 'date_final', 'cost', 'document', 'user_id',
    ];
}
