@extends('admin.master')

@section('body')

<div class="container-fluid">

<!-- Page Heading -->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add User</a>
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
               <form action="{{ route('new-user') }}" method="POST">
               @csrf
               <div class="form-group row">
                    <label class="control-label col-md-2">User Name</label>
                        <div class="col-md-10">
                            <input type="text" name="name" value="" class="form-control"/>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">User Email</label>
                        <div class="col-md-10">
                            <input type="text" name="email" value="" class="form-control"/>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">User Password</label>
                        <div class="col-md-10">
                            <input type="text" name="password" value="" class="form-control"/>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Access Label</label>
                        <div class="col-md-10">
                            <select class="form-control" name="access_label" required>
                            <option value="" disabled selected>--- Select Access Label---</option>
                            <option value="1">Super Admin</option>
                            <option value="2">Admin</option>
                            
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Create New User"/></label>
                        </div>
                </div>
               </form>
            </div>
        </div>
    </div>



@endsection