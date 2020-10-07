<?php

namespace App\Policies;

use App\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function authProduct($user, $product)
    {
        return $user->id === $product->user_id;
    }
}
