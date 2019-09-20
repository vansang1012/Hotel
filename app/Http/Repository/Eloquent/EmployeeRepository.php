<?php


namespace App\Http\Repository\Eloquent;


use App\Employee;
use App\Http\Repository\Contracts\EmployeeRepositoryInterface;

class EmployeeRepository extends Repository implements EmployeeRepositoryInterface
{

    function getModel()
    {
        return Employee::class;
    }

    function findById($id)
    {
        return $employee = Employee::findorfail($id);
    }

    function search($keyword)
    {
        return Employee::where('name', 'LIKE', '%' . $keyword . '%')->get();
    }
}
