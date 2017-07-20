<?php

namespace App\Repositories;

use App\Repositories\Contracts\TopicRepository;
use App\Topic;

class EloquentTopicRepository implements TopicRepository
{
    
    public function all()
    {
        return Topic::all();
    }
}