@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> View Post Table</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> View Post Details</a>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $detail->category->name }}</td>
                        </tr>
                        <tr>
                            <th>Tittle Name</th>
                            <td>{{ $detail ->tittle_name }}</td>
                        </tr>
                        <tr>
                            <th>Main Image</th>
                            <td><img src="{{ asset($detail->image) }} " height="60" width="90" alt=""/></td>
                        </tr>
                        <tr>
                            <th>Full Description</th>
                            <td>{{ $detail ->full_description }}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $detail ->status== 1 ? 'Published' : 'Unpublished'  }}</td>
                        </tr>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection