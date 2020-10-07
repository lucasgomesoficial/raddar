<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'name',
        'label',
    ];

    /*
     *
     * Relacionamentos
     *
     */
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'permission_role', 'permission_id', 'role_id');
    }
}
