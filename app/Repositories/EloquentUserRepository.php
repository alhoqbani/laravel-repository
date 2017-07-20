<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserRepository;
use App\User;

class EloquentUserRepository extends RepositoryAbstract implements UserRepository
{
    public function entity()
    {
        return User::class;
    }
}
