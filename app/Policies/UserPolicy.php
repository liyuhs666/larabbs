<?php
//授权文件,通过php artisan make:policy UserPolicy生成
namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function edit(User $currentUser, User $user)
    {
         return $currentUser->id === $user->id;
    }


    public function update(User $currentUser, User $user)
    {
         return $currentUser->id === $user->id;    
    }
}
