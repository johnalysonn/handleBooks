<?php

namespace Repository;

use App\Repositories\Contracts\LivroRepositoryInterface;

abstract class AbstractRepository implements LivroRepositoryInterface{
    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index() {
        return $this->model->all();
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        return $this->model->whereId($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->whereId($id)->delete();
    }
}
