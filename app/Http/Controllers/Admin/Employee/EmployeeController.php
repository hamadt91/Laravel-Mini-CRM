<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function create()
    {
        $companies = Company::all();

        return view('admin.employee.create', compact('companies'));
    }

    public function store(StoreEmployeeRequest $request)
    {
        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_id' => $request->company,
        ]);
        Session()->flash('create-message', 'Data has been Created');

        return redirect(route('admin.get.employee.list'));
    }

    public function list()
    {
        $employees = Employee::orderBy('id', 'asc')->with('company')->paginate(5);

        return view('admin.employee.list', compact('employees'));
    }

    public function edit($id)
    {
        $companies = Company::all();
        $employee = Employee::find($id);
        return view('admin.employee.edit', compact('employee', 'companies'));
    }

    public function update(UpdateEmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);
        $employee->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company_id' => $request->company,
        ]);
        Session()->flash('update-message', 'Data has been Updated');

        return redirect(route('admin.get.employee.list'));
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        Session()->flash('delete-message', 'Data has been deleted');

        return redirect(route('admin.get.employee.list'));
    }
}
