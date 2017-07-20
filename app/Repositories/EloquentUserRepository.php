<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepository;
use App\User;

class EloquentUserRepository implements UserRepository
{
    public function all()
    {
        return User::all();
    }
}
