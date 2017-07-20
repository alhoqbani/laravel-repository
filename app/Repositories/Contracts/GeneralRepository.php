<?php

namespace App\Repositories\Contracts;

interface GeneralRepository
{
    public function all();
    public function find($id);
    public function findWhere($column, $value);
    public function findWhereFirst($column, $value);
    public function paginate($perPage = 10);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}
