<?php

namespace App\Repositories;

abstract class RepositoryAbstract
{
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
    
    
    protected function resolveModel()
    {
        return app()->make($this->entity());
    }
    
}
