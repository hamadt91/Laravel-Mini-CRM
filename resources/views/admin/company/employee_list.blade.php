@extends('layouts.master')
@section('content')
    <div class="page-content form-page w-100">
        <!-- Page Header-->
        <div class="bg-dash-dark-2 py-4">
            <div class="container-fluid">
                <h2 class="h5 mb-0">Company Employee List</h2>
            </div>
        </div>
        <section class="tables py-0 mt-5">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-6 w-100">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="row">
                                    <div class="class col-6">
                                        <h3 class="h4 mb-0">Company: {{$company->name}} </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th>Phone</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($employees as $employee)
                                            <tr>
                                                <td>{{$employee->first_name}}</td>
                                                <td>{{$employee->last_name}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{$employee->company->name}}</td>
                                                <td>{{$employee->phone}}</td>
                                                <td>
                                                    <form action="{{route('admin.employee.edit', $employee->id)}}"
                                                          method="">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.employee.delete', $employee->id)}}"
                                                          method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{ $employees->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Footer-->
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
            <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.
                </p>
            </div>
        </footer>
    </div>
@endsection
