<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\AddressRepository;

class AddressController extends Controller
{
    /**
     * @var \App\Repositories\Eloquent\EloquentAddressRepository
     */
    private $addresses;
    
    /**
     * AddressController constructor.
     *
     * @param \App\Repositories\Contracts\AddressRepository $addresses
     */
    public function __construct(AddressRepository $addresses)
    {
        $this->addresses = $addresses;
    }
    
    public function index()
    {
        return $this->addresses->all();
    }
}
