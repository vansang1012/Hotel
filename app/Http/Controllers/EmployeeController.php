<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Group;
use App\Http\Requests\EmployeeRequest;
use App\Http\Service\EmployeeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = $this->employeeService->getAll();
        return response()->json($employees);
    }

    public function create()
    {
        $groups = Group::all();
        return view('employees.create', compact('groups'));
    }

    public function store(EmployeeRequest $request)
    {
        $this->employeeService->store();
        Session::flash('success_store');
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->employeeService->findById($id);
        $groups = Group::all();
        return view('employees.edit', compact('employee', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {
        $this->employeeService->update($request, $id);
        Session::flash('success', 'Update Thanh Cong');
        return redirect()->route('employee.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->employeeService->destroy($id);
        Session::flash('success_delete', 'Delete thanh cong');
        return redirect()->route('employee.index');
    }

    public function search(Request $request)
    {
        $employees = $this->employeeService->search($request);
        return view('employees.list', compact('employees'));
    }

}

