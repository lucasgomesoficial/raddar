<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\ProductPolicy;
use App\User;
use App\Models\Product;
use App\Models\Permission;
use App\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
    'App\Models\Product' => 'App\Policies\ProductPolicy',
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();
    
    /*Gate::define('admin.setup.index', function($user, $products) {
      return $user->id === $products->user_id;
    });*/
    
    $permissions = Permission::with('roles')->get();
    foreach($permissions as $permission)
    {
      Gate::define($permission->name, function(User $user) use ($permission) {
      return $user->hasPermission($permission);
      });
    }
    
    Gate::before(function(User $user, $ability) {
      
      if ( $user->hasAnyRoles('adm') )
        return true;
    });
  }
}
