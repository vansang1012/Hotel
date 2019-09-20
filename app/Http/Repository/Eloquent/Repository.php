<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\Contracts\RepositoryInterface;

abstract class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    abstract function getModel();

    public function getAll()
    {
        return $this->model->all();
    }

    public function store($obj)
    {
        $obj->save();
    }

    public function update($obj)
    {
        $obj->save();
    }

    public function delete($obj)
    {
        $obj->delete();
    }


}
