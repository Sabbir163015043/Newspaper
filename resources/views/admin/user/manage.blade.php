@extends('admin.master')


@section('body')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Manage Brand</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Manage Brand</a>
</div>

<table class="table table-bordered">
    <div class="row">
     <div class="container"> 
        <tr>
           <th>SL No.</th>
           <th>User Name</th>
           <th>User Email </th>
           <th>User Access Level </th>
           <th>Action</th>
       </tr>
       @foreach($users as $key => $user)
        <tr>
       <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->access_label == 1 ? 'SuperAdmin' : 'Admin'}}</td>
        <td>
            <a href="{{ route('edit-user',[ 'id' => $user->id]) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('delete-user',[ 'id' => $user->id]) }}" class="btn btn-danger" onclick="return confirm('Are your Sure this user delete')">Delete</a>
                
        </td>
        </tr>
       @endforeach
    
     </div>
    </div>
</table>

@endsection