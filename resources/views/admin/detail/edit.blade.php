@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit News Table</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Edit News</a>
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
               <form action="{{ route('update-news') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="form-group row">
                    <label class="control-label col-md-2">Category Name</label>
                        <div class="col-md-10">
                            <select class="form-control" name="category_id">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $key => $category)
                                <option value="{{ $category->id }}"{{ $detail ->category_id == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
               <div class="form-group row">
                    <label class="control-label col-md-2">Tittle Name</label>
                        <div class="col-md-10">
                            <input type="text" name="tittle_name" value="{{ $detail->tittle_name }}" class="form-control"/>
                            <input type="hidden" name="id" value="{{ $detail->id }}">
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Main Image</label>
                        <div class="col-md-10">
                            <input type="file" name="image"  class="form-control-file" accept="image/*"/>
                            <img src="{{ asset($detail->image) }}" height="60" width="90" alt=""/>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Full Description</label>
                        <div class="col-md-10">
                            <textarea name="full_description"  class="form-control">{{ $detail->full_description }}</textarea>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2">Publication Status</label>
                        <div class="col-md-10">
                            <label><input type="radio" name="status" {{ $detail ->status== 1 ? 'checked' : ''}} value="1"/>Published</label>
                            <label><input type="radio" name="status" {{ $detail ->status== 0 ? 'checked' : ''}} value="0"/>Un-Published</label>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2"></label>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Update New Post"/></label>
                        </div>
                </div>
               </form>
            </div>
        </div>
    </div>



@endsection