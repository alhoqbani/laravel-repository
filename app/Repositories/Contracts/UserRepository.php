<?php

namespace App\Repositories\Contracts;

interface UserRepository
{
    public function createAddress($userId, $attributes);
    public function deleteAddress($userId, $addressId);
}
