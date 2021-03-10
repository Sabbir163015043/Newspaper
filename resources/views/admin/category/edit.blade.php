@extends('admin.master')

@section('body')

<div class="container-fluid">

<!-- Page Heading -->
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Category Table</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Edit Category</a>
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
               <form action="{{ route('update-category') }}" method="POST">
               @csrf
               <div class="form-group row">
                    <label class="control-label col-md-2">Category Name</label>
                        <div class="col-md-10">
                            <input type="text" value="{{ $category->name }}" name="name" class="form-control"/>
                            <input type="hidden" name="id" value="{{ $category->id }}"/>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Publication Status</label>
                        <div class="col-md-10">
                            <label><input type="radio" name="status" {{ $category->status == 1 ? 'checked':'' }} value="1"/>Published</label>
                            <label><input type="radio" name="status" {{ $category->status == 2 ? 'checked':'' }} value="2"/>Un-Published</label>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Update Category Information"/></label>
                        </div>
                </div>
               </form>
            </div>
        </div>
    </div>



@endsection