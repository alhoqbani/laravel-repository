<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\AddressRepository;
use App\Repositories\Contracts\UserRepository;

class AddressController extends Controller
{
    /**
     * @var \App\Repositories\Eloquent\EloquentAddressRepository
     */
    private $addresses;
    /**
     * @var \App\Repositories\Contracts\UserRepository
     */
    private $users;
    
    /**
     * AddressController constructor.
     *
     * @param \App\Repositories\Contracts\UserRepository    $users
     * @param \App\Repositories\Contracts\AddressRepository $addresses
     */
    public function __construct(UserRepository $users,AddressRepository $addresses)
    {
        $this->addresses = $addresses;
        $this->users = $users;
    }
    
    public function index()
    {
        $this->users->createAddress(1, [
           'street' => '116 Oxford St.'
        ]);
        
        $this->users->deleteAddress(1, 4);
        
        return $this->addresses->all();
    }
    
    
}
