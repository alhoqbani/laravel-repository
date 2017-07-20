<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class EagerLoad implements CriterionInterface
{
    protected $relations;
    
    /**
     * ByUser constructor.
     *
     * @param $relations
     */
    public function __construct(array $relations)
    {
        $this->relations = $relations;
    }
    
    public function apply($model)
    {
        return $model->with($this->relations);
    }
}