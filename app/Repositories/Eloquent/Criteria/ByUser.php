<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class ByUser implements CriterionInterface
{
    protected $userId;
    
    /**
     * ByUser constructor.
     *
     * @param $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }
    
    public function apply($model)
    {
        return $model->where('user_id', $this->userId);
    }
}