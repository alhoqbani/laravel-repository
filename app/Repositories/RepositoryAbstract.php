<?php

namespace App\Repositories;

use App\Repositories\Contracts\GeneralRepository;

abstract class RepositoryAbstract implements GeneralRepository
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
        return $this->model->all();
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
        return $this->model->find($id)->update($attributes);
    }
    
    public function delete($id)
    {
        return $this->model->find($id)->delete();
    }
    
    protected function resolveModel()
    {
        return app()->make($this->entity());
    }
    
}
