<?php


namespace App\Http\Service;


use App\Employee;
use App\Http\Repository\Eloquent\EmployeeRepository;

class EmployeeService
{
    protected $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAll()
    {
        return $this->employeeRepository->getAll();
    }

    public function store($request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->birthday = $request->birthday;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->id_card = $request->id_card;
        $employee->email = $request->email;
        $employee->addresss = $request->address;
        $employee->group_id = $request->group_id;
        $this->employeeRepository->store($employee);
    }

    public function update($request, $id)
    {
        $employee = $this->employeeRepository->findById($id);
        $employee->name = $request->name;
        $employee->birthday = $request->birthday;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->id_card = $request->id_card;
        $employee->email = $request->email;
        $employee->addresss = $request->address;
        $employee->group_id = $request->group_id;
        $this->employeeRepository->update($employee);

    }

    public function destroy($id)
    {
        $employee = $this->employeeRepository->findById($id);
        $this->employeeRepository->delete($employee);
    }

    public function findById($id)
    {
        return $this->employeeRepository->findById($id);
    }

    public function search($request)
    {
        $keyword = $request->search;
        if (!$keyword) {
            return false;
        } else {
            return $this->employeeRepository->search($keyword);
        }
    }
}
