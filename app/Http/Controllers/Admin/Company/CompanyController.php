<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    public function create()
    {
        return view('admin.company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:companies',
            'website' => 'required',
            'logo' => 'mimes:jpeg,jpg,png,gif|required',
        ]);
        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => $request->logo->hashName(),
        ]);
        $request->logo->store('images', 'public');
        Session()->flash('create-message', 'Data has been Created');

        return redirect(route('admin.get.company.list'));
    }

    public function list()
    {
        $companies = Company::orderBy('id', 'asc')->paginate(5);

        return view('admin.company.list', compact('companies'));
    }

    public function edit($id)
    {
        $company = Company::find($id);

        return view('admin.company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $request->validate([
            'name' => 'required',
            'email' => ['required', Rule::unique('companies')->ignore($id)],
            'website' => 'required',
        ]);
        $company->update([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ]);
        Session()->flash('update-message', 'Data has been Updated');

        return redirect(route('admin.get.company.list'));
    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->employees ? $company->employees()->delete() : '';
        $company->delete();
        Session()->flash('delete-message', 'Data has been deleted');

        return redirect(route('admin.get.company.list'));
    }

    public function employeelist($id)
    {
        $company = Company::find($id);
        $employees = $company->employees()->paginate(5);

        return view('admin.company.employee_list', compact('employees', 'company'));
    }
}
