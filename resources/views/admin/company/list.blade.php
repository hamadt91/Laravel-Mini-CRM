@extends('layouts.master')
@section('content')
    <div class="page-content form-page w-100">
        <!-- Page Header-->
        <div class="bg-dash-dark-2 py-4">
            <div class="container-fluid">
                <h2 class="h5 mb-0">List</h2>
            </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid py-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3 px-0">
                </ol>
                @if(Session('create-message'))
                    <div class="alert alert-success">{{Session('create-message')}}</div>
                @elseif(Session('update-message'))
                    <div class="alert alert-info">{{Session('update-message')}}</div>
                @elseif(Session('delete-message'))
                    <div class="alert alert-danger">{{Session('delete-message')}}</div>
                @endif
            </nav>
        </div>
        <section class="tables py-0">
            <div class="container-fluid">
                <div class="row gy-4">
                    <div class="col-lg-6 w-100">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="row">
                                    <div class="class col-6">
                                        <h3 class="h4 mb-0">list of Companies</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($companies as $company)
                                            <tr>
                                                <td><img src="{{asset('storage/images/'.$company->logo)}}" alt="logo"
                                                         style="width:40px">
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.get.company.employee.list', $company->id)}}">{{$company->name}}</a>
                                                </td>
                                                <td>{{$company->email}}</td>
                                                <td>
                                                    <form action="{{route('admin.company.edit', $company->id)}}">
                                                        <button type="submit" class="btn btn-success">Edit</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('admin.company.delete', $company->id)}}"
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
                                    {{ $companies->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
            <div class="container-fluid text-center">
                <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.
                </p>
            </div>
        </footer>
    </div>
@endsection
