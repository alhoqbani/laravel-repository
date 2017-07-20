<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;
use Illuminate\Database\Eloquent\Model;

class IsLive implements CriterionInterface
{
    
    public function apply(Model $model)
    {
        return $model->live();
    }
}