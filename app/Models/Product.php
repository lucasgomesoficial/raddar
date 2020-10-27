<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
    protected $table='products';
    protected $fillable = [
        'plan_action', 'gere_group', 'meta_realizado', 'indi_comer', 'indi_vd', 'storage_map',
    ];
    
    public function owner()
    {
        return $this->belongsTo(\App\User::class);
    }
}
