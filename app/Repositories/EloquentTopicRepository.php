<?php

namespace App\Repositories;

use App\Repositories\Contracts\TopicRepository;
use App\Topic;

class EloquentTopicRepository extends RepositoryAbstract implements TopicRepository
{
    public function entity()
    {
        return Topic::class;
    }
}