<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\Eloquent\Criteria\IsLive;

class TopicsController extends Controller
{
    
    /**
     * @var \App\Repositories\Eloquent\EloquentTopicRepository
     */
    protected $topics;
    /**
     * @var \App\Repositories\Eloquent\EloquentUserRepository
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
        $this->topics->update(3, ['live' => false]);
        return $this->topics->withCriteria(new IsLive())->all();
    }
}
