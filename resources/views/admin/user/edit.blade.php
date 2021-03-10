@extends('admin.master')


@section('body')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User Module</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add User</a>
</div>

<form action="{{ route('update-user', $user->id ) }}" method="POST">
    @csrf
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
                <div class="form-group row">
                    <label class="control-label col-md-2">User me</label>
                        <div class="col-md-10">
                            <input type="text" value="{{ $user -> name }}" name="name" class="form-control">
                            <input type="hidden" name="id" value="{{ $user->id }}"/>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">User Email</label>
                        <div class="col-md-10">
                            <input type="text" value="{{ $user -> email }}" name="email" class="form-control">
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="control-label col-md-2">Access Label</label>
                        <div class="col-md-10">
                            <input type="text" value="{{ $user -> access_label }}" name="access_label" class="form-control">
                        </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Update New User">
                        </div>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection