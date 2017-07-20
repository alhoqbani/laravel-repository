<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Contracts\UserRepository;

class TopicsController extends Controller
{
    
    /**
     * @var \App\Repositories\EloquentTopicRepository
     */
    protected $topics;
    /**
     * @var \App\Repositories\EloquentUserRepository
     */
    protected $users;
    
    /**
     * TopicsController constructor.
     *
     * @param \App\Repositories\Contracts\TopicRepository $topics
     * @param \App\Repositories\Contracts\UserRepository  $users
     */
    public function __construct(TopicRepository $topics, UserRepository $users)
    {
        $this->topics = $topics;
        $this->users = $users;
    }
    
    public function index()
    {
        $this->users->update(2, [
            'name'     => 'Update User',
            'email'    => 'updateUser@example.com',
            'password' => bcrypt(123123),
        ]);

        return $this->users->findWhere('name', 'Hamoud Alhoqbani');
        return $this->users->paginate();
        
        return $this->users->all();
    }
}
