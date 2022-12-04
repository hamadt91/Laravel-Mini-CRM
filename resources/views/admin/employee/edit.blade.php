@extends('layouts.master')
@section('content')
    <div class="d-flex align-items-stretch w-100">
        <div class="page-content form-page">
            <!-- Page Header-->
            <div class="bg-dash-dark-2 py-4">
                <div class="container-fluid">
                    <h2 class="h5 mb-0">Forms</h2>
                </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid py-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 py-3 px-0">
                    </ol>
                </nav>
            </div>
            <!-- Forms Section-->
            <section class="pt-0">
                <div class="container-fluid ">
                    <div class="row gy-4">
                        <!-- Basic Form-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="h4 mb-0">Registration Form</h3>
                                </div>
                                <div class="card-body pt-0">
                                    <p class="text-sm">Edit Employee data</p>
                                    <form action="{{route('admin.employee.update', $employee->id)}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">First Name</label>
                                            <input class="form-control @error('first_name') is-invalid @enderror "
                                                   id="exampleInputEmail1" type="text"
                                                   name="first_name" value="{{$employee->first_name}}">
                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Last Name</label>
                                            <input class="form-control @error('last_name') is-invalid @enderror"
                                                   id="exampleInputEmail1" type="text"
                                                   name="last_name" value="{{$employee->last_name}}">
                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Email</label>
                                            <input class="form-control @error('email') is-invalid @enderror"
                                                   id="exampleInputEmail1" type="email"
                                                   name="email" value="{{$employee->email}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="my-4"></div>
                                        <div class="row">
                                            <label class="col-sm-6 form-label">Company</label>
                                            <div class="col-sm-12">
                                                <select class="form-select mb-3 @error('company') is-invalid @enderror"
                                                        name="company">
                                                    <option value="">-select-</option>
                                                    @foreach($companies as $company)
                                                        <option
                                                            value="{{$company->id}}" {{$company->id == $employee->company_id ? "selected" : ''}} >{{$company->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('company')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Phone</label>
                                            <input class="form-control @error('phone') is-invalid @enderror"
                                                   id="exampleInputEmail1" type="text"
                                                   name="phone" value="{{$employee->phone}}">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Footer-->
                <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs"
                        id="footer">
                    <div class="container-fluid text-center">
                        <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                        <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a
                                href="https://bootstrapious.com">Bootstrapious</a>.</p>
                    </div>
                </footer>
            </section>
        </div>
    </div>
@endsection
