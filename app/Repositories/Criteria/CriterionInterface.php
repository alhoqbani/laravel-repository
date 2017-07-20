<?php

namespace App\Repositories\Criteria;

use Illuminate\Database\Eloquent\Model;

interface CriterionInterface
{
    public function apply(Model $model);
}