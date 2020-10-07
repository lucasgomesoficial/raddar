<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'label',
    ];

    /*
     *
     * Relacionamentos
     *
     */
    public function users()
    {
        return $this->hasMany(\App\User::class, 'role_id', 'id');
    }
    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Permission::class, 'role_user', 'role_id', 'permission_id');
    }
}
