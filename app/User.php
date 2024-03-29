<?php

namespace App;

use App\Models\Permission;
use App\Models\Product;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image', 'birth', 'adress', 'corp', 'pessoal', 'cargo', 'grupo', 'imgcorp', 'cidade', 'estado',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public static function adminlte_image()
    {
        return url('public/storage/users/'.auth()->user()->image);
    }

    public static function adminlte_desc()
    {
        return auth()->user()->cargo;
    }
    
    public function adminlte_profile_url()
    {
        return 'profile/perfil';
    }

    /*public static function adminlte_imgcorp()
    {
        return (storage_path('app/public/group/'.$user->image));
    }*/
    
    /*public static function adminlte_grupo()
    {
        return auth()->user()->grupo;
    }*/
    
    /*
     *
     * Funções de Relacionamentos
     *
     *
     */
    public function role()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'id', 'role_id');
    }
    
    public function hasPermission(Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles);
    }
    
    public function hasAnyRoles($roles)
    {
      /*foreach ($roles as $role) {
        // dd($role);
        if ($role['name'] == $this->role->name) {
          return true;
        }
      }
      return false;*/
      
      if(is_array($roles) || is_object($roles)) 
      {
        return !! $roles->intersect($this->roles)->count();
      }
      
      return $this->roles->contains('name', $roles);
    }
    
    public function product()
    {
        return $this->hasOne(Product::class, 'user_id', 'id');
    }

    public function user()
    {
      return $this->belongsToMany(User::class, "user_id", 'id');
    }
    
}