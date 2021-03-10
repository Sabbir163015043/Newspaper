@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Category Table</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> View Report</a>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0">
            @if($message = Session::get('message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
             @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL No</th>
                            <th> Category Name</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($categories as $key => $category)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $category->name}}</td>
                            <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            <td>
                                <a href="{{ route('edit-category',['id' => $category->id]) }}" class="btn btn-success">Edit</a>
                                <a href="{{ route('delete-category',['id' => $category->id]) }}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection