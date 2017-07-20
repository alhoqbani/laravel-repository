<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\TopicRepository;
use App\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    
    /**
     * @var \App\Repositories\Contacts\TopicRepository
     */
    protected $topics;
    
    /**
     * TopicsController constructor.
     *
     * @param \App\Repositories\Contacts\TopicRepository $topics
     */
    public function __construct(TopicRepository $topics)
    {
        $this->topics = $topics;
    }
    
    public function index()
    {
        return  $this->topics->all();
    }
}
