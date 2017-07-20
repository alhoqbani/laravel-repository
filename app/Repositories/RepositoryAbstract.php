<?php

namespace App\Repositories;

use App\Repositories\Contracts\GeneralRepository;
use App\Repositories\Criteria\CriteriaInterface;
use App\Repositories\Criteria\CriterionInterface;

abstract class RepositoryAbstract implements GeneralRepository, CriteriaInterface
{
    
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;
    
    abstract public function entity();
    
    public function __construct()
    {
        $this->model = $this->resolveModel();
    }
    
    public function all()
    {
        return $this->model->get();
    }
    
    public function find($id)
    {
        return $this->model->find($id);
    }
    
    public function findWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }
    
    public function findWhereFirst($column, $value)
    {
        return $this->model->where($column, $value)->first();
    }
    
    public function paginate($perPage = 10)
    {
        return $this->model->paginate($perPage);
    }
    
    public function create(array $attributes)
    {
        $this->model->unguard();
        return $this->model->create($attributes);
    }
    
    public function update($id, array $attributes)
    {
        $this->model->unguard();
        return $this->model->find($id)->update($attributes);
    }
    
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
    
    public function withCriteria(CriterionInterface ...$criteria)
    {
        $criteria = array_flatten($criteria);
        
        foreach ($criteria as $criterion) {
            $this->model = $criterion->apply($this->model);
        }
        
        return $this;
    }
    
    protected function resolveModel()
    {
        return app()->make($this->entity());
    }
    
}
