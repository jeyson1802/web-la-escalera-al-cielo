<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function author(User $user, Post $post){

        return true;
        return $user->id == $post->user_id;
    }

    public function published(?User $user, Post $post){

        return 2 == $post->status;
    }
}
