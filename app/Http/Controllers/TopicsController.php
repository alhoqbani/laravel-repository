<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Contracts\UserRepository;
use App\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    
    /**
     * @var \App\Repositories\Contracts\TopicRepository
     */
    protected $topics;
    /**
     * @var \App\Repositories\Contracts\UserRepository
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
        return  $this->users->all();
    }
}
